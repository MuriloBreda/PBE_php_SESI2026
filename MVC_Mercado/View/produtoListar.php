<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <header>
        <h1>Produtos</h1>
        <table border=1>
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
    </header>
    <a href="/PBE_php_SESI2026/MVC_Mercado/produto/telaCadastro">Voltar para tela de Cadastro de Produtos</a>
    
</body>
</html>

<?php

?>