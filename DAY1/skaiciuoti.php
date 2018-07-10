<?php

$ugisCm = $_POST['ugis'];
$svorisKg = $_POST['svoris'];

$ugisMetrais = $ugisCm / 100;


$kmi = round($svorisKg / ($ugisMetrais **2) , 2);

if ($kmi < 18.5) {
    $kmiPaaiskinimas = 'Per mažas svoris';
} elseif ($kmi < 25) {
    $kmiPaaiskinimas = "Normalus svoris";
} elseif ($kmi < 30) {
    $kmiPaaiskinimas = "Anstvoris";
} elseif ($kmi < 35) {
    $kmiPaaiskinimas = "I laipsnio nutukimas";
} elseif ($kmi < 40) {
    $kmiPaaiskinimas = "II laipsnio nutukimas";
} else {
    $kmiPaaiskinimas = "III laipsnio nutukimas";
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>KMI skaičiuoklė</title>
</head>
<body>      
    <main role="main" class="container">
        <p>Jūsų KMI: <?php echo $kmi. ' (' . $kmiPaaiskinimas . ')'; ?></p>
        <a class="btn btn-primary" href="index.php">Grįžti į skaičiuoklę</a>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
