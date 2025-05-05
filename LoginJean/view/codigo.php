<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Verificar Código</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container mt-5">
        <div class="form-box active" id="login-form">
            <form action="../controller/VerificarCodigoController.php" method="POST">
                <input type="text" name="codigo" placeholder="Código recebido" required><br>
                <button type="submit">Verificar Código</button>
            </form>

            <?php if (!empty($_SESSION['erro'])): ?>

                <p class="erromsg"><?= $_SESSION['erro'];
                                    unset($_SESSION['erro']); ?></p>
            <?php endif; ?>
            <?php if (!empty($_SESSION['msg'])): ?>

                <p class="acertomsg"><?= $_SESSION['msg'];
                                    unset($_SESSION['msg']); ?></p>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>
