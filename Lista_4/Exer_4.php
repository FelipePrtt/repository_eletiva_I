<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 4</h1>
    <form action="Exer_4_resp.php" method="POST" class="m-4">
        <div class="row mt-4">
            <div class="col">
                <label for="dia" class="form-label">Informe o dia</label>
                <div class="col-1">
                    <input type="number" id="dia" name="dia" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <label for="mes" class="form-label">Informe o mês</label>
                <div class="col-1">
                    <input type="number" id="mes" name="mes" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <label for="ano" class="form-label">Informe o ano</label>
                <div class="col-1">
                    <input type="number" id="ano" name="ano" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>