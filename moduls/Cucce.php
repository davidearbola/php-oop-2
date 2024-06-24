<?php
class Cucce extends Prodotto
{
    public $dimensione;

    public function __construct($nome, $marca, $immagine, Categoria $categoria, $prezzo, $dimensione)
    {
        parent::__construct($nome, $marca, $immagine, $categoria, $prezzo);
        $this->dimensione = $dimensione;
    }
}
