<?php

$temp = $_POST['skaiciai'];
$skaiciai = explode(',' , $temp);


$sum = 0;


foreach ($skaiciai as $value){
    
    
    $sum =  $sum + $value;
    
}

$vidurkis = $sum / count($skaiciai);

echo 'Vidurkis yra :' . $vidurkis . '<br>'; 
echo 'Viso nuoskaitu yra :' . count($skaiciai) . '<br>';

rsort($skaiciai);
echo 'Dvi didžiausios temperatūros:' ; echo $skaiciai[0] ;  echo ',' ; echo $skaiciai[1] . '<br>';
sort($skaiciai);
echo 'Dvi mažiausios temperatūros:' ; echo $skaiciai[0] ; echo ','; echo $skaiciai[1] . '<br>';



