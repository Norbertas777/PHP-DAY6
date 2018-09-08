<?php

 include "functions.php";
  include "auth.php";
require "database.php";



if (isset($_POST['name']) && isset($_POST['surname'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $surname = mysqli_real_escape_string($connection, $_POST['surname']);
   
  
    
    $query = "INSERT INTO authors (name, surname) VALUES ('$name', '$surname')";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        echo "Klaida";
        die;
    }
}





?>


<?php head('Naujo autoriaus registravimas'); ?>

<br>
<br>
<br>
<br>

<div class="col-md-12">
    
    <h2>Naujas autorius:</h2>
    
    <br>

    <form action="naujas_autorius.php" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <label for="vardas">Vardas</label> 
                <input name="name" type="text" class="form-control" id="vardas" placeholder="Vardas" required>
            </div>
            <div class="form-group">
                <label for="pavarde">Pavardė</label> 
                <input name="surname" type="text" class="form-control" id="pavarde" placeholder="Pavarde" required>
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