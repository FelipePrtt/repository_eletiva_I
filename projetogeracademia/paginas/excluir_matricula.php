<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/matriculas.php';

    $id = $_GET['id'];
    if (!$id)
    {
        header('Location: matriculas.php');
        exit();
    }

    $matricula = retornarMatriculaPorId($id);
    if (!$matricula)
    {
        header('Location: matriculas.php');
        exit();
    }

    $erro = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try
        {
            $id = intval($_POST['id']);
            if (empty($id))
            {
                header('Location: matriculas.php');
                exit();
            }
            else
            {
                if (excluirMatricula(($id)))
                {
                    header('Location: matriculas.php');
                    exit();
                }
                else
                {
                    $erro = "Erro ao excluir matrícula.";
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
    <h2>Excluir Matricula</h2>

    <p>Tem certeza que deseja excluir a matrícula abaixo?</p>
    <ul>
        <li><strong>ID Matricula:</strong><?= $matricula['id_matricula'] ?></li>
        <li><strong>ID Plano:</strong><?= $matricula['id_plano'] ?></li>
        <li><strong>ID Aluno:</strong><?= $matricula['id_aluno'] ?></li>
        <li><strong>ID Professor:</strong><?= $matricula['id_professor'] ?></li>
    </ul>
    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="matriculas.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>