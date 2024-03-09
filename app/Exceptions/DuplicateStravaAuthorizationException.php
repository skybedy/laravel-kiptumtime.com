<?php

namespace App\Exceptions;

use Exception;

class DuplicateStravaAuthorizationException extends Exception
{

    public function __construct($message = 'This Strava user is already registered')
    {
        parent::__construct($message);
    }

}
