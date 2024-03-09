<?php

namespace App\Exceptions;

use Exception;

class DuplicityTimeException extends Exception
{
    public function __construct()
    {
        $message = "The activity with these data has already been uploaded.";

        parent::__construct($message, 0, null);
    }

}
