<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <header>
        <h1>Livros</h1>
        <table border=1>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano</th>
                    <th>Editora</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($bibliotecas as $id => $b): ?>
                    <tr>
                        <td><?= $b['TITULO'] ?></td>
                        <td><?= $b['AUTOR'] ?></td>
                        <td><?= $b['ANO'] ?></td>
                        <td><?= $b['EDITORA'] ?></td>
                        <td>
                            <a href="/PBE_php_SESI2026/MVC_prova/biblioteca/telaEditar?id=<?= $b['ID'] ?>">Editar</a>

                            <a href="/PBE_php_SESI2026/MVC_prova/biblioteca/excluir?id=<?= $b['ID'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </header>
    <a href="/PBE_php_SESI2026/MVC_prova/biblioteca/telaCadastro">Voltar para tela de Cadastro</a>
    
</body>
</html>

<?php

?>