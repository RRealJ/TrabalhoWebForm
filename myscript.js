$(document).ready(function(){
    $('#cpf').mask('000.000.000-00');
    $('#dtNascimento').mask('00/00/0000');
});  


function addCampos(){
    var div = document.getElementById('formBody');
    div.innerHTML += '<br><br><label for="experciencia">Experiência: </label><textarea name="experiencias[]" rows="4" cols="100"></textarea>';
    // div.innerHTML += linha;
}


function validate(){
    var nome = document.getElementById('nome');
    var endNumero = document.getElementById('enderecoNumero');

    if (nome.value.length < 1){
        alert("Nome Curto");
        return false;
    }

    if (!/^\d+$/.test(endNumero.value)) { //testando com regex
        alert("Coloque apenas números no número do endereço");
        return false;
    }

    //Para agilizar teste não coloquei validação de cpf

    return true;
}

function imprimir(){
    window.print();
}