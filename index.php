<?php
include __DIR__ . '/data/Store.php'
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

<body>
    <div class="position-absolute end-0 w-25 text-bg-dark p-2">
        <pre>
        <?= var_dump($prodotti[0]) ?>
        </pre>
    </div>
    <h2>Prodotto</h2>
    <img src="<?= $prodotti[0]->tipoProdotto->immagine ?>" alt="">
    <h3>Nome: <?= $prodotti[0]->tipoProdotto->nome ?></h3>
    <h4>Marca: <?= $prodotti[0]->tipoProdotto->marca ?></h4>
    <p>Descrizione: <?= $prodotti[0]->tipoProdotto->descrizione ?></p>
    <p>Tipo: <?= $prodotti[0]->tipoProdotto->tipo ?></p>
    <p>Categoria: <?= $prodotti[0]->categoria->nome . " " . $prodotti[0]->categoria->icona  ?></p>
    <p>Id Prodotto: <?= $prodotti[0]->idProdotto ?></p>
</body>

</html>