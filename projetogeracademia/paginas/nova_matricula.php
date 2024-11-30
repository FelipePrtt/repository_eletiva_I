<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/matriculas.php';
    require_once '../funcoes/usuarios.php';

    $matriculas = todasMatriculas();
    $usuarios = todosUsuarios();
    $erro = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        try
        {
            $id_aluno = intval($_POST['id_aluno']);
            $id_professor = intval($_POST['id_professor']);
            $id_plano = intval($_POST['id_plano']);

            if (empty($id_aluno) || empty($id_professor))
            {
                $erro = "Preencha todos os campos";
            }
            else
            {
                if (novaMatricula($id_aluno, $id_professor, $id_plano))
                {
                    header('Location: matriculas.php');
                    exit();
                }
                else
                {
                    $erro = "Erro ao realizar matrícula!";
                }
            }
        }
        catch (Exception $e)
        {
            $erro = "Erro: ". $e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Nova Matrícula</h2>

    <?php if (!empty($erro)):?>
        <p class="text-danger">$erro</p>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="id_aluno" class="form-label">Aluno:</label>
            <input type="number" name="id_aluno" id="id_aluno" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_professor" class="form-label">Professor:</label>
            <input type="number" name="id_professor" id="id_professor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_plano" class="form-label">Plano:</label>
            <input type="number" name="id_plano" id="id_plano" class="form-select" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Matrícula</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>