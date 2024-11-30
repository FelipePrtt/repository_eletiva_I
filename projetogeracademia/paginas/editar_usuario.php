<?php
    require_once 'cabecalho.php';
    require_once 'navbar.php';
    require_once '../funcoes/usuarios.php';
    
    $id = $_GET['id'];
    if (!$id) {
        header('Location: usuarios.php');
        exit();
    }
    
    $usuario = retornarUsuarioPorId($id);
    if (!$usuario) {
        header('Location: usuarios.php');
        exit();
    }
    
    $erro = "";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $nivel = $_POST['nivel'];
            
            $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);

            if (alterarUsuario($id, $nome, $email, $senha_criptografada, $nivel)) {
                header('Location: usuarios.php');
                exit();
            } else {
                $erro = "Erro ao atualizar usuário!";
            }
        } catch (Exception $e) {
            $erro = "Erro: " . $e->getMessage();
        }
    }
?>

<div class="container mt-5">
    <h2>Editar Usuário</h2>

    <form method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Nova Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="nivel" class="form-label">Nova Nivel</label>
            <input type="text" name="nivel" id="nivel" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Atualizar dados</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
