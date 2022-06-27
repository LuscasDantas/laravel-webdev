<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerador de textos</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="min-vh-100">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <div class="container mt-5 p-4 col-md-6" style="border-radius: 10px; background-color: lightblue;">
        <div class="d-flex justify-content-center">
            <h1>Gerador de textos</h1>
        </div>
        <hr>

        <form action="destino.php" method="POST">

            <div class="row">
                <label class="col-md-3" for="texto">Título da página:</label>
                <input type="text" class="form-control col-md-4" name="texto">
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="final">Final:</label>
                    <input type="number" class="form-control" name="final">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="incremento">Incremento:</label>
                    <input type="number" class="form-control" name="incremento">
                </div>
            </div>

            <div class="row mt-3 d-flex">
                <button type="submit" class="btn btn-success col-md-4">
                    Enviar
                </button>
            </div>
        </form>
    </div>
        
</body>

</html>