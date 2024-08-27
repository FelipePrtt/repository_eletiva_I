<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php
        if ($server ['REQUEST_METHOD'] == "POST")
        {
            try
            {
                $valor = (int)$_POST ['valor'] ??  0;
                if ($valor > 0)
                    echo "Valor Positivo";
                elseif ($valor < 0)
                    echo "Valor Negativo";
                else
                    echo "Valor igual a zero";
            }catch(Exception $e)
            {
                echo ("Erro: $e");
            }
        }
    ?>
</body>
</html>