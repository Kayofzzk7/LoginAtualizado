<?php
session_start();

require_once '../model/Usuario.php';
require_once '../service/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_SESSION['email_recuperacao'] ?? null;
    $novaSenha = $_POST['nova_senha'];
    $confirmarSenha = $_POST['confirmar_senha'];

    if (!$email) {
        $_SESSION['msg'] = "Sessão expirada!";
        header('Location: ../view/recuperar.php');
        exit();
    }

    if ($novaSenha !== $confirmarSenha) {
        $_SESSION['msg'] = "As senhas não estao iguais!";
        header('Location: ../view/nova_senha.php');
        exit();
    }

    if (Usuario::alterarSenha($pdo, $email, $novaSenha)) {
        unset($_SESSION['email_recuperacao']);
        $_SESSION['msg'] = "Senha alterada com sucesso!";
        header('Location: ../view/login.php');
        exit();
    } else {
        $_SESSION['msg'] = "Erro ao alterar senha.";
        header('Location: ../view/nova_senha.php');
        exit();
    }
}
?>
