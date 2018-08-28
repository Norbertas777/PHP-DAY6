<?php

 include "functions.php";
  include "auth.php";
require "database.php";



if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $surname = mysqli_real_escape_string($connection, $_POST['surname']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
  
    
    $query = "INSERT INTO students (name, surname, email, phone) VALUES ('$name', '$surname', '$email' ,  '$phone')";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        echo "Klaida";
        die;
    }
}





?>


<?php head('Naujo studento registravimas'); ?>

<br>
<br>
<br>
<br>

<div class="col-md-12">
    
    <h2>Naujas studentas:</h2>
    
    <br>

    <form action="naujas_studentas.php" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <label for="vardas">Vardas</label> 
                <input name="name" type="text" class="form-control" id="vardas" placeholder="Vardas" required>
            </div>
            <div class="form-group">
                <label for="pavarde">Pavardė</label> 
                <input name="surname" type="text" class="form-control" id="pavarde" placeholder="Pavarde" required>
            </div>
            <div class="form-group">
                <label for="tel">Telefonas</label> 
                <input name="phone" type="text" class="form-control" id="tel" placeholder="Telefonas" required>
            </div>
        
            <div class="form-group">
                <label for="elpastas">Elektroninis pastas</label>
                <input name="email" type="email" class="form-control" id="issilavinimas" placeholder="El pastas">
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