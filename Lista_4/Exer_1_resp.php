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
        function qtde_letras(string $palavra):int{
            $quantidade = strlen($palavra);
            return $quantidade;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        try
        {
            $palavra = $_POST['palavra'];
            $resp = qtde_letras($palavra);

            echo "<p>A palavra ''$palavra'' possui $resp letra(s).</p>";
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
