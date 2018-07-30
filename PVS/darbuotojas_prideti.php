<?php

include "functions.php";
require "database.php";


if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['education']) && isset($_POST['salary']) && isset($_POST['pareigos_id']) && isset($_POST['birthday']) && isset($_POST['projects_id'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $salary = mysqli_real_escape_string($connection, $_POST['salary']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $education = mysqli_real_escape_string($connection, $_POST['education']);
    $pareigos = mysqli_real_escape_string($connection, $_POST['pareigos_id']);
    $surname = mysqli_real_escape_string($connection, $_POST['surname']);
    $birthday = mysqli_real_escape_string($connection, $_POST['birthday']);
   $projects_id = mysqli_real_escape_string($connection, $_POST['projects_id']);
    
    $query = "INSERT INTO darbuotojai (name, surname, gender, phone, birthday, education, salary, pareigos_id, projects_id) VALUES ('$name', '$surname', '$gender' , '$birthday' ,  '$phone' ,'$education', '$salary', '$pareigos', '$projects_id')";
    
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

<?php

$query1 = "SELECT * FROM projects";
$result1 = mysqli_query($connection, $query1);
$projektai = [];
if (mysqli_num_rows($result1) > 0) {    
    while ($projektas = mysqli_fetch_assoc($result1)) {
        $projektai[] = $projektas;
        
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


<?php head('Darbuotojo pridėjimas'); ?>

<div class="col-md-12">
    <h2>Naujas darbuotojas:</h2>

    <form action="" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <label for="vardas">Vardas</label> 
                <input name="name" type="text" class="form-control" id="vardas" placeholder="Vardas">
            </div>
            <div class="form-group">
                <label for="pavarde">Pavardė</label> 
                <input name="surname" type="text" class="form-control" id="pavarde" placeholder="Pavarde">
            </div>
            <div class="form-group">
                <label for="lytis">Lytis</label> 
                <select name="gender" id="lytis" class="form-control">
                        <option>Vyras</option>
                        <option>Moteris</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tel">Telefonas</label> 
                <input name="phone" type="text" class="form-control" id="tel" placeholder="Telefonas">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="pareigos">Pareigos</label> 
                <select name="pareigos_id" id="pareigos" class="form-control">
                    <?php foreach ($pareigos as $pareiga) { ?>
                        <option><?php echo $pareiga['id'] ?> - <?php echo $pareiga['name'] ?></option> 
                        
                        
                   <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="pareigos">Projektai</label> 
                <select name="projects_id" id="projektai" class="form-control">
                    <?php foreach ($projektai as $projektas) { ?>
                        <option><?php echo $projektas['id'] ?> - <?php echo $projektas['name'] ?></option> 
                        
                        
                   <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="issilavinimas">Išsilavinimas</label>
                <input name="education" type="text" class="form-control" id="issilavinimas" placeholder="Išsilavinimas">
            </div>

            <div class="form-group">
                <label for="issilavinimas">Atlyginimas</label>
                <input name="salary" type="text" class="form-control" id="issilavinimas" placeholder="Atlyginimas">
            </div>
            <div>
                <label for="data">Gimimo data</label>
                <br>
                <input name="birthday" type="date"  id="gimtadienis">
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