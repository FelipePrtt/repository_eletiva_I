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

    }