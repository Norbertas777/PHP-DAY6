<?php

include "functions.php";
include "auth.php";
require "database.php";


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['surname']) && isset($_POST['phone'])) {
        $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $query = "UPDATE students SET name = '$name', surname = '$surname' , phone = '$phone' , email = '$email' WHERE id = $id";
    $result = mysqli_query($connection, $query);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query = "SELECT * FROM students WHERE id = " . $id;
    $result = mysqli_query($connection, $query);
    $studentsInfo = mysqli_fetch_assoc($result);
    
} else {
    echo 'Klaidos pranesimas';
    exit;
}
?>
<?php head('Studento redagavimas'); ?>

<div class="col-md-6">
    <br>
<br>
<br>
<br>

    <h2>Studento redagavimas:</h2>

    <form action="" method="post">
        <input name="id" type="hidden" value="<?php echo $studentsInfo['id']; ?>">
        <div class="form-group">
            <label>Vardas</label>
            <input name="name" type="text" class="form-control" value="<?php echo $studentsInfo['name']; ?>">
        </div>
        <div class="form-group">
            <label>Pavarde</label>
            <input name="surname" type="text" class="form-control"  value="<?php echo $studentsInfo['surname']; ?>">
        </div>
         <div class="form-group">
            <label>El.Pastas</label>
            <input name="email" type="text" class="form-control"  value="<?php echo $studentsInfo['email']; ?>">
        </div>
         <div class="form-group">
            <label>Telefonas</label>
            <input name="phone" type="text" class="form-control"  value="<?php echo $studentsInfo['phone']; ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Išsaugoti">
    </form>
</div>

<?php footer(); ?>