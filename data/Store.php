<?php
include './moduls/Prodotto.php';
include './moduls/TipoProdotto.php';
include './moduls/CategoriaProdotto.php';

$prodotti = [
    new Prodotto(
        new TipoProdotto(
            'Giochi',
            'Pallina',
            'MONGE',
            'https://picsum.photos/200/300',
            'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        ),
        new CategoriaProdotto('Cani', '<i class="fa-solid fa-dog"></i>'),
        123456
    )
];
