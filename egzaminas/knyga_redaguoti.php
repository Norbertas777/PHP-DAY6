<?php

include "functions.php";
include "auth.php";
require "database.php";


if (isset($_POST['name']) && isset($_POST['pages']) && isset($_POST['isbn']) && isset($_POST['short_description']) && isset($_POST['author_id'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $pages = mysqli_real_escape_string($connection, $_POST['pages']);
    $isbn = mysqli_real_escape_string($connection, $_POST['isbn']);
    $description = mysqli_real_escape_string($connection, $_POST['short_description']);
    $author = mysqli_real_escape_string($connection, $_POST['author_id']);
       
    
    
    
    $query = "UPDATE books SET title = '$name', pages = '$pages', isbn = '$isbn', short_description = '$description', author_id = '$author' WHERE id = $id";
    $result = mysqli_query($connection, $query);
    
    
}

$query = "SELECT * FROM authors";
$result = mysqli_query($connection, $query);
$autoriai = [];
if (mysqli_num_rows($result) > 0) {    
    while ($autorius = mysqli_fetch_assoc($result)) {
        $autoriai[] = $autorius;

    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];    
    $query = "SELECT * FROM books WHERE id = " . $id;
    $result = mysqli_query($connection, $query);
    $booksInfo = mysqli_fetch_assoc($result);
    
} else {
    echo 'Klaidos pranesimas';
    exit;
}
?>
<?php head('KNygos redagavimas'); ?>

<div class="col-md-6">
    <br>
<br>
<br>
<br>

    <h2>Knygos redagavimas:</h2>

    <form action="" method="post">
        <input name="id" type="hidden" value="<?php echo $booksInfo['id']; ?>">
        <div class="form-group">
            <label>Pavadinimas</label>
            <input name="name" type="text" class="form-control" value="<?php echo $booksInfo['title']; ?>">
        </div>
        <div class="form-group">
            <label>Puslapiu kiekis</label>
            <input name="pages" type="number" class="form-control" value="<?php echo $booksInfo['pages']; ?>">
        </div>
        <div class="form-group">
            <label>ISBN</label>
            <input name="isbn" type="text" class="form-control" value="<?php echo $booksInfo['isbn']; ?>">
        </div>
       <div class="form-group">
               <label for="comment">Aprasymas</label>
               <textarea class="form-control" rows="5" id="comment" name="short_description" value="<?php echo $booksInfo['short_description']; ?>"></textarea>
                        </div>
         <div class="form-group">
                <label for="paskaita">Autorius</label> 
                <select name="author_id" id="pask" class="form-control" >
                    <?php foreach ($autoriai as $autorius) { ?>
                    <option value="<?php echo $autorius['id']; ?>"><?php echo $autorius['name'] . ' ' . $autorius['surname'] ?></option> 
                        
                        
                   <?php } ?>
                </select>
            </div>
        
        <input type="submit" class="btn btn-primary" value="Išsaugoti">
    </form>
</div>

<?php footer(); ?>