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
            $numero = (int)$_POST['numero'] ?? 0;
            echo "TABUADA DO $numero";
            for ($i = 1; $i <= 10; $i++)
            {
                $produto = $numero * $i;
                echo "<p>$numero X $i = $produto</p>";
            }          
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
