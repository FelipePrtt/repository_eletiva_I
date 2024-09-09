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
        function diferenca(DateTime $d1, DateTime $d2): int{
            $diferenca = $d1->diff($d2);
            return $diferenca->days;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            try
            {
                $data1 = new DateTime($_POST['data1']);
                $data2 = new DateTime($_POST['data2']);
                
                $resposta = diferenca($data1, $data2);

                echo "<p>A diferença entre as duas datas é de $resposta dia(s).</p>";

            }catch (Exception $e)
            {
            echo "Erro:".$e->getMessage();
            }
        }
    ?>
</body>
</html>
