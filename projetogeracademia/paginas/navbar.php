<?php
    session_start();
    if(!isset($_SESSION['acesso'])){
        header('Location: login.php');        
    }
?>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashborad">Sistema de Gerenciamento de Acadamia</a>
        <button class="navbar-toggler" type="button" data-bs-theme="collapse" data-bs-target=""