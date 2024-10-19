<?php 

declare(strict_types = 1);

require_once('../config/bancodedados.php');

function login(string $email, string $senha)
{
    global $pdo; //"global" permite usar qualque variavel global em outra classe.

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