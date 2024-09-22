<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 2</h1>
    <form action="" method="POST" class="m-4">
        <?php
            for ($i = 0; $i < 5; $i++) {
                ?>
                <div class="col-3 mb-5">
                    <label for="nome<?php echo $i; ?>" class="form-label">Nome do aluno <?php echo $i + 1; ?></label>
                    <input  type="text" class="form-control" id="nome<?php echo $i; ?>" name="nomes[]" required>
                    <?php
                    for ($c = 1; $c <= 3; $c++){
                    ?>
                    <div class="col-2">
                        <label for="nota<?php echo $i, $c; ?>" class="form-label">Nota <?php echo $c; ?></label>
                        <input type="number" class="form-control" id="nota<?php echo $i, $c; ?>" name="notas[<?php echo $i; ?>][]" required>
                    </div>
                    <?php
                    }
                    ?>
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
      $vet_notas = $_POST['notas'];

      $medias = [];
      $mapas  = [];

      for ($col = 0; $col < count($vet_notas); $col++)
      {
        for ($lin = 0; $lin < count($vet_notas[$col]); $lin++)
        {
          $soma += $vet_notas[$col][$lin];
        }
        $medias[$col] = ($soma / 3);
        $soma = 0;
      }

      for ($i = 0; $i < count($vet_nomes); $i++)
      {
        $mapa[$vet_nomes[$i]] = $medias[$i];
      }

      arsort($mapa);

      foreach($mapa as $nome => $notas)
      {
        echo "<p>$nome: $notas</p>";
      }

    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
