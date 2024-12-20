<?php

declare(strict_types=1);

require_once '../config/bancodedados.php';

function novaMatricula(int $id_aluno, int $id_professor, int $id_plano):bool
{
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO matricula (id_aluno, id_professor, id_plano) VALUES (?, ?, ?)");
    return $stmt->execute([$id_aluno, $id_professor, $id_plano]);
}

function excluirMatricula(int $id): bool
{
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM matricula WHERE id_matricula = ?");
    return $stmt->execute([$id]);
}

function todasMatriculas(): array
{
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM matricula");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function retornarMatriculaPorId(int $id):  ?array
{
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM matricula WHERE id_matricula = ?");
    $stmt->execute([$id]);
    $matricula = $stmt->fetch(PDO::FETCH_ASSOC);
    return $matricula ?: null;
}

function alterarMatricula(int $id, int $id_aluno, int $id_professor, int $id_plano) : bool
{
    global $pdo;
    $stmt = $pdo->prepare("UPDATE matricula SET id_aluno = ?, id_professor = ?, id_plano = ? WHERE id_matricula = ?");
    return $stmt->execute([$id_aluno, $id_professor, $id_plano, $id]);
}

function gerarDadosGrafico(): array
{
    global $pdo;

    $stmt = $pdo->query("SELECT COUNT(m.id_matricula) as quantidade, p.nome 
                          FROM plano p 
                          LEFT JOIN matricula m ON p.id_plano = m.id_plano 
                          GROUP BY p.id_plano");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}