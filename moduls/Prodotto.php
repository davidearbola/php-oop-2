<?php

class Prodotto
{
    public $nome;
    public $marca;
    public $descrizione;
    public $immagine;
    public $categoria;
    public $prezzo;

    public function __construct($nome, $marca, $descrizione, $immagine, Categoria $categoria, $prezzo)
    {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->descrizione = $descrizione;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->prezzo = $prezzo;
    }

    // public function getNome()
    // {
    //     return $this->nome;
    // }

    // public function getMarca()
    // {
    //     return $this->marca;
    // }

    // public function getDescrizione()
    // {
    //     return $this->descrizione;
    // }

    // public function getImg()
    // {
    //     return $this->immagine;
    // }

    // public function getCategoria()
    // {
    //     return $this->categoria;
    // }

    // public function getPrezzo()
    // {
    //     return $this->prezzo;
    // }
}
