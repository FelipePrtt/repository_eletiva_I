<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 19 : Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercício 19</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            try{
                $qtde_dias = (double) $_POST['qtde_dias'] ?? 0;
               
                $horas = ($qtde_dias * 24);
                $minutos = ($qtde_dias * 1440);
                $segundos = ($qtde_dias * 86400);
                
                echo "<p>$qtde_dias dia(s) equivalem a $horas horas.</p>";
                echo "<p>$qtde_dias dia(s) equivalem a $minutos Minutos.</p>";
                echo "<p>$qtde_dias dia(s) equivalem a $segundos Segundos.</p>";

            } catch(Exception $e){
                echo "ERRO! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>