<?php
class Produto{
    private $nome;
    private $qntd;
    private $valor;
    private $validade;

    public function __construct($nome, $qntd, $valor, $validade){
        $this->nome = $nome;
        $this->qntd = $qntd;
        $this->valor = $valor;
        $this->validade = $validade;

    }

    public function salvar(){
        if(!isset($_SESSION['produtos'])){
            $_SESSION['produtos'] = [];
        }

        $_SESSION['produtos'][] = [
            'nome' => $this->nome,
            'qntd' => $this->qntd,
            'valor' => $this->valor,
            'validade' => $this->validade
        ];
    }

    public static function listar(){
        // retorna a lista de usuarios
        return $_SESSION['produtos'] ?? [];
    }
}

?>