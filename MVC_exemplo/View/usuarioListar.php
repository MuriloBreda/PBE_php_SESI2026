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
                <?php foreach($usuarios as $u): ?>
                    <tr>
                        <td><?= $u['nome'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td>Próxima Aula</td>
                    </tr>
                <?php endforeach; ?>
            </thead>

        </table>
    </header>
    
</body>
</html>

<?php

?>