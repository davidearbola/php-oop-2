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

<body class="bg-dark">
    <div class="w-75 mx-auto mt-5">
        <div class="row">
            <?php foreach ($prodotti as $prodotto) { ?>
                <div class="col-4 p-2">
                    <div class="text-bg-light rounded p-2">
                        <img src="<?= $prodotto->immagine ?>" class="w-100">
                        <h5><?= $prodotto->nome ?></h5>
                        <span><?= $prodotto->marca ?></span><br>
                        <span><?= $prodotto->prezzo ?></span><br>
                        <span><?= $prodotto->categoria->nome . " " . $prodotto->categoria->icona ?></span><br>
                        <?php if ($prodotto instanceof Cibo) { ?>
                            <span>Gruppo: Cibo per <?= $prodotto->categoria->nome ?></span>
                        <?php } elseif ($prodotto instanceof Giochi) { ?>
                            <span>Gruppo: Giochi per <?= $prodotto->categoria->nome ?></span>
                        <?php } elseif ($prodotto instanceof Cucce) { ?>
                            <span>Gruppo: Cucce per <?= $prodotto->categoria->nome ?></span>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>