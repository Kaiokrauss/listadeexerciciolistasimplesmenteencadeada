<?php

require_once 'Node.php';
require_once 'Disciplina.php';

class ListaDisciplina {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    // Inserir ordenado pelo nome
    public function inserirOrdenado($disciplina) {
        $novo = new Node($disciplina);

        if ($this->head == null || strcasecmp($disciplina->nome, $this->head->data->nome) < 0) {
            $novo->next = $this->head;
            $this->head = $novo;
        } else {
            $atual = $this->head;
            while ($atual->next != null && strcasecmp($atual->next->data->nome, $disciplina->nome) < 0) {
                $atual = $atual->next;
            }
            $novo->next = $atual->next;
            $atual->next = $novo;
        }
    }

    // Buscar disciplina pelo nome
    public function buscar($nome) {
        $atual = $this->head;
        while ($atual != null) {
            if (strcasecmp($atual->data->nome, $nome) == 0) {
                return $atual->data;
            }
            $atual = $atual->next;
        }
        return null;
    }

    // Remover disciplina pelo nome
    public function remover($nome) {
        if ($this->head == null) {
            echo "Lista vazia.\n";
            return;
        }

        if (strcasecmp($this->head->data->nome, $nome) == 0) {
            $this->head = $this->head->next;
            echo "Disciplina removida.\n";
            return;
        }

        $atual = $this->head;
        while ($atual->next != null && strcasecmp($atual->next->data->nome, $nome) != 0) {
            $atual = $atual->next;
        }

        if ($atual->next == null) {
            echo "Disciplina não encontrada.\n";
        } else {
            $atual->next = $atual->next->next;
            echo "Disciplina removida.\n";
        }
    }

    // Mostrar lista de disciplinas
    public function mostrar() {
        if ($this->head == null) {
            echo "Lista vazia.\n";
        } else {
            $atual = $this->head;
            while ($atual != null) {
                echo $atual->data . "\n";
                $atual = $atual->next;
            }
        }
    }
}

?>
