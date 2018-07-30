<?php

include "functions.php";
require "database.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query = "SELECT * FROM projects WHERE id = " . $id;
    $result = mysqli_query($connection, $query);
    $pareigosInfo = mysqli_fetch_assoc($result);
}
    if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query = "SELECT * FROM darbuotojai WHERE projects_id = " . $id;
    $result = mysqli_query($connection, $query);
    $darbuotojaiInfo = [];
    if (mysqli_num_rows($result) > 0) {    
    while ($darbuotojasInfo = mysqli_fetch_assoc($result)) {
        $darbuotojaiInfo[] = $darbuotojasInfo;
        
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
}



 ?>

<?php

$query = "SELECT * FROM darbuotojai";
$result = mysqli_query($connection, $query);
$darbuotojai = [];
if (mysqli_num_rows($result) > 0) {    
    while ($darbuotojas = mysqli_fetch_assoc($result)) {
        $darbuotojai[] = $darbuotojas;
        
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
// musu duomenys masyve $darbuotojai

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

// musu duomenys masyve $darbuotojai

?>

<?php head('Darbuotojai pagal projektus'); ?>

<div class="col-md-12">
    <h1>Darbuotojai pagal projekta: <b><?php echo $pareigosInfo['name']; ?></b></h1>
</div>

<div class="col-md-12">
    <h2>Darbuotojų sąrašas</h2>
    <table class="table">
        <tr>
            <th></th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Tel. nr.</th>
            <th>Išsilavinimas</th>
            <th>Alga</th>
            <th></th>
        </tr>
        <?php   foreach ($darbuotojaiInfo as $darbuotojasInfo)  {
           
            

            
            ?>
        
        

    

       
        <tr>
            <td><strong> - </strong></td>
            <td><?php echo $darbuotojasInfo['name']; ?></td>
            <td><?php echo $darbuotojasInfo['surname']; ?></td>
            <td>+<?php echo $darbuotojasInfo['phone']; ?></td>
            <td><?php echo $darbuotojasInfo['education']; ?></td>
            <td><?php echo $darbuotojasInfo['salary']; ?></td>
            <td><a href="darbuotojas.php?id= <?php echo $darbuotojasInfo['id']; ?>" class="btn btn-primary">Plačiau</a></td>
        </tr>
        <?php } ?>
        
    </table>
</div>

<?php footer(); ?>


