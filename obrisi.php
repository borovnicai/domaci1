<?php
/** @var DBBroker $db */
$db = include "init.php";

$prik = trim($_POST['prik']);

$uspesno = $db->obrisiPrikazivanje($prik);

if($uspesno){
    echo "Uspesno obrisano prikazivanje!";
}else{
    echo "Doslo je do greske, pokusajte ponovo!";
}