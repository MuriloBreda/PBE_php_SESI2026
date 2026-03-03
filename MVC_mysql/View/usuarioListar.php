<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <header>
        <h1>Usuários</h1>
        <table border=1>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $id => $u): ?>
                    <tr>
                        <td><?= $u['NOME'] ?></td>
                        <td><?= $u['EMAIL'] ?></td>
                        <td>
                            <a href="/PBE_php_SESI2026/MVC_mysql/usuario/telaEditar?id=<?= $u['ID'] ?>">Editar</a>

                            <a href="/PBE_php_SESI2026/MVC_mysql/usuario/excluir?id=<?= $u['ID'] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </header>
    <a href="/PBE_php_SESI2026/MVC_mysql/usuario/telaCadastro">Voltar para tela de Cadastro</a>
    
</body>
</html>

<?php

?>