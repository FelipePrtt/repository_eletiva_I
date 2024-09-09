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
        function verificar_contencao(string $tx1, string $tx2):void{
            if (strpos($tx1, $tx2) !== false)
            {
                echo "<p>A palavra $tx2 está contida em $tx1.</p>";
            }
            else
            {
                echo "<p>A palavra $tx2 não está contida em $tx1.</p>";
            } 
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        try
        {
            $texto1 = $_POST['texto1'];
            $texto2 = $_POST['texto2'];
            
            echo verificar_contencao($texto1, $texto2);
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
