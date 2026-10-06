<?php

Class Aluno{
    private $nome;
    private $numero;
    private $nota1;
    private $nota2;
    private $nota3;

    function __construct($nome, $numero, $nota1, $nota2, $nota3){
        $this->nome= $nome;
        $this->numero= $numero;
        $this->nota1= $nota1;
        $this->nota2= $nota2;
        $this->nota3= $nota3;
    }

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function situacao(){
        return $this->calcularMedia() >= 10 ? "Aprovado" : "Reprovado";
    }

    public function apresentar() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Número: " . $this->numero . "<br>";
        echo "Média: " . $this->calcularMedia() . "<br>";
        echo "Situação: " . $this->situacao() . "<br><br>";
    }



}

 $aluno1 = new Aluno("Carlos", 12345, 12, 15, 9);
 $aluno2 = new Aluno("Ana", 67890, 8, 7, 6);
 $aluno3 = new Aluno("Pombal", 54321, 20, 20, 20);

    $aluno1->apresentar();
    $aluno2->apresentar();
    $aluno3->apresentar();

?>