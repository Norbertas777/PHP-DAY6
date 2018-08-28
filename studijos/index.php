<?php

 include "functions.php";
 include "auth.php";
require "database.php";

if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    //$id = $_POST['id'];
    $query2 = "DELETE FROM lectures WHERE id = '$id'";
 
    $result2 = mysqli_query($connection, $query2);
}

 if (isset($_POST['delete1']) && isset($_POST['id1'])) {
    $id1 = mysqli_real_escape_string($connection, $_POST['id1']);
    //$id = $_POST['id'];
    $query3 = "DELETE FROM students WHERE id = '$id1'";
 
    $result3 = mysqli_query($connection, $query3);
}



?>

<?php head('Elektronine pazymiu knygute'); ?>

<?php

$query = "SELECT * FROM students ORDER BY surname";
$result = mysqli_query($connection, $query);
$studentai = [];
if (mysqli_num_rows($result) > 0) {    
    while ($studentas = mysqli_fetch_assoc($result)) {
        $studentai[] = $studentas;

    }
}


?>

<?php

$query1 = "SELECT * FROM lectures ORDER BY name";
$result1 = mysqli_query($connection, $query1);
$paskaitos = [];
if (mysqli_num_rows($result1) > 0) {    
    while ($paskaita = mysqli_fetch_assoc($result1)) {
        $paskaitos[] = $paskaita;
 
    }
}


?>


<br>
<br>

<div class="col-md-12">
    <br>
    <h1>Studentai:</h1>
    <br>
    <br>
    <table class="table">
        <tr>
            <th></th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>Tel. nr.</th>
            <th>El.Pastas</th>
            
        </tr>
        
         <?php   foreach ($studentai as $studentas)  { ?>
        <tr>
       
            <td><strong><ul><li></li></ul></strong></td>
            
            <td><?php echo $studentas['name'] ?></td>
            <td><?php echo $studentas['surname'] ?></td>
            <td><?php echo $studentas['phone'] ?></td>
            <td><?php echo $studentas['email'] ?></td>           
             <td><a href="studentas.php?id=<?php echo $studentas['id'] ?>" class="btn btn-primary">Plačiau</a></td>
            <td><a href="studentas_redaguoti.php?id=<?php echo $studentas['id'] ?>" class="btn btn-warning">Redaguoti</a></td>
            <td> <form method="post">
                    <input type="hidden" name="id1" value="<?php echo $studentas['id'] ?>">
                    <input type="submit" class="btn btn-danger" value="Trinti" name="delete1">
                </form></td>
            
        </tr>
           <?php } ?>
            
        
    </table>
</div>

<br>
<br>

<div class="col-md-12">
    <h1>Paskaitos:</h1>
    <br>
    <br>
    <table class="table">
        <tr>
            <th></th>
            <th>Pavadinimas</th>
            <th>Aprasymas</th>
           
        </tr>
        <?php   foreach ($paskaitos as $paskaita)  { ?>
        
        <tr>
            
            <td><strong><ul><li></li></ul></strong></td>
            
            <td><?php echo $paskaita['name'] ?></td>
            <td><?php echo $paskaita['description'] ?></td>
           
            <td><a href="paskaita_redaguoti.php?id=<?php echo $paskaita['id'] ?>" class="btn btn-warning">Redaguoti</a></td>
                 <td><form method="post">
                    <input type="hidden" name="id" value="<?php echo $paskaita['id'] ?>">
                    <input type="submit" class="btn btn-danger" value="Trinti" name="delete">
                </form></td>
             
        </tr>
        <?php } ?>
</table>
</div>



<?php footer(); ?>
