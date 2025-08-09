<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Auth;

/**
 * Set active menu
 *
 * @param array $routes
 * @return void
 */
function setActiveMenu(array $routes)
{
    // Check if the input is an array
    if (is_array($routes)) {
        // Loop through each route
        foreach ($routes as $route) {
            // Check if the current request route matches the provided route
            if (request()->routeIs($route)) {
                // Return 'active' if the route matches
                return 'active';
            }
        }
    }
}
function limitText($text, $limit = 40)
{
    return Str::limit($text, $limit);
}
function formatDateTime($datetime = null, $format = 'd M Y, h:i A', $diffForHuman = false)
{
    if ($diffForHuman == false) {
        // If no datetime is provided, use the current date and time
        if ($datetime === null) {
            return 'Not specified';
        }

        // Check if it's a valid datetime string or timestamp
        if (is_numeric($datetime)) {
            // If it's a timestamp
            return date($format, $datetime);
        } else {
            // If it's a datetime string, convert it
            $parsedDate = new DateTime($datetime);
            return $parsedDate->format($format);
        }
    } else {
        return Carbon::parse($datetime)->diffForHumans();
    }
}
function currency($type = 'symbol', $userUUID = null)
{
    // Check if user is authenticated
    if (Auth::check() && Auth::user()->role === 'user') {
        $user = Auth::user();
        if (!is_null($user->account->currency)) {
            $explodeCurrency = explode('-', $user->account->currency);
        } else {
            $generalSetting = GeneralSetting::first();
            $explodeCurrency = explode('-', $generalSetting->currency);
        }
    } elseif ($userUUID != null) {
        // Check if userUUID is provided
        $user = User::where('uuid', $userUUID)->firstOrFail();
        if (!is_null($user->account->currency)) {
            $explodeCurrency = explode('-', $user->account->currency);
        } else {
            $generalSetting = GeneralSetting::first();
            $explodeCurrency = explode('-', $generalSetting->currency);
        }
    } else {
        // Fallback to general settings if user not logged in or currency is null
        $generalSetting = GeneralSetting::first();
        $explodeCurrency = explode('-', $generalSetting->currency);
    }

    switch ($type) {
        case 'name':
            return $explodeCurrency[0];
        case 'code':
            return $explodeCurrency[1];
        case 'symbol':
            return $explodeCurrency[2];
        default:
            return $explodeCurrency[2];
    }
}
function formatAmount($amount, $type = 'symbol', $userUUID = null)
{
    return currency($type, $userUUID) . number_format($amount, 2);
}
