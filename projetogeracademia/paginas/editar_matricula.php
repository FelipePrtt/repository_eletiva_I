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

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try 
        {
            $id_aluno = intval($_POST['id_aluno']);
            $id_professor = intval($_POST['id_professor']);
            $id_plano = intval($_POST['id_plano']);

            if (empty($id_aluno))
            {
                $erro = 'Preencha todos os campos obrigatórios!';
            }
            else
            {
                if (alterarMatricula($id_aluno, $id_professor, $id_plano, $id))
                {
                    header('Location: matricula.php');
                    exit;
                }
                else
                {
                    $erro = "Erro ao alterar a matrícula!";
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
    <h2>Editar Matrícula</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif;?>

    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>"/>
        <div class="mb-3">
            <label for="id_plano" class="form-label">ID Plano</label>
            <input type="number" name="id_plano" value="<?= $matricula['id_plano'] ?>" id="id_plano" class="form-control" value="" require>
        </div>
        <div class="mb-3">
            <label for="id_aluno" class="form-label">ID Aluno</label>
            <input type="number" name="id_aluno" value="<?= $matricula['id_aluno'] ?>" id="id_aluno" class="form-control" value="" require>
        </div>
        <div class="mb-3">
            <label for="id_professor" class="form-label">ID Professor</label>
            <input type="number" name="id_professor" value="<?= $matricula['id_professor'] ?>" id="id_professor" class="form-control" value="" require>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar Matricula</button>
    </form>
</div>

<?php require_once 'rodape.php';  ?>