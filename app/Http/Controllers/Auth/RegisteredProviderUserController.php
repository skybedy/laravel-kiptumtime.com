<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Flauser;
use App\Providers\RouteServiceProvider;
use Exception;
use App\Events\UserRegistered;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use PeterColes\Countries\CountriesFacade as Countries;
use Illuminate\Support\Str;
use App\Models\Registration;


class RegisteredProviderUserController extends Controller
{
    /*
    * Display the registration view.
    */
    public function create(Request $request): View
    {

        $nameExplode = explode(' ', $request->name);

        return view('auth.register-socialite', [
            'email' => $request->email,
            'id' => $request->id,
            'firstname' => $nameExplode[0],
            'lastname' => $nameExplode[1],
            'provider' => $request->provider,
            'first_year' => date('Y') - 99,
            'last_year' => date('Y') - 18,
            'countries' => Countries::lookup(),

        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $providerNameId = false;

        switch ($request->provider_name) {
            case 'facebook':
                $providerNameId = 'facebook_id';
                break;
            case 'google':
                $providerNameId = 'google_id';
                break;
            case 'strava':
                $providerNameId = 'strava_id';
                break;
            }

        $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'country' => 'required',
            'gender' => 'required',
            'birth_year' => 'required',
            'email' => 'required|string|email|max:255|unique:'.User::class,
        ]);

        $defaultPassword = Str::random(8);

        $password = Hash::make($defaultPassword);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'team' => $request->team,
            'country' => $request->country,
            'gender' => $request->gender,
            'birth_year' => $request->birth_year,
            'email' => $request->email,
            'password' => $password,
            $providerNameId => $request->provider_id,
            'p' => $defaultPassword
        ]);

        $joined_at = date('Y-m-d H:i:s');


         Flauser::create([
            'username' => $request->firstname.' '.$request->lastname,
            'email' => $request->email,
            'password' => $password,
            'joined_at' => $joined_at,
            'is_email_confirmed' => 1,
        ]);

       event(new UserRegistered($user, $defaultPassword));

       event(new Registered($user));

        Auth::login($user);

        if($request->provider_name == 'strava') {
            $path = "";
            return redirect('https://www.strava.com/oauth/authorize?client_id=117954&response_type=code&redirect_uri=https://virtual-charity.run/redirect-strava?path='.$path.'&approval_prompt=force&scope=activity:read');
        }
        else
        {
            return redirect(RouteServiceProvider::HOME)->with('info', 'You have been successfully logged in, confirmation information will be sent to e-mail '.$request->email);

        }

    }

    /**
     * Create a new controller instance.
     */
    public function redirectToProvider(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleProviderCallback(string $provider, Request $request,Registration $registration)
    {
        try {

            $user = Socialite::driver($provider)->user();


            $finduser = User::where($provider.'_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);


                $registration_exists = $registration->registrationExists(env('ACTIVE_RACE_ID'), $finduser->id);

                if(!is_null($registration_exists))
                {
                    $event_id = $registration_exists->event_id;

                    session(['registered_for_race' => $event_id]);
                }


                if (isset($registration->registrationExists(env('ACTIVE_RACE_ID'), $finduser->id)->event_id))
                {
                    $event_id = $registration->registrationExists(env('ACTIVE_RACE_ID'), $request->user()->id)->event_id;


                }

                return redirect()->intended('/');

            } else {
                //          dd($user);

                return redirect()->route('register-socialite', [
                    'id' => $user->id,
                    'email' => $user->email,
                    'name' => $user->name,
                    'provider' => $provider,
                ]);
                /*
                return Inertia::render('Auth/RegisterSocialite', [
                    'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
                    'status' => session('status'),
                ]);*/

                /*

                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'facebook_id'=> $user->id,
                        'password' => encrypt('password')
                    ]);*/

                //Auth::login($newUser);

                //return redirect()->intended('dashboard');
            }

        } catch (Exception $e) {
            // dd($e->getMessage());
        }
    }
}
