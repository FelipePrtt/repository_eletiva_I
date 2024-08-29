<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 3</h1>
    <form action="Exer_3_resp.php" method="POST" class="m-4">
        <div class="row mt-4">
            <div class="col">
                <label for="valor_a" class="form-label">Informe o valor A</label>
                <div class="col-1">
                    <input type="number" id="valor_a" name="valor_a" placeholder="Valor A" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <label for="valor_b" class="form-label">Informe o valor B</label>
                <div class="col-1">
                    <input type="number" id="valor_b" name="valor_b" placeholder="Valor B" class="form-control">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-2">
                <button type="submite" class="btn btn-primary">Verificar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>