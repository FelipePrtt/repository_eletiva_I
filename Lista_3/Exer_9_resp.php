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

            $resultado = 1;

            for ($i = $fat; $i > 0; $i--)
            {
                $resultado *= $i; 
            }
            echo "<p>Fatorial de $fat é $resultado.</p>";
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
