<?php

include("protect.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        CONEXÃO FEITA COM SUCESSO.
    </h1>
    <!-- <p>Bem vindo,
        <?php echo $_SESSION['id']; ?>
    </p> -->

    Bem vindo ao Painel,
    <?php echo $_SESSION['nome']; ?> <br>

    Você está logado com o email:
    <?php echo $_SESSION['email']; ?>

    <button>
        <a href="index.php">Sair</a>
    </button>

</body>

</html>