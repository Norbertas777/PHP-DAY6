<?php

include "functions.php";
include "auth.php";
require "database.php";


if (isset($_POST['name'])  && isset($_POST['surname'])) {
        $id = $_POST['id'];
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $surname = mysqli_real_escape_string($connection, $_POST['surname']);

    
    $query = "UPDATE authors SET name = '$name', surname = '$surname' WHERE id = $id";
    $result = mysqli_query($connection, $query);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query = "SELECT * FROM authors WHERE id = " . $id;
    $result = mysqli_query($connection, $query);
    $authorInfo = mysqli_fetch_assoc($result);
    
} else {
    echo 'Klaidos pranesimas';
    exit;
}
?>
<?php head('Autoriaus redagavimas'); ?>

<div class="col-md-6">
    <br>
<br>
<br>
<br>

    <h2>Autoriaus redagavimas:</h2>

    <form action="" method="post">
        <input name="id" type="hidden" value="<?php echo $authorInfo['id']; ?>">
        <div class="form-group">
            <label>Vardas</label>
            <input name="name" type="text" class="form-control" value="<?php echo $authorInfo['name']; ?>">
        </div>
        <div class="form-group">
            <label>Pavarde</label>
            <input name="surname" type="text" class="form-control"  value="<?php echo $authorInfo['surname']; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Išsaugoti">
    </form>
</div>

<?php footer(); ?>