<?php

include "functions.php";
require "database.php";


if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['education']) && isset($_POST['salary']) && isset($_POST['pareigos_id']) && isset($_POST['birthday']) && isset($_POST['projects_id'])) {
    $id = $_POST['id'];
    $name = ($_POST['name']);
    $salary = ($_POST['salary']);
    $phone = ($_POST['phone']);
    $gender = ($_POST['gender']);
    $education = ($_POST['education']);
    $pareigos = ($_POST['pareigos_id']);
    $surname =  ($_POST['surname']);
    $birthday = ($_POST['birthday']);
    $projects_id =  ($_POST['projects_id']);
    
    $query = "UPDATE darbuotojai SET name = '$name', salary = '$salary', surname = '$surname', gender = '$gender', birthday = '$birthday', phone = '$phone', education = '$education', pareigos_id = '$pareigos', projects_id = '$projects_id' WHERE id = $id";
    $result = mysqli_query($connection, $query);
}
    
    if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query1 = "SELECT * FROM darbuotojai WHERE id =" . $id;
    $result1 = mysqli_query($connection, $query1);
    $pareigosInfo = mysqli_fetch_assoc($result1);
    
} else {
    echo 'Klaidos pranesimas';
    exit;
}






$query2 = "SELECT * FROM pareigos";
$result2 = mysqli_query($connection, $query2);
$pareigos = [];
if (mysqli_num_rows($result2) > 0) {    
    while ($pareiga = mysqli_fetch_assoc($result2)) {
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


?>

<?php

$query3 = "SELECT * FROM projects";
$result3 = mysqli_query($connection, $query3);
$projektai = [];
if (mysqli_num_rows($result1) > 0) {    
    while ($projektas = mysqli_fetch_assoc($result3)) {
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












<?php head('Darbuotojo redagavimas'); ?>

<div class="col-md-12">
    <h2>Darbuotojo redagavimas:</h2>

    <form action="" method="post">
        <input name="id" type="hidden" value="<?php echo $pareigosInfo['id']; ?>">
        <div class="col-md-6">
            
        <div class="form-group">
            <div class="form-group">
                <label for="vardas">Vardas</label> 
                <input name="name" type="text" class="form-control" value="<?php echo $pareigosInfo['name']; ?>">
            </div>
            <div class="form-group">
                <label for="pavarde">Pavardė</label> 
                <input name="surname" type="text" class="form-control" value="<?php echo $pareigosInfo['surname']; ?>">
            </div>
            <div class="form-group">
                <label for="lytis">Lytis</label> 
                <select name="gender" id="lytis" class="form-control" value="<?php echo $pareigosInfo['gender']; ?>">
                        <option>Vyras</option>
                        <option>Moteris</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tel">Telefonas</label> 
                <input name="phone" type="text" class="form-control" value="<?php echo $pareigosInfo['phone']; ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="pareigos">Pareigos</label> 
                <select name="pareigos_id" id="pareigos" class="form-control" value="<?php echo $pareigosInfo['pareigos_id']; ?>">
                    <?php foreach ($pareigos as $pareiga) { ?>
                        <option><?php echo $pareiga['id'] ?> - <?php echo $pareiga['name'] ?></option> 
                        
                        
                   <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="pareigos">Projektai</label> 
                <select name="projects_id" id="pareigos" class="form-control" value="<?php echo $pareigosInfo['projects_id']; ?>">
                    <?php foreach ($projektai as $projektas) { ?>
                        <option><?php echo $projektas['id'] ?> - <?php echo $projektas['name'] ?></option> 
                        
                        
                   <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="issilavinimas">Išsilavinimas</label>
                <input name="education" type="text" class="form-control" value="<?php echo $pareigosInfo['education']; ?>">
            </div>

            <div class="form-group">
                <label for="issilavinimas">Atlyginimas</label>
                <input name="salary" type="text" class="form-control" value="<?php echo $pareigosInfo['salary']; ?>">
            </div>
            <div>
                <label for="data">Gimimo data</label>
                <br>
                <input name="birthday" type="date"  id="gimtadienis" value="<?php echo $pareigosInfo['birthday']; ?>">
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