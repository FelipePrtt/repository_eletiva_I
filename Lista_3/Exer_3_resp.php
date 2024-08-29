<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            try 
            {
                $valor_a = (int)$_POST['valor_a'] ?? 0;
                $valor_b = (int)$_POST['valor_b'] ?? 0;


                switch(true)
                {
                    case ($valor_a < $valor_b):
                        echo "Números diferentes: $valor_a, $valor_b";
                        break;
                    case ($valor_b < $valor_a):
                        echo "Números diferentes: $valor_b, $valor_a";
                        break;
                    case ($valor_b == $valor_a):
                        echo "Númers iguais: $valor_a";
                        break;
                } 
                
            } catch (Exception $e) 
            {
                echo ("Erro: $e");
            }
        }
    ?>
</body>
</html>
