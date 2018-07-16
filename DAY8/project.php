<?php
if (isset($_GET['sortOrder'])) {
    $sortOrder = $_GET['sortOrder'];
} else {
    $sortOrder = 'asc';
}
function rikiuokPagalMetus($elementas1, $elementas2)
{
    global $sortOrder;
    
    // 0 jeigu lygus
    if ($elementas1['year'] == $elementas2['year']) {
        return 0;
    }
    // -1 jeigu elementas1 mazesnis
    if ($elementas1['year'] < $elementas2['year']) {
        if ($sortOrder == 'asc') {            
            return -1;
        }
        return 1;
    }
    // 1 jeigu elementas1 didesnis
    if ($sortOrder == 'asc') {            
        return 1;
    }
    return -1;
}

function rikiuokPagalVarda($elementas1, $elementas2)
{
    global $sortOrder;
    
    // 0 jeigu lygus
    if ($elementas1['short_name'] == $elementas2['short_name']) {
        return 0;
    }
    // -1 jeigu elementas1 mazesnis
    if ($elementas1['short_name'] < $elementas2['short_name']) {
        if ($sortOrder == 'asc') {            
            return -1;
        }
        return 1;
    }
    // 1 jeigu elementas1 didesnis
    if ($sortOrder == 'asc') {            
        return 1;
    }
    return -1;
}

function rikiuokPagalSuma($elementas1, $elementas2)
{
    global $sortOrder;
    
    // 0 jeigu lygus
    if ($elementas1['price'] == $elementas2['price']) {
        return 0;
    }
    // -1 jeigu elementas1 mazesnis
    if ($elementas1['price'] < $elementas2['price']) {
        if ($sortOrder == 'asc') {            
            return -1;
        }
        return 1;
    }
    // 1 jeigu elementas1 didesnis
    if ($sortOrder == 'asc') {            
        return 1;
    }
    return -1;
}

function rikiuokPagalPrograma($elementas1, $elementas2)
{
    global $sortOrder;
    
    // 0 jeigu lygus
    if ($elementas1['program'] == $elementas2['program']) {
        return 0;
    }
    // -1 jeigu elementas1 mazesnis
    if ($elementas1['program'] < $elementas2['program']) {
        if ($sortOrder == 'asc') {            
            return -1;
        }
        return 1;
    }
    // 1 jeigu elementas1 didesnis
    if ($sortOrder == 'asc') {            
        return 1;
    }
    return -1;
}


$projects = [
    ['id' => '1','short_name' => 'BIO-C3','year' => '2014','program' => 'BONUS','price' => '3700000'],
    ['id' => '2','short_name' => 'TRIPOLIS','year' => '2014','program' => 'LMT','price' => '79385'],
    ['id' => '4','short_name' => 'BALTCOAST','year' => '2015','program' => 'BONUS','price' => '2868208'],
    ['id' => '5','short_name' => 'BSCP','year' => '2015','program' => 'EASME','price' => '784000'],
    ['id' => '6','short_name' => 'BALMAN','year' => '2015','program' => 'LMT,  Lithuania - Latvia - China (Taiwan] research project fund','price' => '667623'],
    ['id' => '8','short_name' => 'MAURAKUMA','year' => '2014','program' => 'LMT','price' => '78921'],
    ['id' => '9','short_name' => 'BALSAM','year' => '2013','program' => 'European Commission, Marine Strategy Framework Directive pilot projects','price' => '461803'],
    ['id' => '10','short_name' => 'DEVOTES','year' => '2012','program' => 'European Commission, 7 BP','price' => '136651'],
    ['id' => '11','short_name' => 'MARES','year' => '2012','program' => 'ERASMUS MUNDUS, Horizon 2020','price' => '100800'],
    ['id' => '12','short_name' => 'VECTORS','year' => '2012','program' => 'European Commission, 7 BP','price' => '15237662'],
    ['id' => '13','short_name' => 'DENOFLIT','year' => '2010','program' => 'LIFE+ Nature & Biodiversity','price' => '1569699'],
    ['id' => '14','short_name' => 'TRUFFLE','year' => '2012','program' => 'Latvia-Lithuania Cross Border Cooperation Programme ','price' => '319440'],
    ['id' => '15','short_name' => 'LAKES FOR FUTURE','year' => '2012','program' => 'Latvia-Lithuania Cross Border Cooperation Programme ','price' => '1012554'],
    ['id' => '16','short_name' => 'IANUS','year' => '2012','program' => 'LMT','price' => '221530'],
    ['id' => '17','short_name' => 'PROTEUS','year' => '2012','program' => 'LMT','price' => '99542'],
    ['id' => '18','short_name' => 'SAMBAH','year' => '2010','program' => 'LIFE+ Nature & Biodiversity','price' => '80282'],
    ['id' => '19','short_name' => 'PREHAB','year' => '2010','program' => 'BONUS','price' => '263630'],
    ['id' => '20','short_name' => 'KRABAS','year' => '2011','program' => 'LMT','price' => '43153'],
    ['id' => '21','short_name' => 'MEECE','year' => '2008','program' => 'European Commission, 7 BP','price' => '6499745'],
    ['id' => '22','short_name' => 'EEE','year' => '2008','program' => 'The Norwegian Financial Mechanism and the Republic of Lithuania','price' => '989072'],
    ['id' => '23','short_name' => 'MOPODECO','year' => '2010','program' => 'Nordic countries Council of Ministers','price' => '100544'],
    ['id' => '24','short_name' => 'Cross-border DISCOS','year' => '2012','program' => 'Latvia-Lithuania Cross Border Cooperation Programme ','price' => '778108'],
    ['id' => '25','short_name' => 'Cross-border DISCOS','year' => '2012','program' => 'Latvijos ir Lietuvos bendradarbiavimo per sieną programa - LATLIT','price' => '778'],
    ['id' => '26','short_name' => 'JRTC','year' => '2010','program' => 'LATLIT, Interreg, Latvia-Lithuania Cross Border Cooperation Programme ','price' => '528793']
];
if ($_GET['sortBy'] == 'price') {
    usort($projects, 'rikiuokPagalSuma');
} elseif ($_GET['sortBy'] == 'short_name') {
    usort($projects, 'rikiuokPagalVarda');
} elseif ($_GET['sortBy'] == 'year') {
    usort($projects, 'rikiuokPagalMetus');
} elseif ($_GET['sortBy'] == 'program') {
    usort($projects, 'rikiuokPagalPrograma');
}

