<?php
include "functions.php";

$servername = "localhost";
$username = "root";
$password = "";
$database = 'pvs';

$connection = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($connection, "utf8");
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) FROM darbuotojai";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius = $rezultatas[0];

$sql = "SELECT AVG(salary) FROM darbuotojai";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$vidutineAlga = $rezultatas[0];

$sql = "SELECT MIN(salary) FROM darbuotojai";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$minimaliAlga = $rezultatas[0];

$sql = "SELECT MAX(salary) FROM darbuotojai";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$maksimaliAlga = $rezultatas[0];
?>
<?php head('Statistika'); ?>

<div class="col-md-12">
    <div class="panel-heading">Įmonės statistika:</div>
    <table class="table">
        <tr>
            <th>Įmonėje dirbančių žmonių skaičius</th>
            <td><?php echo $darbuotojuSkaicius; ?></td>
        </tr>

        <tr>
            <th>Vidutinis darbo užmokestis</th>
            <td><?php echo $vidutineAlga; ?> EUR</td>
        </tr>
        <tr>
            <th>Minimalus darbo užmokestis</th>
            <td><?php echo $minimaliAlga; ?> EUR</td>
        </tr>
        <tr>
            <th>Maksimalus darbo užmokestis</th>
            <td><?php echo $maksimaliAlga; ?> EUR</td>
        </tr>
    </table>
</div>

<?php footer(); ?>