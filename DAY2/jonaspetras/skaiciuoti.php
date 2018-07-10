<?php

$jonas = $_POST['jonas'];
$petras = $_POST['petras'];


if ($jonas > $petras) {
    echo 'Jonas';
} elseif ( $jonas < $petras) {
    echo 'Petras';
}

