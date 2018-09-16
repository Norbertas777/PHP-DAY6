<?php

include_once '..\user_registration_app\functions.php';
require '..\user_registration_app\database.php';


$File = $argv[1];

$arrResult = array();

$handle = fopen($File, "r");

if (empty($handle) === false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        $values = implode($data, '\',\'');

       
        $query = "INSERT INTO users (firstname, lastname, email, phonenumber1, phonenumber2, comment)"
                . " VALUES ('$values')";



        if (mysqli_query($connection, $query)) {
            echo "New user imported to database successfully \n";
        } else {
            echo "Error";
        }
    }
    fclose($handle);
}
//print_r($arrResult);

mysqli_close($connection);
?>