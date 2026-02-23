<?php 

session_start();
require_once "./Model/produtoModel.php";

class ProdutoController{

    public function telaCadastro(){
        require "View/produtoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $qntd = $_POST['qntd'];
        $valor = $_POST['valor'];
        $validade = $_POST['validade'];

        $produto = new Produto($nome, $qntd, $valor, $validade);
        $produto->salvar();

        //redirecionar ao depois de salvar
        header('Location: /PBE_php_SESI2026/MVC_Mercado/produto/telaCadastro');
        exit;
    }

    public function listarProdutos(){
        // :: usado para acessar metodos 'static'
        $produtos = Produto::listar();
        // echo "<pre>";
        // print_r($produtos);
        // echo "</pre>";
        require 'View/produtoListar.php';

    }
}

?>