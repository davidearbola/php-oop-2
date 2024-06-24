<?php
class Giochi extends Prodotto
{
    public $materiale;

    public function __construct($nome, $marca, $immagine, Categoria $categoria, $prezzo, $materiale)
    {
        parent::__construct($nome, $marca, $immagine, $categoria, $prezzo);
        $this->materiale = $materiale;
    }
}
