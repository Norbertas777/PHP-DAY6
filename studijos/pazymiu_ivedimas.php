<?php

 include "functions.php";
 include "auth.php";
require "database.php";




if (isset($_POST['paskaita']) && isset($_POST['studentas']) && isset($_POST['pazimys'])) {
    $paskaitaa = mysqli_real_escape_string($connection, $_POST['paskaita']);
    $studentass = mysqli_real_escape_string($connection, $_POST['studentas']);
    $pazimys = mysqli_real_escape_string($connection, $_POST['pazimys']);
  
    
    $query = "INSERT INTO grades (lecture_id, student_id, grade) VALUES ('$paskaitaa', '$studentass', '$pazimys')";
    
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
        echo "Klaida";
        die;
    }
}


?>

<?php

$query1 = "SELECT * FROM students";
$result1 = mysqli_query($connection, $query1);
$students = [];
if (mysqli_num_rows($result1) > 0) {    
    while ($studentas = mysqli_fetch_assoc($result1)) {
        $students[] = $studentas;
        
  
    }
}


?>

<?php

$query1 = "SELECT * FROM lectures";
$result1 = mysqli_query($connection, $query1);
$paskaitos = [];
if (mysqli_num_rows($result1) > 0) {    
    while ($paskaita = mysqli_fetch_assoc($result1)) {
        $paskaitos[] = $paskaita;
 
    }
}


?>

<?php head('Pazymiu ivedimas'); ?>



<div class="col-md-12">
    <br>
    <br>
    <br>
    <br>
    <h2>Pazymiu ivedimas:</h2>
    <form action="" method="post">
<div class="col-md-6">
            <div class="form-group">
                <label for="paskaita">Paskaita</label> 
                <select name="paskaita" id="pask" class="form-control" >
                    <?php foreach ($paskaitos as $paskaita) { ?>
                    <option value="<?php echo $paskaita['id']; ?>"><?php echo $paskaita['name'] ?></option> 
                        
                        
                   <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="studentas">Studentas</label> 
                <select name="studentas" id="stud" class="form-control" >
                    <?php foreach ($students as $studentas) { ?>
                        <option value="<?php echo $studentas['id']; ?>"><?php echo $studentas['name'] ?></option> 
                        
                        
                   <?php } ?>
                </select>
            </div>
    <div class="form-group">
                <label for="pazimys">Pazimys</label> 
                <input name="pazimys" type="number" class="form-control" id="pavarde" placeholder="Pazimys">
            </div>
    <div class="clearfix"></div>
        <div class="col-md-12">
            <br>
            <input type="submit" class="btn btn-primary" value="Pridėti">
        </div>
     </div>
        
    </form>
         </div>