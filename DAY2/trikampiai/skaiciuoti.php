<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Taip , trikampis gali susidaryti!";
} else {
    echo "Ne , trikmpis negali susidaryti!";
}