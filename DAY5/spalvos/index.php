<?php
$spalvos = [
    "BlanchedAlmond" => "#ffebcd",
    'CadetBlue' => '#5f9ea0',
    'BurlyWood'  => '#deb887',
    'DarkOliveGreen'  => '#556b2f',
    'HotPink'  => '#ff69b4',
    'PapayaWhip'  => '#ffefd5',
];
?>
<table style="border: 1px black solid;">
     <tr>
    <th style="border: 1px black solid;">Color name</th>
    <th style="border: 1px black solid;">Hex CODE</th>
  </tr>
    <?php
    foreach ($spalvos as $spalva => $kodas) {
    ?>
    <tr>
        <td style="border: 1px black solid; background-color: <?php echo $spalva; ?>">
            <?php echo $spalva; ?>
        </td>
        <td style="border: 1px black solid; background-color: <?php echo $kodas; ?>">
            <?php echo $kodas; ?>
        </td>
    </tr>
    <?php  
    }
    ?>
</table>