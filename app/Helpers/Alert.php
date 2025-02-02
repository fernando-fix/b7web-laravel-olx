<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class Alert
{
    public static function success($message)
    {
        self::flash('success', $message);
    }

    public static function error($message)
    {
        self::flash('error', $message);
    }

    public static function warning($message)
    {
        self::flash('warning', $message);
    }

    public static function info($message)
    {
        self::flash('info', $message);
    }

    private static function flash($type, $message)
    {
        $alerts = Session::get('alerts', []);
        $alerts[] = [
            'type' => $type,
            'message' => $message
        ];
        Session::flash('alerts', $alerts);
    }
}
