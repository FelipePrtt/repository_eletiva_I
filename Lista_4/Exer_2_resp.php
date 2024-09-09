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
            $palavra = $_POST['palavra'];
            $maiusculo = strtoupper($palavra);
            $minusculo = strtolower($palavra);
            echo "<p>$maiusculo.</p>";
            echo "<p>$minusculo.</p>";

        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
