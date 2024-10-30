<?php

    declare(strict_types = 1);

    require_once '..config/bancodedados.php';

    function buscarProdutos():array
    {
        global $pdo;
        $stmt = $pdo->query("SELECT p.*, c.nome as nome_categoria FROM produto p INNER JOIN categoria c ON c.id = p.categoria_id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
