<?php

$menesiuVardai = [1=>'Sausis', 2=>'Vasaris', 3=>'Kovas',
    4=>'Balandis', 5=>'Gegužė',6=>'Birželis',
    7=>'Liepa', 8=>'Rugpjutis', 9=>'Rugsėjis',
    10=>'Spalis', 11=>'Lapkritis',12=>'Gruodis'];

$menesiuDienos = [1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30,
    7=>31, 8=>31, 9=>30,10=>31, 11=>30, 12=>31];

$metuosedienu = 0;

foreach ($menesiuDienos as $skaiciai) {
    $metuosedienu += $skaiciai;
}

echo 'Metuose yra 7 mėnesiai turintys 31 dieną :'  ; echo $menesiuVardai[1] . ',' . $menesiuVardai[3] . ',' . $menesiuVardai[5] . ',' . $menesiuVardai[7] . ',' . $menesiuVardai[8] . ',' . $menesiuVardai[10] . ',' .  $menesiuVardai[12] . '<br>';
echo 'Metuose yra 4 mėnesiai turintys 30 dienų :'; echo $menesiuVardai[4] . ',' . $menesiuVardai[6] . ',' . $menesiuVardai[9] . ',' . $menesiuVardai[11] . '<br>';
echo 'Metuose yra 1 mėnuo turintis 28 dienas :' ; echo $menesiuVardai[2] . '<br>';
echo 'Viso metuose yra ' ; echo $metuosedienu . ' dienos' . '<br>';
echo 'Sausis yra 1 mėnuo jis turi 31 d.' . '<br>';
echo 'Vasaris yra 2 mėnuo jis turi 28 d.' . '<br>';
echo 'Kovas yra 3 mėnuo jis turi 31 d.' . '<br>';
echo 'Balandis yra 4 mėnuo jis turi 31 d.' . '<br>';
echo 'Gegužė yra 5 mėnuo jis turi 31 d.'  . '<br>';
echo 'Birželis yra 6 mėnuo jis turi 31 d.' . '<br>';
echo 'Liepa yra 7 mėnuo jis turi 31 d.' . '<br>';
echo 'Rugpjutis yra 8 mėnuo jis turi 31 d.' . '<br>';
echo 'Rugsėjis yra 9 mėnuo jis turi 31 d.' . '<br>';
echo 'Spalis yra 10 mėnuo jis turi 31 d.' . '<br>';
echo 'Lapkritis yra 11 mėnuo jis turi 31 d.' . '<br>';
echo 'Gruodis yra 12 mėnuo jis turi 31 d.'. '<br>';
