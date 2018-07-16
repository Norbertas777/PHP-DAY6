<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Laikas</title>
</head>
<body>
    
    <main role="main" class="container">
        <h1>Koks laikas bus po vienos sekundes ?</h1>
        <p>
            Iveskite valandas,minutes,sekundes.
        </p>
        <form action="skaiciuoti.php" method="POST">
            <div class="form-group">
              <label>Valandos:</label>
              <input type="number" name="valandos" class="form-control" placeholder="Valandos" required>
            </div>
            <div class="form-group">
              <label>Minutes:</label>
              <input type="number" name="minutes" class="form-control" placeholder="Minutes" required>
            </div>
            <div class="form-group">
              <label>Sekundes:</label>
              <input type="number" name="sekundes" class="form-control" placeholder="Sekundes" required>
            </div>
            <button type="submit" class="btn btn-primary">Skaiciuoti</button>
        </form>
    </main>      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
