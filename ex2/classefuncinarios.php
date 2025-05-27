<?php

class Funcionario {
    public $nome;
    public $idade;
    public $telefone;
    public $salario;

    public function __construct($nome, $idade, $telefone, $salario) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->telefone = $telefone;
        $this->salario = $salario;
    }

    public function __toString() {
        return "Nome: $this->nome, Idade: $this->idade, Telefone: $this->telefone, Salário: R$ $this->salario";
    }
}

?>
