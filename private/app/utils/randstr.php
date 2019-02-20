<?php

if (!function_exists('randstr')) {
    function randstr($length = 10)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $characters_upper = strtoupper($characters);
        $characters_number = "0123456789";

        if ($upper) {
            $characters.= $characters_upper;
            // var dump
        }

        if ($number) {
            $characters.= $characters_number;
            // var dump
        }
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}