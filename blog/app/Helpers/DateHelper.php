<?php

namespace App\Helpers;

class DateHelper
{
    public static function fechaActual($formato = 'd/m/Y')
    {
        return date($formato);
    }
}
