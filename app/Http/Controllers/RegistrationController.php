<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Registration;
use Illuminate\Http\Request;
use Stripe\StripeClient;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Category $category)
    {
        return view('registrations.index', [
            'categories' => $category->categoryListAbsolute($request->eventId),
        ]);
    }


    public function show(Request $request,Registration $registration)
    {
        $registration_exists = $registration->registrationExists(env('ACTIVE_RACE_ID'), $request->user()->id);

        if(!is_null($registration_exists))
        {
            return redirect()->route('index')->with('error', 'You are already registered for this race');
        }

        return view('registrations.show');
    }


    public function checkout(Request $request,StripeClient $stripe)
    {

        $myPrice = $request['price'];

        $price =  $stripe->prices->retrieve(env('STRIPE_PRICE_ID'));

        $img = asset('images/blessed-citron-logo.jpeg');

        // Vytvoření Stripe Checkout Session
        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd', // Nastavení měny na dolary
                    'product_data' => [
                        'name' => 'Starting fee for The Kiptumtime race',
                        'description' => 'This fee is non-refundable and all proceeds will be donated to Blessed Citron Foundation',
                        'images' => ['https://kiptumtime.run/images/blessed-citron-logo.jpeg'],
                    ],
                    'unit_amount' => $myPrice * 100, // Převod ceny na centy
                ],

                'quantity' => 1,
            ]],

            'mode' => 'payment',

            'success_url' => route('registration.store',1).'?session_id={CHECKOUT_SESSION_ID}',

            'cancel_url' => route('registration.signin'),

            'payment_intent_data' => [
                'transfer_data' => ['destination' => env('STRIPE_CONNECT_CLIENT_ID')],
                'setup_future_usage' => 'on_session', //mozna kvuli apple kdyz nebude fungovat,dat pryč
                'statement_descriptor' => 'KIPTUMTIME',

            ],
        ]);

        // Přesměrování na Stripe Checkout
        return redirect($checkout_session->url);

    }




    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request, Category $category, Registration $registration)
    {

        $eventId = $request->eventId;

        $userId = $request->user()->id;

        $age = calculate_age($request->user()->birth_year);

        $gender = $request->user()->gender;

        $category_id = $category->categoryChoice($gender, $age);

        if (! $registration->registrationExists($eventId, $userId))
        {
            $registration->create([
                'event_id' => $eventId,
                'user_id' => $userId,
                'category_id' => $category_id,
            ]);

            session(['registered_for_race' => $eventId]);

            session()->flash('success', 'You have been successfully registered for the race');
        }
        else
        {
            session()->flash('error', 'You are already registered for this race');
        }

        return redirect()->route('index');

    }
}
