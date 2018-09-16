<?php

require '..\user_registration_app\database.php';

$csv_filename = '..\csv_files\export.csv';

$csv_export = '';

$query = mysqli_query($connection, "SELECT * FROM users");
$field = mysqli_field_count($connection);

for ($i = 0; $i < $field; $i++) {
    $csv_export .= mysqli_fetch_field_direct($query, $i)->name . ';';
}

$csv_export .= '
';

while ($row = mysqli_fetch_array($query)) {

    for ($i = 0; $i < $field; $i++) {
        $csv_export .= '"' . $row[mysqli_fetch_field_direct($query, $i)->name] . '";';
    }
    $csv_export .= '
';
}
// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=" . $csv_filename . "");
echo($csv_export);
