<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="controller.php" method="post">
        <label for="usuario">Usuário</label>
        <br>
        <input type="text" name="usuario" id="usuario">
        <br>
        <label for="senha">Senha</label>
        <br>
        <input type="password" name="senha" id="senha">
        <br>
        <input type="hidden" name="acao" id="acao" value="entrar">
        <input type="submit" value="Entrar">
    </form>
</body>
</html>