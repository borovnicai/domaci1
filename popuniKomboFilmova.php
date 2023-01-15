<?php
/** @var DBBroker $db */
$db = include "init.php";

if(isset($_GET['sviFilmovi'])){
    $filmovi = $db->vratiFilmove();
}else{
    $filmovi = $db->vratiFilmoveKojiSePrikazujuUBuducnosti();
}



/** @var Film $film */
foreach ($filmovi as $film){
    ?>

    <option value="<?= $film->getFilmID()?>"><?= $film->getNazivFilma()?></option>
<?php
}