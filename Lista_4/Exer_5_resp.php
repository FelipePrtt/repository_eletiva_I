<?php
    declare(strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php
        function raiz_quadrada(float $base):float{
            $resp = sqrt($base);
            return $resp;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            try
            {
                $numero = (float) $_POST['numero'] ?? 0;
                
                $resultado = raiz_quadrada($numero);

                echo "<p>A raíz quadrada de $numero é $resultado.</p>";

            }catch (Exception $e)
            {
            echo "Erro:".$e->getMessage();
            }
        }
        
        
    ?>
</body>
</html>
