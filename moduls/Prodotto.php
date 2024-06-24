<?php

class Prodotto
{
    public $tipoProdotto;
    public $categoria;
    public $idProdotto;

    public function __construct(TipoProdotto $tipoProdotto, CategoriaProdotto $categoria, $idProdotto)
    {
        $this->tipoProdotto = $tipoProdotto;
        $this->categoria = $categoria;
        $this->idProdotto = $idProdotto;
    }
}
