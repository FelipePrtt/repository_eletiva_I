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
            $id = intval($_POST['id']);
            if (empty($id))
            {
                header('Locarion: planos.php');
                exit();
            }
            else
            {
                if (excluirPlano($id))
                {
                    header('Location: planos.php');
                    exit();
                }
                else
                {
                    $erro = "Erro ao excluir plano!";
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
    <h2>Excluir Plano</h2>

    <p>Tem certeza de que deseja excluir o plano abaixo?</p>
    <ul>
        <li><strong>Nome:</strong> <?= $plano['nome'] ?></li>
        <li><strong>Preço:</strong> <?= $plano['preco'] ?></li>
    </ul>
    <form method="post">
        <input  type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="planos.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>