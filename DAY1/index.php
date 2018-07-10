<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>KMI skaičiuoklė</title>
</head>
<body>
    
    <main role="main" class="container">
        <h1>Kūno masės indekso (KMI) skaičiuoklė:</h1>
        <p>
            KMI - tai ūgio ir svorio santykio rodiklis, leidžiantis
            įvertinti ar žmogaus svoris normalus ar yra antsvoris bei nutukimas.
            <br/>
            Norėdami apskaičiuoti savo KMI, įveskite žemiau nurodytus duomenis.
        </p>
        <form action="skaiciuoti.php" method="POST">
            <div class="form-group">
              <label>Svoris (kg):</label>
              <input type="number" name="svoris" class="form-control" placeholder="kg" required>
            </div>
            <div class="form-group">
              <label>Ūgis (cm):</label>
              <input type="number" name="ugis" class="form-control" placeholder="cm" required>
            </div>
            <button type="submit" class="btn btn-primary">Skaičiuoti</button>
        </form>
    </main>      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
