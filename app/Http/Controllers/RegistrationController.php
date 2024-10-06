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


    public function show()
    {
        return view('registrations.show');
    }


    public function checkout(Request $request,StripeClient $stripe)
    {


        $price =  $stripe->prices->retrieve(env('STRIPE_PRICE_ID'));




        // Vytvoření Stripe Checkout Session
        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [[
                //'price' => 'price_1Ps1uS2LSxhftJEav9dO6DNQ', // testovací Price ID
                'price' => env('STRIPE_PRICE_ID'), // Production Price ID
                'quantity' => 1,
            ]],

            'mode' => 'payment',
            'success_url' => "/",
            'cancel_url' => "/",
            'metadata' => [
                'amount' => $price->unit_amount, // Cena v v halerich
                'event_id' => $request->event_id,
                'payment_recipient_id' => $request->payment_recipient,
            ],

            'payment_intent_data' => [
                'transfer_data' => ['destination' => env('STRIPE_CONNECT_CLIENT_ID')],
                'setup_future_usage' => 'on_session', //mozna kvuli apple kdyz nebude fungovat,dat pryč
                'statement_descriptor' => 'CHARITY RUN',

            ],
        ]);

        // Přesměrování na Stripe Checkout
        return redirect($checkout_session->url);

        }




    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Category $category, Registration $registration)
    {

        $eventId = $request->eventId;
        $userId = $request->user()->id;

        if (! $registration->registrationExists($eventId, $userId)) {
            $registration->create([
                'event_id' => $eventId,
                'user_id' => $userId,
                'category_id' => $category->categoryChoice($request->user()->gender, calculate_age($request->user()->birth_year))->id,
            ]);

            session()->flash('status', 'Byli jste úspěšně zaregistrováni');
        } else {
            session()->flash('status', 'Na tento závod už jsme vás zaregistrovali');
        }

        return redirect()->back();

    }
}
