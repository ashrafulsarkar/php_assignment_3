<?php
// Task 5: Password Generator

function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $allChars = $lowercase . $uppercase . $numbers . $specialChars;

    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];

        $password .= $randomChar;
    }

    return $password;
}

$generatedPassword = generatePassword(12);

echo "Generated Password: $generatedPassword\n";