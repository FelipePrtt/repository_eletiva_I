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

            $cont = (int) 1;
            $soma = (int) 0;

            while($cont <= $val)
            {
                $soma += $cont;
                $cont ++;
            }
            echo "<p>Soma de todos os números de 1 até $val ---> $soma</p>";
        }catch (Exception $e)
        {
            echo "Erro:".$e->getMessage();
        }
    ?>
</body>
</html>
