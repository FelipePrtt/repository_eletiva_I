<?php

declare(strict_types=1);

require_once '../config/bancodedados.php';

function novoPlano(string $nome, float $preco):bool
{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO plano (nome, preco) VALUES (?, ?)");
    return $stmt->execute([$nome, $preco]);
}

function excluirPlano(int $id):bool
{
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM plano WHERE id = ?");
    return $stmt->execute([$id]);
}

function todosPlanos():array
{
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM plano");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function retornarPlanoPorId(int $id): ?array
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM plano WHERE id_plano = ?");
    $stmt->execute([$id]);
    $plano = $stmt->fetch(PDO::FETCH_ASSOC);
    return $plano ? $plano : null;
}

function alterarPlano(int $id, string $nome, float $preco): bool
{
    global $pdo;
    $stmt = $pdo->prepare("UPDATE plano SET nome = ?, preco = ? WHERE id = ?");
    return $stmt->execute([$nome, $preco, $id]);
}