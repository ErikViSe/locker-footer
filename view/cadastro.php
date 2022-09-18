<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<form action="../controller/AlunoController.php" method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="sobrenome">Sobrenome</label>
    <input type="text" name="sobrenome" id="sobrenome">
    <label for="rm">RM</label>
    <input type="text" name="rm" id="rm">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email">
    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf">
    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha">

    <button type="submit" name="cadastrar">Cadastrar</button>
</form>
    
</body>
</html>