<?php
/** @var DBBroker $db */
$db = include "init.php";

$sale = $db->vratiSale();

/** @var Sala $sala */
foreach ($sale as $sala){
    ?>

    <option value="<?= $sala->getSalaID()?>"><?= $sala->getNazivSale()?></option>
<?php
}