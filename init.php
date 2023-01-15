<?php

ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");

include 'Film.php';
include 'DomenFactory.php';
include 'FilmFactory.php';
include 'Sala.php';
include 'SalaFactory.php';
include 'Prikazivanje.php';
include 'PrikazivanjeFactory.php';

include 'DBBroker.php';

$db = new DBBroker();

return $db;
