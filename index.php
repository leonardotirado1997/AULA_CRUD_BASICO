<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>Cadastro de alunos</h1>
    <form action="cadastrar.php" method="POST">
        Nome
        <input type="text" name="nome">
        <br><br>
        Idade
        <input type="number" name="idade">
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <a href="listar.php">Ver alunos</a>
</body>

</html>