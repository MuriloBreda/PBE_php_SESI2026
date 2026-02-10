<?php 

session_start();
require_once "./Model/UsuarioModel.php";

class UsuarioController{

    public function telaCadastro(){
        session_destroy();
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome, $email);
        $usuario->salvar();
    }
}

?>