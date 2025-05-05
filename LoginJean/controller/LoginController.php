<?php
session_start();

require_once '../model/Usuario.php';
require_once '../service/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['username'];
    $senha = $_POST['password'];

    $usuario = Usuario::buscarPorEmail($pdo, $email);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario'] = $usuario['nome'];
        $_SESSION['msg'] = "Login realizado com sucesso!";
        $_SESSION['msg_tipo'] = "sucesso";
        header('Location: ../view/inicial.php');
        exit();
    } else {
        $_SESSION['erro'] = "E-mail ou senha incorretos.";
        $_SESSION['msg_tipo'] = "erro";
        header('Location:../view/login.php');
        exit();
    }
}
?>
