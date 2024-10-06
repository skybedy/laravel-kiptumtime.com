<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\Registration;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class RegisterUserToRace
{

    private $eventId = 1;


    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {


        /*
        $category = new Category();

        $age = date("Y") - $event->user->birth_year;

        $categoryId = $category->categoryChoice($event->user->gender, $age);

        $registration = new Registration();

        $registration->create([

            'event_id' => $this->eventId,

            'user_id' => $event->user->id,

            'category_id' => $categoryId,
        ]);*/

        Mail::to($event->user->email)->send(new TestEmail($event->defaultPassword));

        Log::info('Uzivatel '.$event->user->id.' zaregistrován.');
    }
}
