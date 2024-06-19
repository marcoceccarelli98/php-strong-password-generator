<?php

function genPassword($pswLen)
{
    // DEFINE ARRAYS OF CHARS
    $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?';

    $totChar = $upperCase . $lowerCase . $numbers . $symbols;

    $password = '';

    for ($i = 0; $i < $pswLen; $i++) {
        $random_index = rand(0, strlen($totChar) - 1);
        $password .= $totChar[$random_index];
    }

    return $password;
}
