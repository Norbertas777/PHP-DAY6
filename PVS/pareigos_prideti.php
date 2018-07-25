<?php
include "functions.php";
require 'database.php';

if (isset($_POST['pavadinimas']) && isset($_POST['bazineAlga'])) {
    $name = mysqli_real_escape_string($connection, $_POST['pavadinimas']);
    $baseSalary = mysqli_real_escape_string($connection, $_POST['bazineAlga']);
    
    $query = "INSERT INTO pareigos (name, base_salary) VALUES ('$name', '$baseSalary')";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        echo "Klaida";
        die;
    }
}
?>
<?php head('Pareigų pridėjimas'); ?>

<div class="col-md-12">
    <h2>Naujos pareigos:</h2>

    <form action="" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <label for="pavadinimas">Pavadinimas</label> 
                <input name="pavadinimas" type="text" class="form-control" id="pavadinimas" placeholder="Pareigos">
            </div>
            <div class="form-group">
                <label for="baseSalary">Bazinė alga</label> 
                <input name="bazineAlga" type="text" class="form-control" id="baseSalary" placeholder="Bazinė alga">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary" value="Pridėti">
        </div>
    </form>
</div>

<?php footer(); ?>