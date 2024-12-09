<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
    require_once '../funcoes/matriculas.php';
?>

<div class="container mt-5">
    <h2>Gerenciamento de Matriculas</h2>
    <a href="nova_matricula.php" class="btn btn-success mb-3">Nova Matricula</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Aluno</th>
                <th>Professor</th>
                <th>Plano</th>
            </tr>
        </thead>
        <tbody>

        <?php

            $matriculas = todasMatriculas();
            foreach ($matriculas as $m):
        ?>

            <tr>
                <td><?= $m['id_matricula'] ?></td>
                <td><?= $m['id_aluno'] ?></td>
                <td><?= $m['id_professor'] ?></td>
                <td><?= $m['id_plano'] ?></td>
                <td>
                    <a href="editar_matricula.php?id=<?= $m['id_matricula'] ?>" class="btn btn-warning">Editar</a>
                    <a href="excluir_matricula.php?id=<?= $m['id_matricula'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>


        <?php
            endforeach;
        ?>


        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>