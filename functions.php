<?php

function genPassword($pswLen, $incLetters, $incNumbers, $incSymbols)
{
    // DEFINE ARRAYS OF CHARS
    $upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?';

    $totChar = '';

    if ($incLetters) {
        $totChar .= $upperCase . $lowerCase;
    }
    if ($incNumbers) {
        $totChar .= $numbers;
    }
    if ($incSymbols) {
        $totChar .= $symbols;
    }
    if (!$incLetters && !$incNumbers && !$incSymbols) {
        $totChar = $upperCase . $lowerCase . $numbers . $symbols;
    }


    $password = '';

    for ($i = 0; $i < $pswLen; $i++) {
        $random_index = rand(0, strlen($totChar) - 1);
        $password .= $totChar[$random_index];
    }

    return $password;
}
