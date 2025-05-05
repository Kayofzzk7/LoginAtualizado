<?php
class Usuario
{
    public static function buscarPorEmail($pdo, $email)
    {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function cadastrar($pdo, $nome, $email, $dataNascimento, $senha)
    {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES (?, ?, ?, ?)");
        return $stmt->execute([
            $nome,
            $email,
            password_hash($senha, PASSWORD_DEFAULT),
            $dataNascimento
        ]);
    }

    public static function alterarSenha($pdo, $email, $novaSenha)
    {
        $stmt = $pdo->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
        return $stmt->execute([
            password_hash($novaSenha, PASSWORD_DEFAULT),
            $email
        ]);
    }
}
?>
