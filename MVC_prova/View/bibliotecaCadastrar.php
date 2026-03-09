<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
</head>
<body>
    <a href="/PBE_php_SESI2026/MVC_prova/biblioteca/listar">Ir para tela listar</a>
    <form method="POST" action="salvar">
        <input type="text" name="titulo" placeholder="Título.." require>
        <input type="text" name="autor" placeholder="Autor.." require>
        <input type="number" name="ano" placeholder="Ano.." require>
        <input type="text" name="editora" placeholder="Editora.." require>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>