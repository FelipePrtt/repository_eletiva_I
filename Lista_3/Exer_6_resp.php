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
            $val = (int)$_POST['val'] ?? 0;

            for ($i=1; $i <= $val; $i++)
            {
                echo "<p>$i</p>";
            }
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
