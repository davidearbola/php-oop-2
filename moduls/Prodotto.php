<?php

class Prodotto
{
    public $tipoProdotto;
    public $categoria;
    public $idProdotto;

    public function __construct(TipoProdotto $tipo, CategoriaProdotto $categoria, $idProdotto)
    {
        $this->tipoProdotto = $tipo;
        $this->categoria = $categoria;
        $this->idProdotto = $idProdotto;
    }
}
