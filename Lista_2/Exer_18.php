<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="cointainer m-5">
    <h1>Exercicio 18</h1>
    <form action="Exer_18_resp.php" method="POST">
    <div class="row mt-4">
        <div class="col">
            <label class="form-label" for="capital">Informe seu capital</label>
            <div class="col-2">
                <input class="form-control" name="capital" id="capital">
            </div>
        </div>
    </div>
    <div class="row mt-4">
    <div class="col">
            <label class="form-label" for="juros">Informe o percentual de rendimento mensal</label>
            <div class="col-1">
                <input class="form-control" name="juros" id="juros">
            </div>
        </div>
    </div>
    <div class="row mt-4">
    <div class="col">
            <label class="form-label" for="tempo">Informe tempo da aplicação (em meses)</label>
            <div class="col-1">
                <input class="form-control" name="tempo" id="tempo">
            </div>
        </div>
    </div>
    <div class="row pt-3 mt-4">
            <div class="col">
                <button type="submite" class="btn btn-primary">Calcular juros simples</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>