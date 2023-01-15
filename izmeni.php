<?php
/** @var DBBroker $db */
$db = include "init.php";

$prik = trim($_POST['prik']);
$sala = trim($_POST['sala']);

$uspesno = $db->promeniSalu($prik, $sala);

if($uspesno){
    echo "Uspesno izmenjena sala prikazivanja!";
}else{
    echo "Doslo je do greske, pokusajte ponovo!";
}