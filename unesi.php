<?php
/** @var DBBroker $db */
$db = include "init.php";

$film = trim($_POST['film']);
$sala = trim($_POST['sala']);
$dan = trim($_POST['dan']);

$uspesno = $db->unesiPrikazivanje($dan, $film, $sala);

if($uspesno){
    echo "Uspesno uneto prikazivanje!";
}else{
    echo "Doslo je do greske, pokusajte ponovo!";
}