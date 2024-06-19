<?php
// GET NUMBER OF CHAR IN PASSWORD
$charNum = intval($_GET['charNum']);

// DEFINE ARRAYS OF CHARS
$upperCase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$lowerCase = 'abcdefghijklmnopqrstuvwxyz';
$numbers = '0123456789';
$symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?';

$total_characters = $upperCase . $lowerCase . $numbers . $symbols;

function genPassword($pswLen, $totChar)
{
    $password = '';

    for ($i = 0; $i < $pswLen; $i++) {
        $random_index = rand(0, strlen($totChar) - 1);
        $password .= $totChar[$random_index];
    }

    return $password;
}

$password = genPassword($charNum, $total_characters);
