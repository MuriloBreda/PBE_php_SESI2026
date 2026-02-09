<?php
session_start();

class aluno {
    private $nome;
    private $sobrenome;
    private $nota;
    private $data;

    public function __construct($nome, $sobrenome, $nota, $data) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->nota = $nota;
        $this->data = $data;
    }

    public function calcularIdade() {
        $nascimento = new DateTime($this->data);
        $hoje = new DateTime();
        return $hoje->diff($nascimento)->y;
    }

    public function salvar() {
        if (!isset($_SESSION['alunos'])) {
            $_SESSION['alunos'] = [];
        }

        $_SESSION['alunos'][] = [
            'nome' => $this->nome,
            'sobrenome' => $this->sobrenome,
            'nota' => $this->nota,
            'data' => $this->data,
            'idade' => $this->calcularIdade(),
        ];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aluno = new aluno($_POST['nome'], $_POST['sobrenome'], $_POST['nota'], $_POST['data']);
    $aluno->salvar();
}



if(isset($_GET['reset'])){
    session_destroy();
    
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<style>
    body{
        margin: 0px;
        padding: 0px;
    }

    header > h1{
        text-align: center;
    }

    main > form{
        margin: auto;
        background-color: #f2f2f2;
        padding: 15px;
        border-radius: 8px;
        width: 300px;
    }

    main > form > input{
        width: 100%;
        margin-bottom: 10px;
    }

    #cadastrar{
        background-color: green;
        color: white;
        padding: 5px 10px;

    }

    #reset{
        background-color: red;
        color: white;
        padding: 5px 10px;

    }

    main > table{
        margin: auto;
        text-align: center;
    }

    main > h2, p{
        text-align:center;
    }

    #caixa{
        width: 350px;
        margin: auto;
        background-color:#f2f2f2;
        text-align: center;
        border-radius: 8px;
    }

    #caixa > h2{
        padding-top: 20px;
        margin-bottom: 0px;
    }

    #caixa > p{
        color: red;
        font-size: 1.3em;
        padding-bottom: 20px;
    }

</style>
<body>
    <header>
        <h1>Cadastro de Alunos</h1>
    </header>
    <main>
        <form action="#" method="POST">
            Nome:<br>
            <input type="text" name="nome" value="" required>
            <br>
            Sobrenome:<br>
            <input type="text" name="sobrenome" value="" required>
            <br>
            Nota:<br>
            <input type="num" name="nota" value="" required>
            <br>
            Data Nascimento:<br>
            <input type="date" name="data" value="" required>
            <br><br>    

            <button type="submit" id="cadastrar">Cadastrar</button>
            <button type="reset" id="reset">Limpar</button>
        </form>
        <br>
        <?php if(isset($_SESSION['alunos'])): ?>
        <table border=1>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Nota</th>
                    <th>Data Nascimento</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['alunos'] as $aluno): ?>
                <tr>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['sobrenome'] ?></td>
                    <td><?= $aluno['nota'] ?></td>
                    <td><?= date('d/m/Y', strtotime($aluno['data'])) ?></td>
                    <td><?= $aluno['idade'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div id="caixa">
            <h2>Média dos Alunos:</h2>
            <?php $notas = 0; ?>
            <?php foreach ($_SESSION['alunos'] as $alunos):
                $notas += $alunos['nota'];
                $media = $notas / count($_SESSION['alunos']);

                ?>
            <?php endforeach; ?>
            <p><?= $media ?></p>
        </div>
        <?php endif; ?>
    </main>
</body>
</html>