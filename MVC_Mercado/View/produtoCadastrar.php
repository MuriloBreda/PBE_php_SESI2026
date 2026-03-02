<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadsatro de Produtos</title>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }

    body{
        background-color: #d2e2ff95;
    }

    main {
        margin: auto;
        background-color: #507dca;
        width: 400px;
        height: 320px;
        text-align: center;
        border-radius: 10px;
    }

    main > h1{
        padding: 25px 0px 15px 0px;
    }

    main > a{
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
        padding: 10px;
        font-size: 1.1em;
        font-family: serif;
        border-radius: 8px;
        border: 1px black;
        width: 25%;
    }

    #enviar{
        background-color: #3fd62e;
        transition: 0.3s;
    }

    #limpar{
        background-color: red;
        transition: 0.3s;
    }

    #enviar:hover{
        width: 40%;
        background-color: green;
    }

    #limpar:hover{
        width: 40%;
        background-color: #ba0909;
    }


</style>
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
        <br>
        <a href="/PBE_php_SESI2026/MVC_Mercado/produto/listar">Ir para tela Listar</a>
    </main>
    
</body>
</html>