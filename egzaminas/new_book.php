<?php
include "functions.php";
include "auth.php";
require "database.php";



if (isset($_POST['name']) && isset($_POST['pages']) && isset($_POST['isbn']) && isset($_POST['short_description']) && isset($_POST['author_id'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $pages = mysqli_real_escape_string($connection, $_POST['pages']);
    $isbn = mysqli_real_escape_string($connection, $_POST['isbn']);
    $description = mysqli_real_escape_string($connection, $_POST['short_description']);
    $author = mysqli_real_escape_string($connection, $_POST['author_id']);



    $query = "INSERT INTO books (title, pages, isbn, short_description, author_id) VALUES ('$name', '$pages', '$isbn', '$description', '$author')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo "Klaida";
        die;
    }
}



$query = "SELECT * FROM authors";
$result = mysqli_query($connection, $query);
$autoriai = [];
if (mysqli_num_rows($result) > 0) {
    while ($autorius = mysqli_fetch_assoc($result)) {
        $autoriai[] = $autorius;
    }
}
?>







<?php head('Naujos knygos registravimas'); ?>

<br>
<br>
<br>
<br>

<div class="col-md-12">
    <h2>Nauja knyga:</h2>

    <br>
    <br>

    <form action="nauja_knyga.php" method="post">
        <div class="col-md-6">
            <div class="form-group">
                <label for="pavadinimas">Pavadinimas</label> 
                <input name="name" type="text" class="form-control" id="vardas" placeholder="Pavadinimas" required>
            </div>
            <div class="form-group">
                <label for="pavadinimas">Puslapiu kiekis</label> 
                <input name="pages" type="number" class="form-control" id="vardas" placeholder="Puslapiu kiekis" required>
            </div>
            <div class="form-group">
                <label for="pavadinimas">ISBN</label> 
                <input name="isbn" type="text" class="form-control" id="vardas" placeholder="ISBN" required>
            </div>

            <div class="form-group">
                <label for="comment">Aprasymas</label>
                <textarea class="form-control" rows="5" id="comment" name="short_description" placeholder="Aprasymas"></textarea>
            </div>
            <div class="form-group">
                <label for="paskaita">Autorius</label> 
                <select name="author_id" id="pask" class="form-control" >
<?php foreach ($autoriai as $autorius) { ?>
                        <option value="<?php echo $autorius['id']; ?>"><?php echo $autorius['name'] . ' ' . $autorius['surname'] ?></option> 


                    <?php } ?>
                </select>
            </div>

        </div>


        <div class="clearfix"></div>
        <div class="col-md-12">
            <br>
            <input type="submit" class="btn btn-primary" value="Pridėti">
        </div>
    </form>
</div>

<?php footer(); ?>
