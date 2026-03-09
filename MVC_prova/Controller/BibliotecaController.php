<?php 

session_start();
require_once "./Model/BibliotecaModel.php";

class BibliotecaController{

    public function telaCadastro(){
        require "View/bibliotecaCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano = $_POST['ano'];
        $editora = $_POST['editora'];

        $biblioteca = new Biblioteca($titulo, $autor, $ano, $editora);
        $biblioteca->salvar();

        header('Location: /PBE_php_SESI2026/MVC_prova/biblioteca/telaCadastro');
        exit;
    }

    public function listarLivros(){
        $bibliotecas = Biblioteca::listar();
        echo "<pre>";
        print_r($bibliotecas);
        echo "</pre>";
        require 'View/bibliotecaListar.php';

    }

    public function telaEditar(){
        $biblioteca = Biblioteca::buscar($_GET['id']);
        require 'View/bibliotecaEditar.php';
    }

    public function atualizar(){
        $biblioteca = new Biblioteca($_POST['titulo'], $_POST['autor'], $_POST['ano'], $_POST['editora']);
        $biblioteca->atualizar($_GET['id']);
        header('Location: /PBE_php_SESI2026/MVC_prova/biblioteca/telaEditar?id='.($_GET['id']));
        exit;

    }

    public function excluir(){
        Biblioteca::excluir($_GET['id']);
        header('Location: /PBE_php_SESI2026/MVC_prova/biblioteca/listar');
        exit;
    }
}

?>