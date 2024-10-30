<?php 

declare(strict_types = 1);

require_once('../config/bancodedados.php');

function login(string $email, string $senha)
{
    global $pdo; //"global" permite usar qualquer variavel global em outra classe.

    //iserção do usuário adm
    $stament = $pdo->query("SELECT * FROM usuario WHERE email = 'adm@adm.com'");
    $usuario = $stament->fetchAll(PDO::FETCH_ASSOC);
    //verifica se o usuário adm existe, se não existir será criado
    if (!$usuario)
    {
        $pdo->beginTransaction();
        $senha = password_hash('adm', PASSWORD_BCRYPT);
        $stament = $pdo->prepare("INSERT INTO usuario (nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
        $stament->execute(['Administrador', 'adm@adm.com', $senha, 'adm']);
        $pdo->commit();
    }


    //Trecho que verifica email e senha do usuário
    $stament = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
    //validar os valores com expressões regulares - validar se realmente é um email
    $stament->execute([$email]);
    $usuario = $stament->fetch(PDO::FETCH_ASSOC);
    if ($usuario && password_verify($senha, $usuario['senha']))
    {
        return $usuario;
    }else
    {
        return null; 
    }
}

function novoUsuario(string $nome, string $email, string $senha, string $nivel):bool
{
    global $pdo;
    $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);
    $stament = $pdo->prepare("INSERT INTO usuario (nome, email, senha, nivel) VALUES (?, ?, ?, ?)");
    return $stament->execute([$nome, $email, $senha_criptografada, $nivel]);
}

function excluirUsuario(int $id):bool
{
    global $pdo;
    $stament = $pdo->prepare("DELETE FROM usuario WHERE id = ?");
    return $stament->execute([$id]);
}

function todosUsuario():array
{
    global $pdo;
    $stament = $pdo->query(" SELECT * FROM usuario WHERE nivel <> 'adm' ");
    return $stament->fetchAll(PDO::FETCH_ASSOC);
}

function retornarUsuarioPorId(int $id): ?array
{
    global $pdo;
    $stament = $pdo->prepare("SELEC * FROM usuario WHERE id = ? AND nivel <> 'adm'");
    $stament->execute([$id]);
    $usuario = $stament->fetch(PDO::FETCH_ASSOC);
    return $usuario ? $usuario : null;
}