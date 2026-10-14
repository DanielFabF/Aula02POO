<?php

class Aluno{
    public string $nome;
    public float $nota1;
    public float $nota2;
    public float $media;

    public function __construct($valor1, $valor2, $valor3){
        $this->nome = $valor1;
        $this->nota1 = $valor2;
        $this->nota2 = $valor3;
        $this->media = $this->calcularMedia();
    }

    public function calcularMedia(){
        return ($this->nota1 + $this->nota2) / 2;
    }
}

$aluno1 = new Aluno('Daniel', 8, 9);
echo "<pre>";
print_r($aluno1);
echo "</pre>";


?>