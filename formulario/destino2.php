<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destino 2</title>

</head>

<body>


    <h1>Destino</h1>
    <hr>
    <?php

        $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
        $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_EMAIL);

        echo "<p>Nome Informado: $nome<br>Email: $email</p>";
    ?>

    <p>
        <a href="destino2.php?nome=Lucas&email=teste@exemplo.com">Link do Lucas</a><br>
    </p>
    <p>
        <a href="destino2.php?nome=Jose da Silva&email=josedasilva@example.com">Link do José</a><br>
    </p>
    <p>
        <a href="destino2.php?nome=<?= $nome ?>&email=<?= $email ?>&cor=red">Vermelho</a><br>
    </p>
    <p>
        <a href="destino2.php?nome=<?= $nome ?>&email=<?= $email ?>&cor=green">Verde</a><br>
    </p>
    <p>
        <a href="destino2.php?nome=<?= $nome ?>&email=<?= $email ?>&cor=lightblue">Azul</a>
    </p>

    <style>
        body{
            background-color:<?= $cor; ?>;
        }
    </style>

</body>
</html>