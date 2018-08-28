<?php

 include "functions.php";
  include "auth.php";
require "database.php";



if (isset($_POST['name']) && isset($_POST['description'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);
   
  
    
    $query = "INSERT INTO lectures (name, description) VALUES ('$name', '$description')";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        echo "Klaida";
        die;
    }
}





?>


<?php head('Naujos paskaitos registravimas'); ?>
 
<br>
<br>
<br>
<br>

<div class="col-md-12">
    <h2>Nauja paskaita:</h2>

    <br>
    <br>
    
    <form action="nauja_paskaita.php" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <label for="pavadinimas">Pavadinimas</label> 
                <input name="name" type="text" class="form-control" id="vardas" placeholder="Pavadinimas" required>
            </div>
            
            <div class="form-group">
               <label for="comment">Aprasymas</label>
               <textarea class="form-control" rows="5" id="comment" name="description" placeholder="Aprasymas"></textarea>
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
