<?php

$alga = $_POST['alga'];
$procentai = $_POST['procentai'];
$norimaalga = $_POST['norimaalga'];

$i = 0;
echo '<table style="border: 1px solid black">';
while ($alga < $norimaalga) {
    $i++;
    $alga += round(($alga * $procentai / 100), 2);
    echo '<td ><th>' . $i . '</th></td>';
    echo '<td><th>' . $alga . '</tr></th>';
}
echo '</table>';







