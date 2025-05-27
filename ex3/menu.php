<?php

require_once 'ListaDisciplina.php';

$lista = new ListaDisciplina();

do {
    echo "\n====== MENU DISCIPLINAS ======\n";
    echo "1 - Inserir Disciplina (ordenado pelo nome)\n";
    echo "2 - Buscar Disciplina por Nome\n";
    echo "3 - Remover Disciplina por Nome\n";
    echo "4 - Mostrar Lista de Disciplinas\n";
    echo "0 - Sair\n";
    echo "Escolha uma opção: ";
    $opcao = intval(trim(fgets(STDIN)));

    switch ($opcao) {
        case 1:
            echo "Nome da Disciplina: ";
            $nome = trim(fgets(STDIN));
            echo "Período: ";
            $periodo = trim(fgets(STDIN));
            echo "Carga Horária: ";
            $carga = intval(trim(fgets(STDIN)));
            echo "Professor Responsável: ";
            $professor = trim(fgets(STDIN));

            $disciplina = new Disciplina($nome, $periodo, $carga, $professor);
            $lista->inserirOrdenado($disciplina);
            break;

        case 2:
            echo "Digite o nome da disciplina para buscar: ";
            $nomeBusca = trim(fgets(STDIN));
            $resultado = $lista->buscar($nomeBusca);
            if ($resultado != null) {
                echo "Disciplina encontrada:\n";
                echo $resultado . "\n";
            } else {
                echo "Disciplina não encontrada.\n";
            }
            break;

        case 3:
            echo "Digite o nome da disciplina para remover: ";
            $nomeRemove = trim(fgets(STDIN));
            $lista->remover($nomeRemove);
            break;

        case 4:
            echo "Lista de Disciplinas:\n";
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
