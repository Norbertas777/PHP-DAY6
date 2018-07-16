<?php

$valandos = $_POST['valandos'];

$minutes = $_POST['minutes'];

$sekundes = $_POST['sekundes'];

if ($valandos > 24  ) {
    
    echo 'Neteisingai ivestas laikas';
    return false;
} elseif ($valandos < 0) {
    echo 'Neteisingai ivestas laikas';
    return false;
}

if ($minutes > 60) {
    
     echo 'Neteisingai ivestas laikas';
      return false;
} elseif ($minutes < 0) {
    echo 'Neteisingai ivestas laikas';
    return false;
}

if ($sekundes > 60) {
  
     echo 'Neteisingai ivestas laikas';
      return false;
} elseif ($minutes < 0) {
    echo 'Neteisingai ivestas laikas';
    return false;
}




$posekundes = $sekundes + 1;

if ($posekundes > 59) {
    $minutes = $minutes + 1;
    $posekundes = 0;
}

if ($minutes > 59) {
    $valandos = $valandos + 1;
    $minutes = 0;
}

if ($valandos > 23) {
    
    $valandos = 0;


}


echo $valandos . 'H';
echo $minutes . 'm';
echo $posekundes . 's';