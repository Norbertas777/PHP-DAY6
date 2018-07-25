<?php
include "functions.php";

require "database.php";


if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['gender']) && isset($_POST['phone']) && isset($_POST['education']) && isset($_POST['salary']) && isset($_POST['pareigos_id'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $salary = mysqli_real_escape_string($connection, $_POST['salary']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $education = mysqli_real_escape_string($connection, $_POST['education']);
    $pareigos = mysqli_real_escape_string($connection, $_POST['pareigos_id']);
    $surname = mysqli_real_escape_string($connection, $_POST['surname']);
    
    $query = "INSERT INTO darbuotojai (name, surname, gender, phone, education, salary) VALUES ('$name', '$surname', '$gender' ,'$phone' ,'$education', '$salary')";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        echo "Klaida";
        die;
    }
}





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
                    <option>Direktorius</option>                    
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
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <input type="submit" class="btn btn-primary" value="Pridėti">
        </div>
    </form>
</div>

<?php footer(); ?>