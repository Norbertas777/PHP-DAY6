<?php

require "database.php";

$query = "DELETE FROM users WHERE email  =" . $argv[1];


if (mysqli_query($connection, $query)) {
    echo "User with email: " . $argv[1] . " has been deleted successfully.";
} else {
    echo "Error!";
}



mysqli_close($connection);
