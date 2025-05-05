<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>

    <div class="container mt-5">
        <div class="form-box active" id="login-form">
            <form action="../controller/LoginController.php" method="POST">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Email" required><br>
                    <input type="password" name="password" placeholder="Senha" required><br>
                </div>
                
                <button type="submit" class="btn btn-primary">Entrar</button>

                <p class="mt-3">
                    <a href="recuperar.php">Esqueceu a senha?</a><br>
                    Não tem uma conta? <a href="registro.php">Registrar-se</a>
                </p>
            </form>

            <!-- Exibe mensagem de feedback ao usuário, se houver -->
            <?php if (!empty($_SESSION['erro'])): ?>
                <p class="erromsg"><?= $_SESSION['erro'];unset($_SESSION['erro']);?></p>
            <?php endif; ?>
            <?php if (!empty($_SESSION['msg'])): ?>
                <p class="acertomsg"><?= $_SESSION['msg'];unset($_SESSION['msg']);?></p>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>
