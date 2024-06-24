<?php
class Cibo extends Prodotto
{
    public $peso;

    public function __construct($nome, $marca, $immagine, Categoria $categoria, $prezzo, $peso)
    {
        parent::__construct($nome, $marca, $immagine, $categoria, $prezzo);
        $this->peso = $peso;
    }
}