switch ($sortOrder) {
    case 'asc':
        $sortOrder = 'desc';
        break;
    case 'desc':
        $sortOrder = 'asc';
        break;
}




$sumos = [];
foreach ($projects as $project) {
    $indeksas = $project['year'];
    
    if (!isset($sumos[$indeksas])) {
        $sumos[$indeksas] = 0;
    }
    
    $sumos[$indeksas] += $project['price'];
}
ksort($sumos);

if (isset($_POST['projects'])) {
    $pasirinktiProjektai = $_POST['projects'];
    // skaiciuosim suma
    $suma = 0;
    foreach ($projects as $project) {        
        if (in_array($project['id'], $pasirinktiProjektai)) {
            $suma +=  $project['price'];
        }
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Projektai</title>
</head>
<body>
    
    <main role="main" class="container">
        <?php if (isset($suma)) { ?>
        <p>
            Pasirinktu projektu suma yra: <?php echo round($suma / 100, 2); ?> Eur
        </p>
        <?php } ?>
        
        <form method="POST">
            <table class="table table-striped">
                <caption>Vykdomi projektai</caption>
                <thead>
                  <tr>
                      <th></th>
                      <th><a href="?sortBy=short_name&sortOrder=<?php echo $sortOrder; ?>">Sutrumpinimas</a></th>
                      <th><a href="?sortBy=year&sortOrder=<?php echo $sortOrder; ?>">Metai</a></th>
                      <th><a href="?sortBy=program&sortOrder=<?php echo $sortOrder; ?>">Programa</a></th>
                      <th><a href="?sortBy=price&sortOrder=<?php echo $sortOrder; ?>">Suma</a></th>
                  </tr>
                </thead>

                <tbody>
                  <?php foreach ($projects as $project) { ?>
                  <tr>
                      <td>
                          <input type="checkbox" name="projects[]" value="<?php echo $project['id']; ?>" />
                      </td>
                      <td><?php echo $project['short_name']; ?></td>
                      <td><?php echo $project['year']; ?></td>
                      <td><?php echo $project['program']; ?></td>
                      <td><?php echo round($project['price'] / 100, 2); ?> Eur</td>
                  </tr>
                  <?php } ?>
                </tbody>             
            </table>
            <button type="submit" class="btn btn-primary">Skaičiuoti</button>
        </form>
               
        <table class="table table-striped">
            <caption>Pajamos</caption>
            <thead>
              <tr>
                  <?php foreach ($sumos as $metai => $suma) { ?>
                  <th><?php echo $metai; ?></th>
                  <?php } ?>
              </tr>
              <tr>
                  <?php foreach ($sumos as $suma) { ?>
                  <td><?php echo round($suma / 100, 2); ?> Eur</td>
                  <?php } ?>
              </tr>
            </thead>          
        </table>
    </main>      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>