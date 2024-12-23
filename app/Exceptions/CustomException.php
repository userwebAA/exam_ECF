<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    public function __construct($message = "Erreur personnalisée", $code = 400)
    {
        parent::__construct($message, $code);
    }
    }
