<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <?php
        if ($_SERVER ['REQUEST_METHOD'] == "POST")
        {
            try
            {
                $n1 = (int)$_POST ['n1'] ??  0;
                $n2 = (int)$_POST ['n1'] ??  0;
                $n3 = (int)$_POST ['n1'] ??  0;
                $n4 = (int)$_POST ['n1'] ??  0;
                $n5 = (int)$_POST ['n1'] ??  0;
                $n6 = (int)$_POST ['n1'] ??  0;
                $n7 = (int)$_POST ['n1'] ??  0;

                $menor_pos = (int) 1;
                $menor = (int) $n1;
                
                

                for($i = 1; $i <= 7; $i++)
                {
                    $num_atual = ${"n$i"};

                        if ($num_atual < $menor)
                        {
                            $menor = $num_atual;
                            $menor_pos = $i;
                        }
                }
                
                echo "<p>O menor valor informado é $menor, e foi inserido na $menor_pos ° posição</p>";
            }
            
            catch(Exception $e)
            {
                echo ("Erro: $e");
            }
        }
    ?>
</body>
</html>