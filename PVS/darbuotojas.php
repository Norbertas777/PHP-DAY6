<?php
include "functions.php";
require "database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query = "SELECT * FROM pareigos WHERE id = " . $id;
    $result = mysqli_query($connection, $query);
    $pareigosInfo = mysqli_fetch_assoc($result);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query = "SELECT * FROM darbuotojai WHERE id = " . $id;
    $result = mysqli_query($connection, $query);
    $darbuotojaiInfo = mysqli_fetch_assoc($result);
}


$query = "SELECT * FROM darbuotojai";
$result = mysqli_query($connection, $query);
$darbuotojai = [];
if (mysqli_num_rows($result) > 0) {    
    while ($darbuotojas = mysqli_fetch_assoc($result)) {
        $darbuotojai[] = $darbuotojas;
        
        //print_r($darbuotojas);
        
//        $query = "SELECT * FROM pareigos WHERE id = " . $darbuotojas['pareigos_id'];
//        $result = mysqli_query($connection, $query);
//        
//        $pareigos = mysqli_fetch_assoc($result);
//        
//        print_r($pareigos);
        
        //break;
    }
}
//print_r($darbuotojai);
//echo "<pre>";
// musu duomenys masyve $darbuotojai

?>

<?php

$query1 = "SELECT * FROM pareigos";
$result1 = mysqli_query($connection, $query1);
$pareigos = [];
if (mysqli_num_rows($result1) > 0) {    
    while ($pareiga = mysqli_fetch_assoc($result1)) {
        $pareigos[] = $pareiga;
        
        //print_r($darbuotojas);
        
//        $query = "SELECT * FROM pareigos WHERE id = " . $darbuotojas['pareigos_id'];
//        $result = mysqli_query($connection, $query);
//        
//        $pareigos = mysqli_fetch_assoc($result);
//        
//        print_r($pareigos);
        
        //break;
    }
}
//print_r($darbuotojai);
//echo "<pre>";

// musu duomenys masyve $darbuotojai

?>

<?php 

$men = $darbuotojaiInfo['salary'];
$soc = (($darbuotojaiInfo['salary'] * 3) / 100);
$pajamos = (($darbuotojaiInfo['salary'] * 15) / 100);
$sveikata = (($darbuotojaiInfo['salary'] * 6) / 100);
$algairankas = $men - $soc - $pajamos - $sveikata;
$sodra = (($darbuotojaiInfo['salary'] * 30.98) / 100);
$fondas = (($darbuotojaiInfo['salary'] * 0.2) / 100);
$vietoskaina = $men + $sodra + $fondas;

?>










<?php head('Darbuotojo informacija'); ?>

<div class="col-md-12">
    <h1><?php echo $darbuotojaiInfo['name']; ?>  <?php echo $darbuotojaiInfo['surname']; ?></h1>
</div>
    
<div class="col-md-6">
    <p>
        <b>Pareigos: </b> <br /> Direktorius
    </p>
    <p>
        <b>Mėnesinė alga: </b> <br /><?php echo $darbuotojaiInfo['salary']; ?> EUR
    </p>

</div>
<div class="col-md-6">
    <p>
        <b>Telefonas: </b> <br /> <?php echo $darbuotojaiInfo['phone']; ?>
    </p>
</div>

<div class="col-md-6">
    <h2>Mokesčiai</h2>

    <table class="table table-hover">
        <tr>
            <td>Priskaičiuotas atlyginimas „ant popieriaus“:</td>
            <td class="curr"><?php echo $darbuotojaiInfo['salary']; ?></td>
        </tr>
        <tr>
            <td>Pajamų mokestis 15 %</td>
            <td class="curr"><?php echo (($darbuotojaiInfo['salary'] * 15) / 100) ?> EUR</td>
        </tr>
        <tr>
            <td>Sodra. Sveikatos draudimas 6 %</td>
            <td class="curr"><?php echo (($darbuotojaiInfo['salary'] * 6) / 100) ?> EUR</td>
        </tr>
        <tr>
            <td>Sodra. Pensijų ir soc. draudimas 3 %</td>
            <td class="curr"><?php echo (($darbuotojaiInfo['salary'] * 3) / 100); ?> EUR</td>
        </tr>

        <tr class="info">
            <td>Išmokamas atlyginimas „į rankas“:</td>
            <td class="curr"><b><?php echo $algairankas ?> EUR</b></td>
        </tr>

        <tr>
            <td colspan="2"><b>Darbo vietos kaina</b></td>
        </tr>

        <tr>
            <td>Sodra 30.98 %:</td>
            <td class="curr"><?php echo (($darbuotojaiInfo['salary'] * 30.98) / 100) ?> EUR</td>
        </tr>

        <tr>
            <td>Įmokos į garantinį fondą 0.2 % :</td>
            <td class="curr"><?php echo (($darbuotojaiInfo['salary'] * 0.2) / 100) ?> EUR</td>
        </tr>
        <tr class="info">
            <td>Visa darbo vietos kaina :</td>
            <td class="curr"><b><?php echo $vietoskaina ?> EUR</b></td>
        </tr>
    </table>
</div>


<?php footer(); ?>