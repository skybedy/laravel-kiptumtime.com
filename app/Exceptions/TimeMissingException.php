<?php

namespace App\Exceptions;

use Exception;

class TimeMissingException extends Exception
{
    public function __construct($message = 'Apparently the GPX file does not contain time data')
    {
        parent::__construct($message);
    }
}
