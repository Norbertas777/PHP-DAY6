<?php
include "functions.php";
require "database.php";

$sql = "SELECT COUNT(*) FROM darbuotojai WHERE gender = 'vyras'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$vyruSkaicius = $rezultatas[0];

$sql = "SELECT COUNT(*) FROM darbuotojai WHERE gender = 'moteris'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$moteruSkaicius = $rezultatas[0];

$sql = "SELECT COUNT(*) FROM darbuotojai WHERE education = 'aukstasis'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$aukstasisSkaicius = $rezultatas[0];

$sql = "SELECT COUNT(*) FROM darbuotojai WHERE education = 'vidurinis'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$vidurinisSkaicius = $rezultatas[0];

$sql = "SELECT COUNT(*) FROM darbuotojai";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius = $rezultatas[0];

$sql = "SELECT AVG(salary) FROM darbuotojai WHERE education = 'aukstasis'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$vidutineAukstasis = $rezultatas[0];

$sql = "SELECT AVG(salary) FROM darbuotojai WHERE education = 'vidurinis'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$vidutineVidurinis = $rezultatas[0];


$vyruProc = ($vyruSkaicius * 100) / $darbuotojuSkaicius;
$motProc = ($moteruSkaicius * 100) / $darbuotojuSkaicius;
?>
<?php head('Darbuotojai Statistika'); ?>

<div class="col-md-12">
    <h2>Įmonėje dirbančių darbuotojų statistika pagal išsilavinimą</h2>
        <table class="table">
            <tr>
                <th>Išsilavinimas</th>
                <th>Kiekis</th>
                <th>Vidutinis užmokestis</th>
            </tr>
            <tr>
                <td>Aukštasis</td>
                <td><?php echo $aukstasisSkaicius; ?></td>
                <td><?php echo $vidutineAukstasis; ?> EUR</td>
            </tr>
            <tr>
                <td>Vidurinis</td>
                <td><?php echo $vidurinisSkaicius; ?></td>
                <td><?php echo $vidutineVidurinis; ?> EUR</td>
            </tr>
        </table>
    </div>
</div>
<div class="col-md-12">
    <h2>Darbuotojų statistika pagal lytį</h2>
    <table class="table">
        <tr>
            <th>Lytis</th>
            <th>Kiekis</th>
            <th>Procentai</th>
        </tr>
        <tr>
            <td>Vyras</td>
            <td><?php echo $vyruSkaicius; ?></td>
            <td><?php echo $vyruProc; ?>%</td>
        </tr>
        <tr>
            <td>Moteris</td>
            <td><?php echo $moteruSkaicius; ?></td>
            <td><?php echo $motProc; ?>%</td>
        </tr>
    </table>
</div>