<?php

include "functions.php";
include "auth.php";
require "database.php";


if (isset($_POST['name']) && isset($_POST['description'])) {
        $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    
    
    $query = "UPDATE lectures SET name = '$name', description = '$description' WHERE id = $id";
    $result = mysqli_query($connection, $query);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query = "SELECT * FROM lectures WHERE id = " . $id;
    $result = mysqli_query($connection, $query);
    $lecturesInfo = mysqli_fetch_assoc($result);
    
} else {
    echo 'Klaidos pranesimas';
    exit;
}
?>
<?php head('Paskaitos redagavimas'); ?>

<div class="col-md-6">
    <br>
<br>
<br>
<br>

    <h2>Paskaitos redagavimas:</h2>

    <form action="" method="post">
        <input name="id" type="hidden" value="<?php echo $lecturesInfo['id']; ?>">
        <div class="form-group">
            <label>Vardas</label>
            <input name="name" type="text" class="form-control" value="<?php echo $lecturesInfo['name']; ?>">
        </div>
       <div class="form-group">
               <label for="comment">Aprasymas</label>
               <textarea class="form-control" rows="5" id="comment" name="description" value="<?php echo $lecturesInfo['description']; ?>"></textarea>
                        </div>
        
        <input type="submit" class="btn btn-primary" value="Išsaugoti">
    </form>
</div>

<?php footer(); ?>