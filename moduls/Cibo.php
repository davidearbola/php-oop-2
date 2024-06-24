<?php
class Cibo extends Prodotto
{
    public $peso;

    public function __construct($nome, $marca, $descrizione, $immagine, Categoria $categoria, $prezzo, $peso)
    {
        parent::__construct($nome, $marca, $descrizione, $immagine, $categoria, $prezzo);
        $this->peso = $peso;
    }
}
