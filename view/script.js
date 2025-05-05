// Função para validar se as senhas inseridas são iguais
function validarSenhas() {
    // Obtém o valor da senha e da confirmação da senha dos campos de entrada
    const senha = document.getElementById("senha").value;
    const confirmar = document.getElementById("confirmarSenha").value;

    // Verifica se as senhas não coincidem
    if (senha !== confirmar) {
        // Exibe um alerta caso as senhas não coincidam
        alert("As senhas não coincidem.");
        // Impede o envio do formulário retornando false
        return false;
    }
    // Se as senhas coincidirem, permite o envio do formulário
    return true;
}
