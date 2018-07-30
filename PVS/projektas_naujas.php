<?php

include "functions.php";
require "database.php";


if (isset($_POST['name']) && isset($_POST['year']) && isset($_POST['program']) && isset($_POST['price'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $year = mysqli_real_escape_string($connection, $_POST['year']);
    $program = mysqli_real_escape_string($connection, $_POST['program']);
    $price = mysqli_real_escape_string($connection, $_POST['price']);
  
   
    
    $query = "INSERT INTO projects (name, year, program, price) VALUES ('$name', '$year', '$program', '$price')";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        echo "Klaida";
        die;
    }
}





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
//mysqli_close($connection);
// musu duomenys masyve $darbuotojai

?>


<?php head('Projekto pridejimas'); ?>

<div class="col-md-12">
    <h2>Naujas projektas:</h2>

    <form action="" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <label for="vardas">Pavadinimas</label> 
                <input name="name" type="text" class="form-control" id="vardas" placeholder="Pavadinimas">
            </div>
            <div class="form-group">
                <label for="pavarde">Metai</label> 
                <input name="year" type="number" class="form-control" id="pavarde" min="2010" max="2018" placeholder="Metai">
            </div>
    <div class="form-group">
        <label for="tel">Aprasymas</label> 
                <input name="program" type="text" class="form-control" id="tel" placeholder="Aprasymas">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              
            <div class="form-group">
                <label for="issilavinimas">Pajamos</label>
                <input name="price" type="text" class="form-control" id="issilavinimas" placeholder="Pajamos">
            </div>

            
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <br>
            <input type="submit" class="btn btn-primary" value="Pridėti">
        </div>
    </form>
</div>

<?php footer(); ?>