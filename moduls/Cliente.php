<?php
class Cliente
{
    public $nome;
    public $cognome;
    public $email;
    public $carrello;

    public function __construct($nome, $cognome, $email)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->carrello = [];
    }

    public function addProdotto($elemento)
    {
        return $this->carrello[] = $elemento;
    }
}
