<?php
    if (isset($_POST['enviar'])) {

      
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($mysqli, "INSERT INTO pet_user(nome, email, senha) VALUES ('$nome', '$email', '$senha')"); 
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Cadastre-se</title>
</head>

<body>
    <div class="login">
        <h1 class="titulo">Preencha os campos abaixo</h1>

        <form action="http://localhost/projeto/login/login.php" method="POST">
            <div class="login__campo">
                <label>Nome: </label>
                <input type="text" name="nome" placeholder="Informe seu nome" class="login__campo1">
            </div>

            <div class="login__campo">
                <label>E-mail: </label>
                <input type="email" name="email" placeholder="Informe seu E-mail" class="login__campo1">
                <label>Senha:</label>
                <input type="password" name="senha" placeholder="Informe sua senha" class="login__campo1">
            </div>

            <div class="login__campo">
                <label>Celular:</label>
                <input type="tel" placeholder="Informe seu telefone" class="login__campo1">
            </div>
            <input type="submit" name="enviar" id="enviar">

        </form>
        <button class="sair">
            <a href="/projeto" class="voltar">Voltar</a>
        </button>

    </div>
</body>

</html>