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
        //Criação das funções
        function maiusculo(string $palavra):string{
            $resp = strtoupper($palavra);
            return $resp;
        }
        function minusculo(string $palavra):string{
            $resp = strtolower($palavra);
            return $resp;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        try
        {
            $palavra = $_POST['palavra'];
            $maiusculo = maiusculo($palavra);
            $minusculo = minusculo($palavra);

            echo "<p>$maiusculo.</p>";
            echo "<p>$minusculo.</p>";

        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
