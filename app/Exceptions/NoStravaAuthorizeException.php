<?php

namespace App\Exceptions;

use Exception;

class NoStravaAuthorizeException extends Exception
{
    public function __construct()
    {
        $message = 'First you need to <a class="underline" href="'.route('authorize_strava').'">authorize</a>  the application on Strava.';
        parent::__construct($message);
    }
}
