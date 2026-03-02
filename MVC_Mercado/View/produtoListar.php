<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<style>

    *{
        margin: 0px;
        padding: 0px;
    }

    body{
        background-color: #d2e2ff95;
    }

    header{
        margin: auto;
        width: 1000px;
        background-color: #507dca;
        text-align: center;
        border-radius: 10px;
    }

    header > h1{
        margin-bottom: 30px;
        padding-top: 20px;
    }

    table{
        margin: auto;
        
    }

    header > a{
        margin: auto;
        text-decoration: none;
        color: black;
        background-color: #25389c;
        padding: 5px;
        border-radius: 5px;
        color: #d3d3d3;
        transition: 0.3s;
    }

    header > a:hover{
        padding: 8px;
    }

</style>
<body>
    <header>
        <h1>Produtos Cadastrados</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Validade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produtos as $p): ?>
                    <tr>
                        <td><?= $p['nome'] ?></td>
                        <td><?= $p['qntd'] ?></td>
                        <td><?= $p['valor'] ?></td>
                        <td><?= $p['validade'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br><br>
        <a href="/PBE_php_SESI2026/MVC_Mercado/produto/telaCadastro">Voltar para tela de Cadastro de Produtos</a>
    </header>
    
    
</body>
</html>

<?php

?>