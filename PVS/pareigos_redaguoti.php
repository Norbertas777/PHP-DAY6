<?php

include "functions.php";
require "database.php";


if (isset($_POST['name']) && isset($_POST['base_salary'])) {
        $id = $_POST['id'];
    $name = $_POST['name'];
    $base_salary = $_POST['base_salary'];
    
    $query = "UPDATE pareigos SET name = '$name', base_salary = '$base_salary' WHERE id = $id";
    $result = mysqli_query($connection, $query);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query = "SELECT * FROM pareigos WHERE id = " . $id;
    $result = mysqli_query($connection, $query);
    $pareigosInfo = mysqli_fetch_assoc($result);
    
} else {
    echo 'Klaidos pranesimas';
    exit;
}
?>
<?php head('Pareigu redagavimas'); ?>

<div class="col-md-6">
    <h2>Pareigų redagavimas:</h2>

    <form action="" method="post">
        <input name="id" type="hidden" value="<?php echo $pareigosInfo['id']; ?>">
        <div class="form-group">
            <label>Pavadinimas</label>
            <input name="name" type="text" class="form-control" value="<?php echo $pareigosInfo['name']; ?>">
        </div>
        <div class="form-group">
            <label>Bazinė alga</label>
            <input name="base_salary" type="text" class="form-control"  value="<?php echo $pareigosInfo['base_salary']; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Išsaugoti">
    </form>
</div>

<?php footer(); ?>