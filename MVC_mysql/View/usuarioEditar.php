<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar usuário</h2>

    <a href="/PBE_php_SESI2026/MVC_mysql/usuario/listar">Ir para tela listar</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="nome" value="<?= htmlspecialchars($usuario['nome'])?>" required>
        <input type="email" name="email" value="<?= htmlspecialchars($usuario['email'])?>" required>
        <button type="submit">Editar</button>
    </form>
    
</body>
</html>