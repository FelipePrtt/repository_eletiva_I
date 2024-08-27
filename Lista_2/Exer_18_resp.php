<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 18 : Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercício 18</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            try{
                $capital = (double) $_POST['capital'] ?? 0;
                $juros = (double) $_POST['juros'] ?? 0;
                $tempo = (int) $_POST['tempo'] ?? 0;
               
                $rendimento = ($capital * pow((1 + ($juros/100)), $tempo));
                $total = ($capital + $rendimento);
                
                echo "<p>Lucro após $tempo meses de rediento -> R$ $rendimento</p>";
                echo "<p>Valor total em conta após $tempo meses -> R$ $total</p>";

            } catch(Exception $e){
                echo "ERRO! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>