<?php

    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/planos.php';

    $planos = todosPlanos();
    $erro = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try
        {
            $nome = $_POST['nome'];
            $preco = floatval($_POST['preco']);
            if (empty($nome) || empty($preco))
            {
                $erro = 'Preencha todos os campos';
            }
            else
            {
                if (novoPlano($nome, $preco))
                {
                    header('Location: planos.php');
                    exit();
                }
                else
                {
                    $erro = 'Erro ao cadastrar plano';
                }
            }
        }
        catch (Exception $e)
        {
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2> Criar Novo Plano</h2>

    <?php if (!empty($erro)): ?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <div class="mb3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div>
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" id="preco" class="form-control" require> 
        </div>
        <button type="submit" class="btn btn-primary">Criar Plano</button>
    </form>
</div>

<?php require_once 'rodape.php';