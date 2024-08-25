<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 15 : Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercício 15</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            try{
                $altura = (double) $_POST['altura'] ?? 0;
                $peso = (double) $_POST['peso'] ?? 0;
               
                $imc = number_format($peso / ($altura * $altura),2);
                
                if ($imc > 39.9){
                    echo "<p>Obesidade Grave, seu IMC é de {$imc}.</p>";
                } else if(($imc > 29.9) && ($imc <= 39.9)){
                    echo "<p>Obesidade, seu IMC é de {$imc}</p>";
                } else if(($imc > 24.9) && ($imc <= 29.9)){
                    echo "<p>Sobrepesol, seu IMC é de {$imc}</p>";
                } else if(($imc > 18.5) && ($imc <= 24.9)){
                    echo "<p>Peso Normal, seu IMC é de {$imc}</p>";
                } else if(($imc > 17) && ($imc <= 18.5)){
                    echo "<p>Abaixo do peso, seu IMC é de {$imc}</p>";
                } else if ($imc < 16.9){
                    echo "<p>Muito abaixo do peso, seu IMC é de {$imc}</p>";
                }
            } catch(Exception $e){
                echo "ERRO! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>