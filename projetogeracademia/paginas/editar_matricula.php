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
        try 
        {
            $id_aluno = intval($_POST['id_aluno']);
            $id_professor = intval($_POST['id_professor']);
            $id_plano = intval($_POST['id_plano']);

            if (empty($id_aluno))
            {
                $erro = 'Preencha todos os campos obrigatórios!';
            }
            else
            {
                if (alterarMatricula($id_aluno, $id_professor, $id_plano, $id))
                {
                    header('Location: matricula.php');
                    exit;
                }
                else
                {
                    $erro = "Erro ao alterar a matrícula!";
                }
            }
        } 
        catch (Exception $e)
        {
            $erro = "Erro: ".$e->getMessage();
        }
    }