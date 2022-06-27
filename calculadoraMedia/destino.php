<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

<div class="container mt-5 p-4 col-md-6" style="border-radius: 10px; background-color: lightblue;">
        <div class="d-flex justify-content-center">
        <h1 class="mb-5">Resultado da média</h1>
    </div>
    <?php
    
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $media = ($nota1 + $nota2 + $nota3)/3;
    
    echo "<h3>A média do aluno é $media</h3";
    echo "<br>";

     if($media<4){
         echo "<p>O aluno está <span style= color:red;>reprovado</span></p>";
    }
    if($media>=4 && $media<6){
        echo "<p>O aluno está <span style= color:yellow;>de recuperação</span></p>";
    }
    if($media>=6){
        echo "<p>O aluno está <span style= color:green;>aprovado</span></p>";
    }

    ?>

</div>
</body>
</html>