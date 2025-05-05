<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container mt-5">
        <div class="form-box active" id="login-form">
            <form action="../controller/RecuperarSenhaController.php" method="POST">
                <input type="email" name="email" placeholder="Digite seu e-mail" required><br>
                <button type="submit">Enviar Código</button>
            </form>

            <!-- Exibe mensagem de erro ao usuário, se houver -->
            <?php if (!empty($_SESSION['msg'])): ?>
                <p class="erromsg"><?= $_SESSION['msg'];
                                    unset($_SESSION['msg']); ?></p>
            <?php endif; ?>
            
            <a href="login.php">Voltar ao Login</a>
        </div>
    </div>

</body>

</html>
