<?php

use Illuminate\Support\Str;
if (! function_exists('kata')) {
       
        function kata($value, $kata, $end = '...')
        {
            return Str::words($value, $kata, $end);
        }
    }