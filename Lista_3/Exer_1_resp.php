<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        try
        {
            $menor = PHP_INT_MAX;
            $menor_pos = 0;

            for ($i=1; $i <= 7; $i++)
            {
                $valor = $_POST["n$i"];
                if ($valor < $menor)
                {
                    $menor = $valor;
                    $menor_pos = $i;
                }

            }
            echo "<p>Menor valor --->$menor</p>";
            echo "<p>Posição do menor valor --->$menor_pos</p>";
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
