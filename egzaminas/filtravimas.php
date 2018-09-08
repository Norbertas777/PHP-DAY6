<?php
include "auth.php";
include "functions.php";
require "database.php";


if (isset($_GET['id'])) {
    $id =  $_GET['id'];    
    $query = "SELECT * FROM authors WHERE id = " . $id;
    $result = mysqli_query($connection, $query);
    $autoriausInfo = mysqli_fetch_assoc($result);
}




 
    $querry = "SELECT * FROM books WHERE author_id =" . $autoriausInfo['id'];
   $result1 = mysqli_query($connection, $querry);
$informacija = [];
if (mysqli_num_rows($result) > 0) {
    while ($info = mysqli_fetch_assoc($result1)) {
        $informacija[] = $info;
            }
}

?>












<?php head('Autoriaus knygos'); ?>

<br>
<br>
<br>

<div class="col-md-12">
    <h1><?php echo $autoriausInfo['name']; ?>  <?php echo $autoriausInfo['surname']; ?></h1>
</div>

<br>
<br>
<br>

    <div class="col-md-12">
    <h1>Knygos:</h1>
    <br>
    <table class="table">
        <tr>
            <th>Pavadinimas</th>
            <th>Puslapiu kiekis</th>
            <th>ISBN</th>
            <th>Aprasymas</th>
            
        </tr>
<?php foreach ($informacija as $info) { ?>

    
    
    
            <tr>
                <td><?php echo $info['title'] ?></td>
                <td><?php echo $info['pages'] ?></td>
                <td><?php echo $info['isbn'] ?></td>
                <td><?php echo $info['short_description'] ?></td>
                
            </tr>
        <?php } ?>
    </table>
</div>




<?php footer(); ?>
