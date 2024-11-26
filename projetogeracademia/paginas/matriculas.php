<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Matriculas</h2>
    <a href="nova_matricula.php" class="bnt btn-primary mb-3">Nova Matricula</a>
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
            <tr>
                <td>1</td>
                <td>Aluno 1</td>
                <td>Professor 1</td>
                <td>Plano 1</td>
                <td>
                    <a href="editar_matricula.php" class="btn btn-sm btn-primary">Editar</
                </td>
                <td>
                    <a href="excluir_matricula.php" class="btn btn-sm btn-primary">Editar</
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>