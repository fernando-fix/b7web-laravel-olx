<?php

use App\Helpers\Alert;

if (!function_exists('alert')) {
    function alert()
    {
        return new Alert();
    }
}
