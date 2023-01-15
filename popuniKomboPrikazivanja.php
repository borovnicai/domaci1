<?php
/** @var DBBroker $db */
$db = include "init.php";

$prikazivanja = $db->vratiSvaPrikazivanja();

/** @var Prikazivanje $prik */
foreach ($prikazivanja as $prik){
    ?>

    <option value="<?= $prik->getId()?>"><?= $prik->getFilm()->getNazivFilma() ?> (<?= $prik->getDan() ?>)</option>
<?php
}