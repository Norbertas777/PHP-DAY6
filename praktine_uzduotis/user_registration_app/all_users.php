<?php

require "database.php";

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
$userArr = [];
    
if (mysqli_num_rows($result) > 0) {
    while ($info = mysqli_fetch_assoc($result)) {
        $userArr[] = $info;
    }
}

print_r($userArr);

mysqli_close($connection);

?>