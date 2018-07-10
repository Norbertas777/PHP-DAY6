<?php

$kiekis = $_POST['kiekis'];

$kaina = $kiekis * 0.28;


if ($kaina >= 1000) {
 $kaina3 = $kaina - ($kaina * 0.03);
 echo $kaina3;
} 
elseif ($kaina >= 2000) {
  $kaina4 =  $kaina - ($kaina * 0.04); 
    echo $kaina4;
} else {
    echo $kaina;
}



