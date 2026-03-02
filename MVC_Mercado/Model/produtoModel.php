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
        // retorna a lista de produtos
        return $_SESSION['produtos'] ?? [];
    }

    public static function buscar($id){
        // select * from produtos where id = $id; (caso tivesse usando BCD)
        return $_SESSION['produtos'][$id] ?? null;

    }

    public function atualizar($id){
        if(isset($_SESSION['produtos'][$id])){ //verificar se o produto existe
            $_SESSION['produtos'][$id] = [ //atualizar os novos dados
                'nome' => $this->nome,
                'qntd' => $this->qntd,
                'valor' => $this->valor,
                'validade' => $this->validade
            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION['produtos'][$id])){ //verifica se o produto existe
            unset($_SESSION['produtos'][$id]); //remove o produto
        }
    }
}

?>