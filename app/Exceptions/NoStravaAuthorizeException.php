<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Support\Facades\Blade;

class NoStravaAuthorizeException extends Exception
{
    public function __construct()
    {
        $route = route('authorize_strava');
        
        $message = 'First you need to <a class="underline" href="'.$route.'">ENABLE</a> the application on Strava.';

        parent::__construct($message);
    }
}
