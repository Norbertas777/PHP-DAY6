<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'uzd3';

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    echo 'Klaida prisijungiant prie DB';
    exit;
}
