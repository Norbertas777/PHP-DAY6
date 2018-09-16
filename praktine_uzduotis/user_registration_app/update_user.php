<?php

include_once "functions.php";
require "database.php";


if (isset($argv[1]) && isset($argv[2]) && isset($argv[3]) && isset($argv[4]) && isset($argv[5]) && isset($argv[6]) && isset($argv[7])) {

    $first_name = $argv[1];
    $last_name = $argv[2];
    $email = $argv[3];
    $phone_number1 = $argv[4];
    $phone_number2 = $argv[5];
    $comment = $argv[6];
    $id = $argv[7];
} else {
    die('Please enter all fields! If help is needed, please run help.php');
}

validatePhoneOne($phone_number1);

validatePhoneTwo($phone_number2);

validateEmail($email);

$names = [$first_name, $last_name];
validateNames($names);

$query = "UPDATE users SET firstname = '$first_name', lastname = '$last_name' , email = '$email'"
        . " , phonenumber1 = '$phone_number1' , phonenumber2 = '$phone_number2' , comment = '$comment'"
        . "WHERE id = $id";

if (mysqli_query($connection, $query)) {
    echo "User updated successfully";
} else {
    echo "Error";
}



mysqli_close($connection);
?>
