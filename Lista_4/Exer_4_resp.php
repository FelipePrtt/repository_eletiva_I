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
            $dia = $_POST['dia'] ?? 0;
            $mes = $_POST['mes'] ?? 0;
            $ano = $_POST['ano'] ?? 0;

            if (checkdate($mes, $dia, $ano))
            {
                echo "<p>$dia / $mes / $ano</p>";
            }
            else
            {
                echo "<p>Data inválida!</p>";
            }    
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
