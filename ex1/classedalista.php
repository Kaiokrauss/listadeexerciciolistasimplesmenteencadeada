<?php

require_once 'Node.php';

class ListaSimples {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    // Inserir no início
    public function inserirInicio($valor) {
        $novoNo = new Node($valor);
        $novoNo->next = $this->head;
        $this->head = $novoNo;
    }

    // ✅ Inserir no Fim (Exercício 1)
    public function inserirFim($valor) {
        $novoNo = new Node($valor);
        if ($this->head == null) {
            $this->head = $novoNo;
        } else {
            $atual = $this->head;
            while ($atual->next != null) {
                $atual = $atual->next;
            }
            $atual->next = $novoNo;
        }
    }

    // ✅ Remover do Início (Exercício 1)
    public function removerInicio() {
        if ($this->head == null) {
            echo "Lista vazia!\n";
        } else {
            $this->head = $this->head->next;
        }
    }

    // ✅ Remover do Fim (Exercício 1)
    public function removerFim() {
        if ($this->head == null) {
            echo "Lista vazia!\n";
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

    // Mostrar a lista
    public function mostrarLista() {
        if ($this->head == null) {
            echo "Lista vazia.\n";
        } else {
            $atual = $this->head;
            while ($atual != null) {
                echo $atual->data . " -> ";
                $atual = $atual->next;
            }
            echo "NULL\n";
        }
    }
}

?>
