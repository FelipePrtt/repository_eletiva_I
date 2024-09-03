<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        try
        {
            #Funções de string
            $valor = $_POST['valor'] ?? 0;
            $qtde_caracteres = strlen($valor);
            echo "<p>Quantidade de caracteres $qtde_caracteres</p>";
            $maiusculo = strtoupper($valor);
            echo "<p>Palavra em maiúsculo $maiusculo.</p>";
            $minusculo = strtolower($valor);
            echo "<p>Palavra em minúsculo $minusculo.</p>";


            #Função de data
            $dia = 30;
            $mes = 2;
            $ano = 2024;

            if (checkdate($mes, $dia, $ano))
            {
                echo "<p>Data válida</p>";
            }
            else
            {
                echo "<p>Data inválida</p>";
            }

            #Função de valores
            $menor = min(1, 2, 3, 4, 5);
            echo "<p>Menor valor $min.</p>";

            $maior = max(1, 2, 3, 4, 5);
            echo "<p>Maior valor $maior.</p>";

            $aleatorio = rand(1, 100);
            echo "<p>Numero escolhido $aleatorio.</p>";

            $numero = 1567.98;
            $moeda = number_format($numero, 2, ",",".");
            echo "<p>R$ $moeda</p>";
        }
        catch (Exception $e)
        {
            echo "Erro".$e->getMessage();
        }
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>