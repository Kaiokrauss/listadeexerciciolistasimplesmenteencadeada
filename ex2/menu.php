<?php

require_once 'ListaFuncionario.php';

$lista = new ListaFuncionario();

do {
    echo "\n====== MENU FUNCIONÁRIOS ======\n";
    echo "1 - Inserir Funcionário no Início\n";
    echo "2 - Inserir Funcionário no Fim\n";
    echo "3 - Buscar Funcionário por Nome\n";
    echo "4 - Remover Funcionário do Início\n";
    echo "5 - Remover Funcionário do Fim\n";
    echo "6 - Mostrar Lista de Funcionários\n";
    echo "0 - Sair\n";
    echo "Escolha uma opção: ";
    $opcao = intval(trim(fgets(STDIN)));

    switch ($opcao) {
        case 1:
        case 2:
            echo "Nome: ";
            $nome = trim(fgets(STDIN));
            echo "Idade: ";
            $idade = intval(trim(fgets(STDIN)));
            echo "Telefone: ";
            $telefone = trim(fgets(STDIN));
            echo "Salário: ";
            $salario = floatval(trim(fgets(STDIN)));

            $funcionario = new Funcionario($nome, $idade, $telefone, $salario);
            if ($opcao == 1) {
                $lista->inserirInicio($funcionario);
            } else {
                $lista->inserirFim($funcionario);
            }
            break;

        case 3:
            echo "Digite o nome do funcionário para buscar: ";
            $nomeBusca = trim(fgets(STDIN));
            $resultado = $lista->buscar($nomeBusca);
            if ($resultado != null) {
                echo "Funcionário encontrado:\n";
                echo $resultado . "\n";
            } else {
                echo "Funcionário não encontrado.\n";
            }
            break;

        case 4:
            $lista->removerInicio();
            echo "Removido do início.\n";
            break;

        case 5:
            $lista->removerFim();
            echo "Removido do fim.\n";
            break;

        case 6:
            echo "Lista de Funcionários:\n";
            $lista->mostrar();
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
