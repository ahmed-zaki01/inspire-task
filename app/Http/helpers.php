<?php

if (!function_exists('admin_guard')) {
    function admin_guard()
    {
        return auth()->guard('admin');
    }
} // end of check admin guard function
