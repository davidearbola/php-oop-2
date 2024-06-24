<?php
class Giochi extends Prodotto
{
    public $materiale;

    public function __construct($nome, $marca, $descrizione, $immagine, Categoria $categoria, $prezzo, $materiale)
    {
        parent::__construct($nome, $marca, $descrizione, $immagine, $categoria, $prezzo);
        $this->materiale = $materiale;
    }
}
