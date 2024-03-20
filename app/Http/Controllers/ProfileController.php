<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Flauser;
use App\Models\Result;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request,User $user,Flauser $flauser): View
    {
        $passwordChanged = 1;
        $use = $request->user();

        $use->password =  Hash::make('password');
      // $use->save();


      
        if(is_null($user::where('id',$request->user()->id)->value('password_changed')))
        {
            $passwordChanged = null;
        }

        return view('profile.edit', [

            'user' => $request->user(),

            'passwordChanged' => $passwordChanged,

        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request,Result $result): RedirectResponse
    {
        
        $request->validateWithBag('userDeletion', [
            
            'password' => ['required', 'current_password'],
        
        ]);

        $user = $request->user();

        $result->deleteResultsAfterDeleteUser($user->id);

        Flauser::where('email',$request->user()->email)->delete();

        Auth::logout();

        $user->delete();



        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

}
