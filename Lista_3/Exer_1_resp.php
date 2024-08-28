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
                $n1 = (int)$_POST ['n1'] ??  0;
                $n2 = (int)$_POST ['n2'] ??  0;
                $n3 = (int)$_POST ['n3'] ??  0;
                $n4 = (int)$_POST ['n4'] ??  0;
                $n5 = (int)$_POST ['n5'] ??  0;
                $n6 = (int)$_POST ['n6'] ??  0;
                $n7 = (int)$_POST ['n7'] ??  0;

                $array = [$n1, $n2, $n3, $n4, $n5, $n6, $n7];

                $menor = (int) $n1;
                $menor_pos = (int) 1;

                for ($i = 1; $i <= 7; $i++){
                    if ($menor < $array[$i]){
                        $menor = $array[$i];
                        $meno_pos = $i;
                    }
                }

            }catch(Exception $e)
            {
                echo ("Erro: $e");
            }
        }
    ?>
</body>
</html>