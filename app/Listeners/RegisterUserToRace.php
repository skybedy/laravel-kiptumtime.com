<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Registered;
use App\Models\Category;
use App\Models\Registration;

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
    public function handle(Registered $event): void
    {
        $category = new Category();

        $age = date("Y") - $event->user->birth_year;

        $categoryId = $category->categoryChoice($event->user->gender, $age);

        $registration = new Registration();

        $registration->create([

            'event_id' => $this->eventId,

            'user_id' => $event->user->id,

            'category_id' => $categoryId,
        ]);

       Log::info('Uzivatel '.$event->user->id.' zaregistrován.');
    }
}
