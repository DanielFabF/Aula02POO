<?php

class ContaBancaria{
    public string $titular;
    public float $saldo;


    public function __construct($valor1, $valor2){
        $this->titular = $valor1;
        $this->saldo = $valor2;
    }

    public function depositar($valor1){
        $this->saldo += $valor1;
    }

    public function sacar($valor1){
        if($this->saldo > $valor1){
            $this->saldo -= $valor1;
        }else{
            echo "Impossivel sacar";
        }
    }

    public function exibirSaldo(){
        echo "<h1>" . "Titular: " . $this->titular . "  Saldo: " . $this->saldo;
    }
}


$conta1 = new ContaBancaria('Daniel Fabrício Rigoli Ferreira', 1000);
$conta1->depositar(500);
$conta1->sacar(1600);
$conta1->exibirSaldo();

?>