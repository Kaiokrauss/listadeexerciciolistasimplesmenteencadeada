<?php

class Node {
    public $data;   // Armazena um objeto Funcionario
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

?>
