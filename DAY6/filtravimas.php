<?php

$skaiciuSeka = $_POST['skaiciuSeka'];
$skaiciai = explode(',', $skaiciuSeka);
$counter = count($skaiciai);
$duomenysPriesFiltravima = $skaiciai;

foreach ($skaiciai as $i => $elementas) {
    if ($i == 0) {
        $skaiciai[$i] = ($elementas + $skaiciai[1]) / 2;
    } elseif ($i == $counter - 1) {
    
        $skaiciai[$i] = ($elementas + $skaiciai[$i - 1]) / 2;
    } else {
        $skaiciai[$i] = ($elementas + $skaiciai[$i - 1] + $skaiciai[$i + 1]) / 3;
    }

    $skaiciai[$i] = round($skaiciai[$i]);
}
$duomenysPoFiltravimo = $skaiciai;
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

        <title>Filtravimo grafikas</title>
    </head>
    <body>

        <main role="main" class="container">

            <canvas id="grafikas"></canvas>

            <script>
                var ctx = document.getElementById('grafikas').getContext('2d');

                var chart = new Chart(ctx, {
                    // The type of chart we want to create
                    type: 'line',
                    // The data for our dataset
                    data: {
                        labels: [
<?php
foreach ($skaiciai as $indeksas => $reiksme) {
    echo $indeksas . ',';
}
?>
                        ],
                        datasets: [
                            {
                                label: "Pries filtravima",
                                backgroundColor: 'transparent',
                                borderColor: 'rgb(255, 99, 132)',
                                data: [
<?php
echo implode(',', $duomenysPriesFiltravima);
?>
                                ],
                            },
                            {
                                label: "Po filtravima",
                                backgroundColor: 'transparent',
                                borderColor: 'green',
                                data: [
<?php
echo implode(',', $duomenysPoFiltravimo);
?>],
                            },
                        ]
                    },
                    // Configuration options go here
                    options: {}
                });
            </script>

        </main>      

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>