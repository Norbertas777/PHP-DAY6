<?php
include "functions.php";
require "database.php";

if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    //$id = $_POST['id'];
    $query2 = "DELETE FROM pareigos WHERE id = '$id'";
    var_dump($query2);die;
    $result2 = mysqli_query($connection, $query2);
}
?>
<?php head('Statistika'); ?>

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
mysqli_close($connection);
// musu duomenys masyve $darbuotojai

?>



<div class="col-md-12">
    <br>
    <h1>Visi įmonės darbuotojai</h1>
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
        
         <?php   foreach ($darbuotojai as $darbuotojas)  { ?>
        <tr>
       
<td><strong><?php echo $darbuotojas['id'] ?></strong></td>
            
            <td><?php echo $darbuotojas['name'] ?></td>
            <td><?php echo $darbuotojas['surname'] ?></td>
            <td><?php echo $darbuotojas['phone'] ?></td>
            <td><?php echo $darbuotojas['education'] ?></td>
            <td><?php echo $darbuotojas['salary'] ?></td>
            <td><a href="darbuotojas.php" class="btn btn-primary">Plačiau</a></td>
            <td><a href="darbuotojai_redaguoti.php?id=<?php echo $darbuotojas['id'] ?>" class="btn btn-warning">Redaguoti</a></td>
            <td> <form method="post">
                    <input type="hidden" name="id" value="<?php echo $darbuotojas['id'] ?>">
                    <input type="submit" class="btn btn-danger" value="Trinti" name="delete">
                </form></td>
            
        </tr>
           <?php } ?>
            
        
    </table>
</div>

<div class="col-md-12">
    <h1>Baziniai darbo užmokesčiai:</h1>
    
    <table class="table">
        <tr>
            <th>Pareigos</th>
            <th>Bazinis darbo užmokestis</th>
            <th>Darbuotojų skaičius</th>
            <th></th>
        </tr>
        <?php   foreach ($pareigos as $pareiga)  { ?>
        
        
        <tr>
            <td><?php echo $pareiga['name'] ?></td>
            <td><?php echo $pareiga['base_salary'] ?></td>
            <td></td>
            <td><a href="darbuotojai_pareigos.php" class="btn btn-primary">Rodyti darbuotojus</a></td>
            <td><a href="pareigos_redaguoti.php?id=<?php echo $pareiga['id'] ?>" class="btn btn-warning">Redaguoti</a></td>
                 <td><form method="post">
                    <input type="hidden" name="id" value="<?php echo $pareiga['id'] ?>">
                    <input type="submit" class="btn btn-danger" value="Trinti" name="delete">
                </form></td>
        </tr>
        <?php } ?>
</table>
</div>

<?php footer(); ?>
