<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/planos.php';

    $id = $_GET['id'];
    if (!$id)
    {
        header('Location: planos.php');
        exit();
    }

    $plano = retornarPlanoPorId($id);
    if (!$plano)
    {
        header('Location: planos.php');
        exit();
    }

    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try
        {

            $nome = $_POST['nome'];
            $preco = floatval($_POST['preco']);
            $id = intval($_POST['id']);
            if (empty($nome))
            {
                $erro = "Preencha os campos obrigatórios!";
            }
            else
            {
                if (alterarPlano($id, $nome, $preco))
                {
                    header('Location: planos.php');
                    exit();
                }
                else
                {
                    $erro = "Erro a alterar plano!";
                }
            }
        }
        catch (Exception $e)
        {
            $erro = "Erro: ".$e->getMessage();
        }
    }
?>

<div class="tontainer mt-5">
    <h2>Editar Plano</h2>

    <?php if (!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="mb-3">
            <lable for="nome" class="form-label">Nome</lable>
            <input type="text" name="nome" value="<?= $plano['nome']?>" id="nome" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" name="preco" value="<?= $plano['preco'] ?>" id="preco"  class="form-control" step="0.01" value="" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Plano</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>