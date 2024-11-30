<?php 
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/planos.php';
?>

<div class="container mt-5">
    <h2>Gerenciamento de Planos</h2>
    <a href="novo_plano.php" class="btn btn-success mb-3">Novo Plano</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $planos = todosPlanos();
                foreach($planos as $p):
            ?>

            <tr>
                <td><?= $p['id_plano'] ?></td>
                <td><?= $p['nome'] ?></td>
                <td><?= $p['preco'] ?></td>
                <td>
                    <a href="editar_plano.php?id=<?= $p['id_plano'] ?>" class="btn btn-warning">Editar</a>       
                    <a href="excluir_plano.php?id=<?= $p['id_plano'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>       
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>