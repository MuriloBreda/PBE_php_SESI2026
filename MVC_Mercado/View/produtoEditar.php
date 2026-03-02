<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }

    body{
        background-color: #d2e2ff95;
    }

    h1{
        padding-top: 20px;
    }

    main{
        margin: auto;
        width: 500px;
        background-color: #507dca;
        text-align: center;
        border-radius: 10px;
    }

    form > input{
        width: 80%;
        border-radius: 5px;
        border: 1px black;
        padding: 5px;
        margin-bottom: 5px;
        transition: 0.5s;
    }

    form > input:hover{
        padding: 8px;
    }

    form > button{
        padding: 8px;
        font-size: 1.1em;
        font-family: serif;
        border-radius: 8px;
        border: 1px black;
        width: 25%;
        background-color: #3fd62e;
        transition: 0.3s;
    }

    form > button:hover{
        background-color: green;
        width: 40%;
    }

    main > a{
        margin: auto;
        text-decoration: none;
        color: black;
        background-color: #25389c;
        padding: 5px;
        border-radius: 5px;
        color: #d3d3d3;
        transition: 0.3s;
    }

    main > a:hover{
        padding: 8px;
    }
</style>
<body>
    <main>
        <h1>Editar usuário</h1>
        <br>
        <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
            <input type="text" name="id" value="<?= htmlspecialchars($_GET['id'])?>" disabled><br>
            <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome'])?>" required><br>
            <input type="number" name="qntd" value="<?= htmlspecialchars($produto['qntd'])?>" required><br>
            <input type="text" name="valor" value="<?= htmlspecialchars($produto['valor'])?>" required><br>
            <input type="date" name="validade" value="<?= htmlspecialchars($produto['validade'])?>" required><br><br>
            <button type="submit">Editar</button><br><br>
        </form>
        <a href="/PBE_php_SESI2026/MVC_Mercado/produto/listar">Ir para tela listar</
    </main>
    
</body>
</html>