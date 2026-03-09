<?php

require_once "Controller/BibliotecaController.php";

$bibliotecaController = new BibliotecaController();
$route = $_GET["route"] ?? '';

switch ($route){
    case 'biblioteca/telaCadastro':
        $bibliotecaController->telaCadastro();
        break;

    case 'biblioteca/salvar':
        $bibliotecaController->cadastrar();
        break;
    
    case 'biblioteca/listar':
        $bibliotecaController->listarLivros();
        break;

    case 'biblioteca/telaEditar':
        $bibliotecaController->telaEditar();
        break;

    case 'biblioteca/atualizar':
        $bibliotecaController->atualizar();
        break;

    case 'biblioteca/excluir':
        $bibliotecaController->excluir();
        break;

    default:
        echo "Página não encontrada";
        break;
}

?>