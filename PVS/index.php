<?php
include "functions.php";
require "database.php";

if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    //$id = $_POST['id'];
    $query2 = "DELETE FROM pareigos WHERE id = '$id'";

    $result2 = mysqli_query($connection, $query2);
}

if (isset($_POST['delete1']) && isset($_POST['id1'])) {
    $id1 = mysqli_real_escape_string($connection, $_POST['id1']);
    //$id = $_POST['id'];
    $query3 = "DELETE FROM darbuotojai WHERE id = '$id1'";

    $result3 = mysqli_query($connection, $query3);
}



if (isset($_POST['delete2']) && isset($_POST['id2'])) {
    $id2 = mysqli_real_escape_string($connection, $_POST['id2']);
    //$id = $_POST['id'];
    $query4 = "DELETE FROM projects WHERE id = '$id2'";

    $result4 = mysqli_query($connection, $query4);
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

<?php foreach ($darbuotojai as $darbuotojas) { ?>
            <tr>

                <td><strong><?php echo $darbuotojas['id'] ?></strong></td>

                <td><?php echo $darbuotojas['name'] ?></td>
                <td><?php echo $darbuotojas['surname'] ?></td>
                <td><?php echo $darbuotojas['phone'] ?></td>
                <td><?php echo $darbuotojas['education'] ?></td>
                <td><?php echo $darbuotojas['salary'] ?></td>
                <td><a href="darbuotojas.php?id=<?php echo $darbuotojas['id'] ?>" class="btn btn-primary">Plačiau</a></td>
                <td><a href="darbuotojai_redaguoti.php?id=<?php echo $darbuotojas['id'] ?>" class="btn btn-warning">Redaguoti</a></td>
                <td> <form method="post">
                        <input type="hidden" name="id1" value="<?php echo $darbuotojas['id'] ?>">
                        <input type="submit" class="btn btn-danger" value="Trinti" name="delete1">
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
<?php foreach ($pareigos as $pareiga) { ?>

    <?php
    $querry = "SELECT COUNT(*) FROM darbuotojai WHERE pareigos_id =" . $pareiga['id'];
    $result = mysqli_query($connection, $querry);
    $rezultatas = mysqli_fetch_row($result);
    $vidutineAlga = $rezultatas[0];
    ?>
            <tr>
                <td><?php echo $pareiga['name'] ?></td>
                <td><?php echo $pareiga['base_salary'] ?></td>
                <td><?php echo $vidutineAlga ?></td>
                <td><a href="darbuotojai_pareigos.php?id=<?php echo $pareiga['id'] ?>" class="btn btn-primary">Rodyti darbuotojus</a></td>
                <td><a href="pareigos_redaguoti.php?id=<?php echo $pareiga['id'] ?>" class="btn btn-warning">Redaguoti</a></td>
                <td><form method="post">
                        <input type="hidden" name="id" value="<?php echo $pareiga['id'] ?>">
                        <input type="submit" class="btn btn-danger" value="Trinti" name="delete">
                    </form></td>
            </tr>
        <?php } ?>
    </table>
</div>

<div class="col-md-12">
    <h1>Projektai:</h1>

    <table class="table">
        <tr>
            <th>Projekto pavadinimas</th>
            <th>Projekto metai</th>
            <th>Projekto aprasymas</th>
            <th>Projekto pajamos</th>
            <th>Darbuotojų skaičius</th>
        </tr>
<?php foreach ($projektai as $projektas) { ?>



    <?php
    $querry = "SELECT COUNT(*) FROM darbuotojai WHERE projects_id =" . $projektas['id'];
    $result = mysqli_query($connection, $querry);
    $rezultatas = mysqli_fetch_row($result);
    $darbSkaicius = $rezultatas[0];
    ?>
            <tr>
                <td><?php echo $projektas['name'] ?></td>
                <td><?php echo $projektas['year'] ?></td>
                <td><?php echo $projektas['program'] ?></td>
                <td><?php echo $projektas['price'] ?></td>
                <td><?php echo $darbSkaicius ?></td>
                <td><a href="darbuotojai_projektas.php?id=<?php echo $projektas['id'] ?>" class="btn btn-primary">Rodyti darbuotojus</a></td>
                <td><a href="projektas_redaguoti.php?id=<?php echo $projektas['id'] ?>" class="btn btn-warning">Redaguoti</a></td>
                <td><form method="post">
                        <input type="hidden" name="id2" value="<?php echo $projektas['id'] ?>">
                        <input type="submit" class="btn btn-danger" value="Trinti" name="delete2">
                    </form></td>
            </tr>
        <?php } ?>
    </table>
</div>

        <?php footer(); ?>
