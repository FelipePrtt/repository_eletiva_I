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
            $fat = (int)$_POST['fat'] ?? 0;

            $resultado = 0;

            for ($i = $fat; $i <= $fat; $i - 1)
            {
                $resultado = $resultado ($fat * $i); 
            }
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
