<?php
session_start();

require_once '../model/codigo.php';
require_once '../service/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_SESSION['email_recuperacao'] ?? null;
    $codigo = $_POST['codigo'];

    if ($email && Codigo::verificarCodigo($pdo, $email, $codigo)) {
        $_SESSION['msg'] = "Codigo verificado com sucesso!";
        header('Location: ../view/nova_senha.php');
        exit();
    } else {
        $_SESSION['erro'] = "Código invalido!";
        header('Location: ../view/codigo.php');
        exit();
    }
}
?>
