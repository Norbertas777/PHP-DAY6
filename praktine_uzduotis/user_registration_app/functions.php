<?php

function validatePhoneOne($phone_number1) {
    if (preg_match('/^\+?([0-9]{1,4})\)?[-. ]?([0-9]{10})$/', $phone_number1)) {
        echo "Phone number '$phone_number1' is valid. \n";
    } else {
        die("Please enter a valid phone number \n");
    }
}

function validatePhoneTwo($phone_number2) {
    if (preg_match('/^\+?([0-9]{1,4})\)?[-. ]?([0-9]{10})$/', $phone_number2)) {
        echo "Phone number '$phone_number2' is valid. \n";
    } else {
        die("Please enter a valid phone number \n");
    }
}

function validateEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email address '$email' is considered valid.\n";
    } else {
        die("Please enter a valid email address. \n");
    }
}

function validateNames($names) 
{
    foreach ($names as $name) {
        if (strlen($name) >= 2 && strlen($name) <= 20) {
            echo "$name is validated \n";
        } else {
            die('Please enter a human name!');
        }
    }
}

