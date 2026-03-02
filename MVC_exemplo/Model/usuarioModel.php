<?php
class Usuario{
    private $nome;
    private $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;

    }

    public function salvar(){
        if(!isset($_SESSION['usuarios'])){
            $_SESSION['usuarios'] = [];
        }

        $_SESSION['usuarios'][] = [
            'nome' => $this->nome,
            'email' => $this->email
        ];
    }

    public static function listar(){
        // retorna a lista de usuarios
        return $_SESSION['usuarios'] ?? [];
    }

    public static function buscar($id){
        // select * from usuarios where id = $id; (caso tivesse usando BCD)
        return $_SESSION['usuarios'][$id] ?? null;

    }

    public function atualizar($id){
        if(isset($_SESSION['usuarios'][$id])){ //verificar se o usuario existe
            $_SESSION['usuarios'][$id] = [ //atualizar os novos dados
                'nome' => $this->nome,
                'email' => $this->email
            ];
        }
    }

    public static function excluir($id){
        if(isset($_SESSION['usuarios'][$id])){ //verifica se o usuario existe
            unset($_SESSION['usuarios'][$id]); //remove o usuario
        }
    }
}

?>