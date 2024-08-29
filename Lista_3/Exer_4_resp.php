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
                $preco = (double)$_POST['preco'] ?? 0;
                $novo_preco = $preco;

                switch(true)
                {
                    case ($preco < 100):
                        echo "Sem desconto";
                        echo "Novo valor: R$$novo_preco";
                        break;
                    case ($preco >= 100):
                        $novo_preco = $preco - ($preco * (15/100));
                        echo "Desconto aplicado";
                        echo "Números diferentes: R$$novo_preco";
                        break;
                } 
                
            } catch (Exception $e) 
            {
                echo ("Erro: $e");
            }
        }
    ?>
</body>
</html>
