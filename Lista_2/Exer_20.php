<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="cointainer m-5">
    <h1>Exercicio 20</h1>
    <form action="Exer_20_resp.php" method="POST">
    <div class="row mt-4">
        <div class="col-5">
            <label class="form-label" for="distancia">Informe a distância percorrida (em km)</label>
            <div class="col-5">
                <input class="form-control" name="distancia" id="distancia">
            </div>
        </div>
        <div class="col-5
        ">
            <label class="form-label" for="tempo">Informe o tempo gasto (em horas)</label>
            <div class="col-5">
                <input class="form-control" name="tempo" id="tempo">
            </div>
        </div>
    </div>
    <div class="row pt-3 mt-4">
            <div class="col">
                <button type="submite" class="btn btn-primary">Calcular Vm</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>