<html>
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
                $num = (int)$_POST['num'] ?? 0;

                switch($num)
                {
                    case 1:
                        echo "Corresponde ao mês de Janeiro";
                        break;
                    case 2:
                        echo "Corresponde ao mês de Fevereiro";
                        break;
                    case 3:
                        echo "Corresponde ao mês de Março";
                        break;
                    case 4:
                        echo "Corresponde ao mês de Abril";
                        break;
                    case 5:
                        echo "Corresponde ao mês de Maio";
                        break;
                    case 6:
                        echo "Corresponde ao mês de Junho";
                        break;
                    case 7:
                        echo "Corresponde ao mês de Julho";
                        break;
                    case 8:
                        echo "Corresponde ao mês de Agosto";
                        break;
                    case 9:
                        echo "Corresponde ao mês de Setembro";
                        break;
                    case 10:
                        echo "Corresponde ao mês de Outubro";
                        break;
                    case 11:
                        echo "Corresponde ao mês de Novembro";
                        break;
                    case 12:
                        echo "Corresponde ao mês de Dezembro";
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
