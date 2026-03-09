<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar Livro</h2>

    <a href="/PBE_php_SESI2026/MVC_prova/biblioteca/listar">Ir para tela listar</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
        <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled>
        <input type="text" name="titulo" value="<?= htmlspecialchars($Biblioteca['titulo'])?>" required>
        <input type="text" name="autor" value="<?= htmlspecialchars($Biblioteca['autor'])?>" required>
        <input type="number" name="ano" value="<?= htmlspecialchars($Biblioteca['ano'])?>" required>
        <input type="text" name="editora" value="<?= htmlspecialchars($Biblioteca['editora'])?>" required>
        <button type="submit">Editar</button>
    </form>
    
</body>
</html>