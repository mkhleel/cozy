<?php

use App\Models\User;


if (!function_exists('current_user')) {
    function current_user(): ?User
    {
        return Auth::user();
    }
}


if (!function_exists('rescue')) {
    function rescue(callable $callback, $rescue = null, $report = true)
    {
        try {
            return $callback();
        } catch (Throwable $e) {
            if ($report) {
                report($e);
            }
            return $rescue instanceof Closure ? $rescue($e) : $rescue;
        }
    }
}


if (!function_exists('setActive')) {
    function setActive($path = null, $active = 'active')
    {
        $path ?? $path = Request::route()->uri();
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
}

if (!function_exists('gravatar')) {
    function gravatar(string $name)
    {
        $gravatarId = md5(strtolower(trim($name)));
        return 'https://gravatar.com/avatar/' . $gravatarId . '?s=240';
    }
}
