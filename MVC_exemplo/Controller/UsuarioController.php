<?php 

session_start();
require_once "./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();

        //redirecionar ao depois de salvar
        header('Location: /PBE_php_SESI2026/MVC_exemplo/usuario/telaCadastro');
        exit;
    }

    public function listarUsuarios(){
        // :: usado para acessar metodos 'static'
        $usuarios = Usuario::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
        require 'View/usuarioListar.php';

    }

    public function telaEditar(){
        $usuario = Usuario::buscar($_GET['id']);
        require 'View/usuarioEditar.php';
    }

    public function atualizar(){
        $usuario = new Usuario($_POST['nome'], $_POST['email']);
        $usuario->atualizar($_GET['id']);
        header('Location: /PBE_php_SESI2026/MVC_exemplo/usuario/telaEditar?id='.($_GET['id']));
        exit;

    }
}

?>