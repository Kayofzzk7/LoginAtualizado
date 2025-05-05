<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Nova Senha</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container mt-5">
        <div class="form-box active" id="login-form">
            <form action="../controller/NovaSenhaController.php" method="POST">
                <input type="password" name="nova_senha" placeholder="Nova senha" required><br>
                <input type="password" name="confirmar_senha" placeholder="Confirmar nova senha" required><br>
                <button type="submit">Salvar Nova Senha</button>
            </form>

            <!-- Exibe mensagem de feedback ao usuário, se houver -->
            <?php if (!empty($_SESSION['msg'])): ?>
                <p class="acertomsg"><?= $_SESSION['msg'];
                                    unset($_SESSION['msg']); ?></p>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>
