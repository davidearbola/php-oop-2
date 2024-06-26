<?php

include __DIR__ . '/moduls/Cliente.php';
include __DIR__ . '/data/Store.php';

// inizio la sessione
session_start();



// se l'user non esiste ancora lo creo e imposto l'user di sessione come il cliente
if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = $user;
} else {
    $user = $_SESSION['user'];
}


// inizializzo il carrello della sessione come array se ancora non esiste
if (!isset($_SESSION['newCart'])) {
    $_SESSION['newCart'] = [];
}


// aggiungo il prodotto all'array di sessione e al carrello cliente
if (isset($_POST['index'])) {
    $indexProd = $_POST['index'];
    $_SESSION['newCart'][] = $prodotti[$indexProd];
    // aggiorno oggetto user
    $_SESSION['user'] = $user;
}
