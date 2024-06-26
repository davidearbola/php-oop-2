<?php

class Prodotto
{
    public $nome;
    public $marca;
    public $immagine;
    public $categoria;
    public $prezzo;

    public function __construct($nome, $marca, $immagine, Categoria $categoria, $prezzo)
    {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
    }
}
