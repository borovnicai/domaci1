<?php
/** @var DBBroker $db */
$db = include "init.php";

$film = trim($_GET['film']);
$sort = trim($_GET['sort']);

$priakzivanja = $db->vratiSvaPrikazivanjaPoFilmuISortirano($film, $sort);

/** @var Prikazivanje $prikazivanje */
foreach ($priakzivanja as $prikazivanje){
    ?>

    <div class="time_line">
        <p class="hiphop_text"><?= $prikazivanje->getFilm()->getNazivFilma() ?></p>
        <hr class="border_0">
        <p class="hiphop_text"><?= $prikazivanje->getDan() ?> (Sala: <?= $prikazivanje->getSala()->getNazivSale() ?> )</p>
    </div>
<?php
}