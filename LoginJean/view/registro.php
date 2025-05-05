<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>

    <div class="container mt-5">
        <div class="form-box active" id="login-form">
            <form action="../controller/RegistroController.php" method="POST" onsubmit="return validarSenhas()">
                <input type="text" name="fullName" placeholder="Nome completo" required><br>
                <input type="email" name="yourEmail" placeholder="Email" required><br>
                <input type="date" name="data_nascimento" required><br>
                <input type="password" id="senha" name="password" placeholder="Senha (mínimo 8 caracteres)" pattern=".{8,}" title="A senha deve ter no mínimo 8 caracteres" required><br>
                <input type="password" id="confirmarSenha" name="confirmPassword" placeholder="Confirmar Senha" required><br>
                <button type="submit">Registrar</button>
            </form>

            <!-- Exibe mensagem de erro ou sucesso ao usuário, se houver -->
            <?php if (!empty($_SESSION['msg'])): ?>
                <p><?= $_SESSION['msg']; 
                                    unset($_SESSION['msg']); ?></p>
            <?php endif; ?>

            <a href="login.php">Já tem conta? Login</a>
        </div>
    </div>

</body>
</html>
