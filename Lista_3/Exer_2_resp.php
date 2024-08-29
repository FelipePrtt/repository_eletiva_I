<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
            try 
            {
                $n1 = (int)$_POST['n1'] ?? 0;
                $n2 = (int)$_POST['n2'] ?? 0;

                $soma = 0;

                for ($i = 0; $i < 1; $i++) 
                {
                    if ($n1 == $n2) 
                    {
                        $soma = ($n1 + $n2) * 3;
                        echo "Os números são iguais, o resultado é $soma";
                    } 
                    else 
                    {
                        $soma = $n1 + $n2;
                        echo "Os números não são iguais, o resultado é $soma.";
                    }  
                } 
                
            } catch (Exception $e) 
            {
                echo ("Erro: $e");
            }
        }
    ?>
</body>
</html>
