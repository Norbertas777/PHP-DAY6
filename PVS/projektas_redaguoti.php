<?php

include "functions.php";
require "database.php";


if (isset($_POST['name']) && isset($_POST['year']) && isset($_POST['program']) && isset($_POST['price'])) {
    $id = $_POST['id'];
    $name = ($_POST['name']);
    $year = ($_POST['year']);
    $program = ($_POST['program']);
    $price = ($_POST['price']);
    
    
    
    $query = "UPDATE projects SET name = '$name', year = '$year', program = '$program', price = '$price' WHERE id = $id";
    $result = mysqli_query($connection, $query);
}
    
    if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query1 = "SELECT * FROM projects WHERE id =" . $id;
    $result1 = mysqli_query($connection, $query1);
    $projektasInfo = mysqli_fetch_assoc($result1);
    
} else {
    echo 'Klaidos pranesimas';
    exit;
}

?>

<?php head('Projekto redagavimas'); ?>

<div class="col-md-12">
    <h2>Projektas:</h2>

    <form action="" method="post">
          <input name="id" type="hidden" value="<?php echo $projektasInfo['id']; ?>">
        <div class="col-md-6">
            <div class="form-group">
                <label for="vardas">Pavadinimas</label> 
                <input name="name" type="text" class="form-control" id="vardas" value="<?php echo $projektasInfo['name']; ?>">
            </div>
            <div class="form-group">
                <label for="pavarde">Metai</label> 
                <input name="year" type="number" class="form-control" id="pavarde" min="2010" max="2018" value="<?php echo $projektasInfo['year']; ?>">
            </div>
    <div class="form-group">
        <label for="tel">Aprasymas</label> 
                <input name="program" type="text" class="form-control" id="tel" value="<?php echo $projektasInfo['program']; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              
            <div class="form-group">
                <label for="issilavinimas">Pajamos</label>
                <input name="price" type="text" class="form-control" id="issilavinimas" value="<?php echo $projektasInfo['price']; ?>">
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
