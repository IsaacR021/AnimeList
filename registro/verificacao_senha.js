// verificacao.js

function validarSenha() {
    const senha = document.getElementById('senha').value;
    const conf_senha = document.getElementById('conf_senha').value;

    if (senha !== conf_senha) {


        document.getElementById("info-mensagem").innerHTML = "<p class='inforegistro'>As senhas não coincidem!</p>";
        document.getElementById('senha').focus();
        document.getElementById('senha').value = "";
        document.getElementById('conf_senha').value = "";
       

        return false; 
    }

    return true; 
}
