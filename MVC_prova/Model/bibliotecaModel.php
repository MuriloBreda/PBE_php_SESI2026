<?php

require_once "./database/Database.php";

class Biblioteca{
    private $titulo;
    private $autor;
    private $ano;
    private $editora;

    public function __construct($titulo, $autor, $ano, $editora){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
        $this->editora = $editora;

    }

    public function salvar(){
        $pdo = Database::conectar();
        $sql = "INSERT INTO Livros (titulo, autor, ano, editora) VALUES (:titulo, :autor, :ano, :editora)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => $this->titulo, 'autor' => $this->autor, 'ano' => $this->ano, 'editora' => $this->editora]);
    }

    public static function listar(){
        $pdo = Database::conectar();
        $stmt = $pdo->query("SELECT * FROM Livros");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("SELECT * FROM Livros WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);

    }

    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE Livros SET titulo = :titulo. autor = :autor. ano = :ano. editora = :editora. WHERE id = :id");
        $stmt->execute(['id' => $id, 'titulo' => $this->titulo, 'autor' => $this->autor,'ano' => $this->ano, 'editora' => $this->editora]);
    }

    public static function excluir($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("DELETE FROM Livros WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}

?>