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
        function verificar_data(int $d, int $m, int $a):void{
            if (checkdate($m, $d, $a))
            {
                echo "<p>Data válida!</p>";
                echo "<p>$d / $m / $a</p>";
            }
            else
            {
                echo "<p>Data inválida!</p>";
            }  
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        try
        {
            $dia = (int) $_POST['dia'] ?? 0;
            $mes = (int) $_POST['mes'] ?? 0;
            $ano = (int) $_POST['ano'] ?? 0;

            echo verificar_data($dia, $mes, $ano);    
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
