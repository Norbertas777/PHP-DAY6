<?php
include "functions.php";
?>
<?php head('Darbuotojo informacija'); ?>

<div class="col-md-12">
    <h1>Vardas Pavardauskas</h1>
</div>
    
<div class="col-md-6">
    <p>
        <b>Pareigos: </b> <br /> Direktorius
    </p>
    <p>
        <b>Mėnesinė alga: </b> <br />500 EUR
    </p>

</div>
<div class="col-md-6">
    <p>
        <b>Telefonas: </b> <br /> +370 670 21276
    </p>
</div>

<div class="col-md-6">
    <h2>Mokesčiai</h2>

    <table class="table table-hover">
        <tr>
            <td>Priskaičiuotas atlyginimas „ant popieriaus“:</td>
            <td class="curr">500.00 EUR</td>
        </tr>
        <tr>
            <td>Pritaikytas NPD</td>
            <td class="curr">149.00 EUR</td>
        </tr>
        <tr>
            <td>Pajamų mokestis 15 %</td>
            <td class="curr">52.65 EUR</td>
        </tr>
        <tr>
            <td>Sodra. Sveikatos draudimas 6 %</td>
            <td class="curr">30 EUR</td>
        </tr>
        <tr>
            <td>Sodra. Pensijų ir soc. draudimas 3 %</td>
            <td class="curr">15 EUR</td>
        </tr>

        <tr class="info">
            <td>Išmokamas atlyginimas „į rankas“:</td>
            <td class="curr"><b>402.35 EUR</b></td>
        </tr>

        <tr>
            <td colspan="2"><b>Darbo vietos kaina</b></td>
        </tr>

        <tr>
            <td>Sodra 30.98 %:</td>
            <td class="curr">154.90 EUR</td>
        </tr>

        <tr>
            <td>Įmokos į garantinį fondą 0.2 % :</td>
            <td class="curr">1.00 EUR</td>
        </tr>
        <tr class="info">
            <td>Visa darbo vietos kaina :</td>
            <td class="curr"><b>655.90 EUR</b></td>
        </tr>
    </table>
</div>


<?php footer(); ?>