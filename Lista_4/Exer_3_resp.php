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
            $texto1 = $_POST['texto1'];
            $texto2 = $_POST['texto2'];
            if (strpos($texto1, $texto2) !== false)
            {
                echo "<p>A palavra $texto2 está contida em $texto1.</p>";
            }
            else
            {
                echo "<p>A palavra $texto2 não está contida em $texto1.</p>";
            }    
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
