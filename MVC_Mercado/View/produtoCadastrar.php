<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadsatro de Produtos</title>
</head>
<body>
    <main>
        <h1>Cadastro de Produto</h1>
        <form method="POST" action="salvar">
            <input type="text" name="nome" placeholder="Nome do Produto" require><br>
            <input type="text" name="qntd" placeholder="Quantidade de Produtos" require><br>
            <input type="text" name="valor" placeholder="Valor do Produto" require><br>
            <input type="date" name="validade" placeholder="Validade do Produto" require><br><br>
            <button type="submit" id="enviar">Enviar</button>
            <button type="reset" id="limpar">Limpar</button>
        </form>
    </main>
    <a href="/PBE_php_SESI2026/MVC_Mercado/produto/listar">Ir para tela Listar</a>
    
</body>
</html>