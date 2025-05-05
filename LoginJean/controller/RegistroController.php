<?php
session_start();

require_once '../model/Usuario.php';
require_once '../service/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['fullName'];
    $email = $_POST['yourEmail'];
    $dataNascimento = $_POST['data_nascimento'];
    $senha = $_POST['password'];
    $confirmarSenha = $_POST['confirmPassword'];

    if ($senha !== $confirmarSenha) {
        $_SESSION['msg'] = "As senhas não estão iguais!";
        header('Location: ../view/registro.php');
        exit();
    }

    if (Usuario::cadastrar($pdo, $nome, $email, $dataNascimento, $senha)) {
        $_SESSION['msg'] = "Registro feito com sucesso!";
        header('Location: ../view/login.php');
        exit();
    } else {
        $_SESSION['erro'] = "Erro ao registrar usuário.";
        header('Location: ../view/registro.php');
        exit();
    }
}
?>
