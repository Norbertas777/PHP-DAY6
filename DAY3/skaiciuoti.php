<?php
$dydis = $_POST['dydis'];
$kiekUzslepti = $_POST['sudetingumas'];
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Daugybos lentelė</title>
</head>
<body>
    
    <main role="main" class="container">        
        <br>
        
    
        
      
        
        <?php 
        if ($dydis < 0) {
            echo 'Pasirinktas netinkamas dydis';
        } else {
        ?>        
            <table class="table table-striped">
                <?php
                
                for ($y = -1; $y <= $dydis; $y++) {
                ?>
                <tr <?php if ($y == -1) { echo 'class="table-primary"'; } ?>>
                    <?php
                   
                    for ($x = -1; $x <= $dydis; $x++) {
                        
                    ?>
                    <td <?php if ($x == -1) { echo 'class="table-primary"'; } ?>>
                        <?php
                            
                            if ($x == -1 && $y == -1) {
                                echo 'X';
                            } elseif ($x == -1) {
                                echo $y; // pirmas stulpelis
                            } elseif ($y == -1) {
                                echo $x; // pirma eilute
                            } else {
                                $atsitiktinisSkaicius = rand(1, 100);
                                
                          
                                if ($atsitiktinisSkaicius <= $kiekUzslepti) {                                   
                                    echo '-';
                                } else {
                                    echo $x * $y;
                                }
                            }
                        ?>
                    </td>
                    <?php
                    }
                    ?>
                </tr>
                <?php
                }
                ?>
            </table>
        <?php } ?>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>