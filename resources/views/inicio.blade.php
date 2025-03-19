<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        body {
            margin:0;
            padding: 0;
            background-color:rgb(255, 225, 202)
        }
        form {
            display:flex;
            justify-content:center;
            width:50%;
            background-color:red;
        }

    </style>
</head>
<body>
        <div class="box">
    <form action="/cadastrar-produto" method="POST">
    <h1>Produtos</h1>

    @csrf

    <label for="lblNome">Nome:</label>
    <input type="text" name="nome">
    <br><br>

    <label for="lblNome">Valor:</label>
    <input type="text" name="valor">
    <br><br>

    <label for="lblNome">Estoque:</label>
    <input type="text" name="estoque">
    <br><br>

    <button>Cadastrar</button>
    </form>
    </div>
</body>
</html>