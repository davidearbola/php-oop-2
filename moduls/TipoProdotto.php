<?php
class TipoProdotto
{
    public $tipo;
    public $nome;
    public $marca;
    public $immagine;
    public $descrizione;

    public function __construct($tipo, $nome, $marca, $immagine, $descrizione)
    {
        $this->tipo = $tipo;
        $this->nome = $nome;
        $this->marca = $marca;
        $this->immagine = $immagine;
        $this->descrizione = $descrizione;
    }
}
