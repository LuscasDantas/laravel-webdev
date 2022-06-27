<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enciclopedia</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="min-vh-100">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <?php

        $escolha = $_GET['escolha'];
        
        $img = $_GET['img'];

    ?>

    <div class="container mt-5 p-4 col-md-10" style="border-radius: 10px; background-color: lightblue;">
        <div class="d-flex justify-content-center">
            <h1>Enciclopédia Animal</h1>
        </div>
            <hr>
        <div class="row">
            <?php

            if($escolha == 'onca'){
                echo "<h4>Você clicou na onça</h4>";
                echo "<h5>A onça pintada é o maior felino da América Latina</h5>";
                echo "<img class=mt-3 src= $img>";
                    
            }

            if($escolha == 'salsicha'){
                echo "<h4>Você clicou no salsicha</h4>";
                echo "<h5>O cachorro salsicha foi e ainda é o cão mais utilizado como caçador</h5>";
                echo "<img class=mt-3 src= $img>";
            }

            if($escolha == 'harpia'){
                echo "<h4>Você clicou na harpia</h4>";
                echo "<h5>A harpia é a maior ave de rapina do mundo, chegando a uma envergadura de 2,5 metros e podendo pesar até 9 quilos</h5>";
                echo "<img class=mt-3 src= $img>";
            }

            if($escolha == 'gato'){
                echo "<h4>Você clicou no gato rebaixado</h4>";
                echo "<h5>Gato Munchkin: <strong>rebaixar é arte, raspar faz parte</strong></h5>";
                echo "<img class=mt-3 src= $img>";
            }

            ?>
         
        </div>
    </div>
</body>

</html>