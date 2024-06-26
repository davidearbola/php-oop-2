<?php

include __DIR__ . '/session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shop</title>
</head>

<body class="bg-dark">

    <div class="w-75 mx-auto mt-5">
        <div class="row">
            <?php foreach ($prodotti as $indice => $prodotto) { ?>
                <?php include __DIR__ . '/partials/Card.php' ?>
            <?php } ?>
        </div>
        <div class="row">
            <h3 class="text-white">Carrello:</h3>
            <?php
            foreach ($_SESSION['newCart'] as $prodotto) {
                include __DIR__ . '/partials/CardCarrello.php';
            }
            ?>
        </div>
        <a href="reset.php" class="btn btn-danger">Svuota Carrello</a>
    </div>

</body>

</html>