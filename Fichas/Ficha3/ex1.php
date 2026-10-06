<?php

class Pessoa {
    private $nome;
    private $idade;

    public function __construct($nome, $idade){
        $this->nome= $nome;
        $this->idade= $idade;
    }

    public function apresentar() {
        echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.<br>";
    }
    

}

    $p1 = new Pessoa("João", 30);
    $p2 = new Pessoa("Maria", 25);

    $p1->apresentar();
    $p2->apresentar();
?>