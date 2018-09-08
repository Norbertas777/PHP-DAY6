<?php
include "functions.php";
include "auth.php";
require "database.php";

if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = mysqli_real_escape_string($connection, $_POST['id']);

    $query2 = "DELETE FROM books WHERE id = '$id'";

    $result2 = mysqli_query($connection, $query2);
}

if (isset($_POST['delete1']) && isset($_POST['id1'])) {
    $id1 = mysqli_real_escape_string($connection, $_POST['id1']);

    $query3 = "DELETE FROM authors WHERE id = '$id1'";

    $result3 = mysqli_query($connection, $query3);
}
?>

<?php head('Bibliotekos sistema'); ?>

<?php
$query = "SELECT * FROM authors";
$result = mysqli_query($connection, $query);
$autoriai = [];
if (mysqli_num_rows($result) > 0) {
    while ($autorius = mysqli_fetch_assoc($result)) {
        $autoriai[] = $autorius;
    }
}
?>

<?php
$query1 = "SELECT * FROM `books` 
           ORDER BY `title`";
$result1 = mysqli_query($connection, $query1);
$knygos = [];
if (mysqli_num_rows($result1) > 0) {
    while ($knyga = mysqli_fetch_assoc($result1)) {
        $knygos[] = $knyga;
    }
}
?>


<br>
<br>

<div class="col-md-12">
    <br>
    <h1>Autoriai:</h1>
    <br>
    <br>
    <table class="table">
        <tr>
            <th></th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th></th>
        </tr>

<?php foreach ($autoriai as $autorius) { ?>
            <tr>

                <td><strong><ul><li></li></ul></strong></td>

                <td><?php echo $autorius['name'] ?></td>
                <td><?php echo $autorius['surname'] ?></td>
                <td><a href="filtrate.php?id=<?php echo $autorius['id'] ?>" class="btn btn-primary">Plačiau</a></td>
                <td><a href="author_edit.php?id=<?php echo $autorius['id'] ?>" class="btn btn-warning">Redaguoti</a></td>
                <td> <form method="post">
                        <input type="hidden" name="id1" value="<?php echo $autorius['id'] ?>">
                        <input type="submit" class="btn btn-danger" value="Trinti" name="delete1">
                    </form></td>

            </tr>
<?php } ?>


    </table>
</div>

<br>
<br>

<div class="col-md-12">
    <h1>Knygos:</h1>
    <br>
    <br>
    <table class="table">
        <tr>
            <th></th>
            <th>Pavadinimas</th>
            <th>Puslapiu kiekis</th>
            <th>ISBN</th>
            <th>Aprasymas</th>

        </tr>
<?php foreach ($knygos as $knyga) { ?>

            <tr>

                <td><strong><ul><li></li></ul></strong></td>

                <td><?php echo $knyga['title'] ?></td>
                <td><?php echo $knyga['pages'] ?></td>
                <td><?php echo $knyga['isbn'] ?></td>
                <td><?php echo $knyga['short_description'] ?></td>

                <td><a href="book_edit.php?id=<?php echo $knyga['id'] ?>" class="btn btn-warning">Redaguoti</a></td>
                <td><form method="post">
                        <input type="hidden" name="id" value="<?php echo $knyga['id'] ?>">
                        <input type="submit" class="btn btn-danger" value="Trinti" name="delete">
                    </form></td>

            </tr>
<?php } ?>
    </table>
</div>



<?php footer(); ?>
