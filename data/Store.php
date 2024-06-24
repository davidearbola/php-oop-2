<?php
include './moduls/Prodotto.php';
include './moduls/Categoria.php';
include './moduls/Cibo.php';
include './moduls/Giochi.php';
include './moduls/Cucce.php';

$categoriaCani = new Categoria('Cani', '<i class="fa-solid fa-dog"></i>');
$categoriaGatti = new Categoria('Gatti', '<i class="fa-solid fa-cat"></i>');

$prodotti = [
    new Cibo(
        'Monge Natural Superpremium Adult All Breeds con Salmone',
        'MONGE',
        'https://arcaplanet.vtexassets.com/arquivos/ids/301605/monge-natural-superpremium-adult-all-breeds-con-salmone-10069078--1-.jpg?v=638518936103200000',
        $categoriaCani,
        '49,99€',
        '12 KG'
    ),
    new Cibo(
        'Natural Trainer Gatto Sterilised Salmone',
        'Natural Trainer',
        'https://arcaplanet.vtexassets.com/arquivos/ids/299364/natural-trainer-gatto-sterilised-salmone-10112328--1-.jpg?v=638482560030700000',
        $categoriaGatti,
        '55,95€',
        '10 KG'
    ),
    new Giochi(
        'Peluche Scoiattolo Striato',
        'TRIXIE',
        'https://arcaplanet.vtexassets.com/arquivos/ids/217805/https---www.arcaplanet.it-media-catalog-product--t-r-trixie-scoiattolo-striato-in-peluche-tric85.jpg?v=637454593279430000',
        $categoriaCani,
        '5,95€',
        'Peluche'
    ),
    new Giochi(
        'Pallina per Gatto in Peluche Bianca',
        'YES',
        'https://arcaplanet.vtexassets.com/arquivos/ids/264138/pallina-gatto-peluche-bianca1.jpg?v=637701609472800000',
        $categoriaGatti,
        '0,59€',
        'Peluche'
    ),
    new Cucce(
        'Cuccia Rettangolare Calliope Arancio',
        'LOVEDI',
        'https://arcaplanet.vtexassets.com/arquivos/ids/269643/lovedi-cuccia-rettangolare-calliope-arancio.jpg?v=637831039040800000',
        $categoriaCani,
        '19,47€',
        '60x80'
    ),
    new Cucce(
        'Cuccia Royal Blu',
        'Luna e Teo',
        'https://arcaplanet.vtexassets.com/arquivos/ids/276588/luna-e-teo-cuccia-ratto-royal-blu-con-cuscino.jpg?v=638034263386000000',
        $categoriaGatti,
        '26,34€',
        '40x40'
    )
];
