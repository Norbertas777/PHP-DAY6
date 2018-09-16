<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'praktine';


$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    echo 'Klaida prisijungiant prie DB';
    exit;
}

