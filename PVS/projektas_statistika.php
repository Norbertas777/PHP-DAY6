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

$sql = "SELECT SUM(price) FROM projects WHERE year ='2010'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius = $rezultatas[0];

$sql = "SELECT SUM(price) FROM projects WHERE year ='2011'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius1 = $rezultatas[0];

$sql = "SELECT SUM(price) FROM projects WHERE year ='2012'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius2 = $rezultatas[0];

$sql = "SELECT SUM(price) FROM projects WHERE year ='2013'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius3 = $rezultatas[0];

$sql = "SELECT SUM(price) FROM projects WHERE year ='2014'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius4 = $rezultatas[0];

$sql = "SELECT SUM(price) FROM projects WHERE year ='2015'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius5 = $rezultatas[0];

$sql = "SELECT SUM(price) FROM projects WHERE year ='2016'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius6 = $rezultatas[0];

$sql = "SELECT SUM(price) FROM projects WHERE year ='2017'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius7 = $rezultatas[0];


$sql = "SELECT SUM(price) FROM projects WHERE year ='2018'";
$result = mysqli_query($connection, $sql);
$rezultatas = mysqli_fetch_row($result);
$darbuotojuSkaicius8 = $rezultatas[0];

?>
<?php head('Statistika'); ?>

<div class="col-md-12">
    <br>
    <div class="panel-heading">Įmonės projektu statistika:</div>
    <table class="table">
        <tr>
            <th>Projekto metai</th>
            <th>Projektu pajamu suma </th>
        </tr>

        <tr>
            <th>2010</th>
            <td><?php echo $darbuotojuSkaicius; ?> EUR</td>
        </tr>
        <tr>
            <th>2011</th>
            <td><?php echo $darbuotojuSkaicius1; ?> EUR</td>
        </tr>
        <tr>
            <th>2012</th>
            <td><?php echo $darbuotojuSkaicius2; ?> EUR</td>
        </tr>
        <tr>
            <th>2013</th>
            <td><?php echo $darbuotojuSkaicius3; ?> EUR</td>
        </tr>
        <tr>
            <th>2014</th>
            <td><?php echo $darbuotojuSkaicius4; ?> EUR</td>
        </tr>
        <tr>
            <th>2015</th>
            <td><?php echo $darbuotojuSkaicius5; ?> EUR</td>
        </tr>
        <tr>
            <th>2016</th>
            <td><?php echo $darbuotojuSkaicius6; ?> EUR</td>
        </tr>
        <tr>
            <th>2017</th>
            <td><?php echo $darbuotojuSkaicius7; ?> EUR</td>
        </tr>
        <tr>
            <th>2018</th>
            <td><?php echo $darbuotojuSkaicius8; ?> EUR</td>
        </tr>
    </table>
</div>

<?php footer(); ?>