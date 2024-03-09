<?php

namespace App\Exceptions;

use Exception;

class StartDateLocalMissingException extends Exception
{
    public function __construct($message = 'There is some problem with your link')
    {
        parent::__construct($message);
    }
}
