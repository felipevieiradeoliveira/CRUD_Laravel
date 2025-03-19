<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>

    <form action="/cadastrar-produto" method="POST">

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
</body>
</html>