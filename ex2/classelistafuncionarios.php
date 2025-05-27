<?php

require_once 'Node.php';
require_once 'Funcionario.php';

class ListaFuncionario {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    // Inserir no início
    public function inserirInicio($funcionario) {
        $novo = new Node($funcionario);
        $novo->next = $this->head;
        $this->head = $novo;
    }

    // Inserir no fim
    public function inserirFim($funcionario) {
        $novo = new Node($funcionario);
        if ($this->head == null) {
            $this->head = $novo;
        } else {
            $atual = $this->head;
            while ($atual->next != null) {
                $atual = $atual->next;
            }
            $atual->next = $novo;
        }
    }

    // Buscar por nome
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

    // Remover do início
    public function removerInicio() {
        if ($this->head == null) {
            echo "Lista vazia.\n";
        } else {
            $this->head = $this->head->next;
        }
    }

    // Remover do fim
    public function removerFim() {
        if ($this->head == null) {
            echo "Lista vazia.\n";
        } elseif ($this->head->next == null) {
            $this->head = null;
        } else {
            $atual = $this->head;
            while ($atual->next->next != null) {
                $atual = $atual->next;
            }
            $atual->next = null;
        }
    }

    // Mostrar toda a lista
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
