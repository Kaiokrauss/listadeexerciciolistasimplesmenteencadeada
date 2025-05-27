<?php

require_once 'ListaSimples.php';

$lista = new ListaSimples();

do {
    echo "\n====== Menu Lista Simplesmente Encadeada ======\n";
    echo "1 - Inserir no Início\n";
    echo "2 - Inserir no Fim\n";
    echo "3 - Remover do Início\n";
    echo "4 - Remover do Fim\n";
    echo "5 - Mostrar Lista\n";
    echo "0 - Sair\n";
    echo "Escolha uma opção: ";
    $opcao = intval(trim(fgets(STDIN)));

    switch ($opcao) {
        case 1:
            echo "Digite o valor a inserir no início: ";
            $valor = trim(fgets(STDIN));
            $lista->inserirInicio($valor);
            break;

        case 2:
            echo "Digite o valor a inserir no fim: ";
            $valor = trim(fgets(STDIN));
            $lista->inserirFim($valor);
            break;

        case 3:
            $lista->removerInicio();
            echo "Removido do início.\n";
            break;

        case 4:
            $lista->removerFim();
            echo "Removido do fim.\n";
            break;

        case 5:
            echo "Lista atual:\n";
            $lista->mostrarLista();
            break;

        case 0:
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
} while ($opcao != 0);

?>
