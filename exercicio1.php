<?php

class Livro{
    public string $titulo;
    public string $autor;
    public int $paginas;
    public string $anoPublicacao;

    public function __construct($titulo, $autor, $paginas, $ano = 'Desconhecido'){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->anoPublicacao = $ano;
    }

    public function exibirDados(){
        echo "<h1>" . "Título: " . $this->titulo . " Autor: " . $this->autor . " Paginas: " . $this->paginas . " Ano de Publicação: "
        . $this->anoPublicacao . "</h1> <br><br><br>";
    }

}

$livro1 = new Livro('Dom casmurro', 'Machado de Assis', 256);
$livro1->exibirDados();

$livro1 = new Livro('Vidas Secas', 'Graciliano Ramos', 135, 1938);
$livro1->exibirDados();



?>