<?php
include('login/conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";

    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM pet_user WHERE email = '$email' AND senha = '$senha' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        //se quantidade for =1 ele vai logar
        if ($quantidade == 1) {

            $pet_user = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $pet_user['id'];
            $_SESSION['nome'] = $pet_user['nome'];
            $_SESSION['email'] = $pet_user['email'];

            header("Location:home.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <div class="main-login">
            <div class="left-login">
                <h1>Faça o Login <br>E cadastre o seu Pet </h1>
                <img src="dog.svg" class="left-login-image" alt="animação da tela">
            </div>

            <div class="right-login">
                <div class="card-login">
                    <h1>Login</h1>
                    <div class="textfield">
                        <label for="email">Usuário:</label>
                        <input type="email" name="email" placeholder="Usuário" required>
                    </div>
                    <div class="textfield">
                        <label for="Senha">Senha:</label>
                        <input type="password" name="senha" placeholder="Senha" required>
                    </div>
                    <button class="btn-login">Entrar</button>
                    <div class="senha">
                        <a href="#" class="senha__reset" id="forgot-pass"> Esqueceu a sua senha? </a>
                    </div>

                    <a href="/projeto/login/login.php">
                        <button class="btn-login cadastre">Criar nova conta</button>
                    </a>

                </div>
            </div>
        </div>
    </form>
</body>

</html>