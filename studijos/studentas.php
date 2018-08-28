<?php
include "auth.php";
include "functions.php";
require "database.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query1 = "SELECT * FROM students WHERE id =" . $id;
    $result1 = mysqli_query($connection, $query1);
    $studentasInfo = mysqli_fetch_assoc($result1);
} else {
    echo 'Klaidos pranesimas';
    exit;
}

$query = "SELECT students.id, students.name, students.surname, grades.grade, lectures.name
FROM students
LEFT JOIN grades ON students.id = grades.student_id
LEFT JOIN lectures ON grades.lecture_id = lectures.id
WHERE students.id = $id AND grades.grade is not null";

$result = mysqli_query($connection, $query);
$informacija = [];
if (mysqli_num_rows($result) > 0) {
    while ($info = mysqli_fetch_assoc($result)) {
        $informacija[] = $info;
    }
}
?>

<?php head('Studento pazymiai') ?>
<br>
<br>
<br>
<br>
<div class="col-md-12">
    <h1>Studentas : <?php echo $studentasInfo['name']; ?>  <?php echo $studentasInfo['surname']; ?></h1>
</div>

<table class="table">
  <thead class="thead-dark">
    <tr>
        <th scope="col">
        </th>
      <th scope="col">Paskaita</th>
      <th scope="col">Pazimys</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($informacija as $info) { ?>
    <tr>
      <th scope="row"></th>
      <td><?php echo $info['name']; ?></td>
      <td><?php echo $info['grade']; ?></td>
    
    </tr>
    <?php } ?>
</tbody>
</table>

<?php footer(); ?>