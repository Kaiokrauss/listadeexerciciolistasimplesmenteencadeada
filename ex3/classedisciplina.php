<?php

class Disciplina {
    public $nome;
    public $periodo;
    public $cargaHoraria;
    public $professor;

    public function __construct($nome, $periodo, $cargaHoraria, $professor) {
        $this->nome = $nome;
        $this->periodo = $periodo;
        $this->cargaHoraria = $cargaHoraria;
        $this->professor = $professor;
    }

    public function __toString() {
        return "Nome: $this->nome, Período: $this->periodo, Carga Horária: $this->cargaHoraria, Professor: $this->professor";
    }
}

?>
