<div class="col-4 p-2">
    <div class="text-bg-light rounded p-2">
        <img src="<?= $prodotto->immagine ?>" class="w-100">
        <h5><?= $prodotto->nome ?></h5>
        <span><?= $prodotto->marca ?></span><br>
        <span><?= $prodotto->prezzo ?></span><br>
        <span><?= $prodotto->categoria->nome . " " . $prodotto->categoria->icona ?></span><br>
        <?php if ($prodotto instanceof Cibo) { ?>
            <span>Peso: <?= $prodotto->peso ?></span><br>
            <span>Categoria: Cibo per <?= $prodotto->categoria->nome ?></span>
        <?php } elseif ($prodotto instanceof Giochi) { ?>
            <span>Materiale: <?= $prodotto->materiale ?></span><br>
            <span>Categoria: Giochi per <?= $prodotto->categoria->nome ?></span>
        <?php } elseif ($prodotto instanceof Cucce) { ?>
            <span>Dimensione: <?= $prodotto->dimensione ?></span><br>
            <span>Categoria: Cucce per <?= $prodotto->categoria->nome ?></span>
        <?php } ?>
    </div>
</div>