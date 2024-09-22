<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 5</h1>
    <form action="" method="POST" class="m-4">
        <?php
            for ($i = 0; $i < 5; $i++) {
                ?>
                <div class="col-3 mb-5">
                    <label for="nome<?php echo $i; ?>" class="form-label">Nome do <?php echo $i + 1; ?>° livro</label>
                    <input type="text" class="form-control" id="nome<?php echo $i;?>" name="nomes[]">

                    <label for="qtde_livro<?php echo $i; ?>" class="form-label">Quantidade em estoque</label>
                    <input type="number" class="form-control" id="qtde_livro<?php echo $i; ?>" name="qtde[]">
                </div>
                <?php
            }
        ?>
        <div class="row mt-4">
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try 
    {
        $vet_nomes = $_POST['nomes'];
        $vet_qtde = $_POST['qtde'];

        $estoque = [];

        for ($i = 0; $i < count($vet_nomes); $i++)
        {
            $nome = $vet_nomes[$i];
            $qtde = $vet_qtde[$i];

            if ($qtde < 5)
            {
                echo "<p>O livro $nome está em baixo estoque!</p>";
                echo "<p>Quantidade em estoque: $qtde</p>";
            }

            $mapa[$nome] = $qtde;
        }

        ksort($mapa);

        foreach($mapa as $nome => $qtde)
        {
            echo "<p>Nome do livro: $nome</p>";
            echo "<p>Quantidade em estoque: $qtde</p>";
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
