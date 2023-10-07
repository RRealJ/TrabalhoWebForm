$(document).ready(function(){
    $('#cpf').mask('000.000.000-00');
    $('#dtNascimento').mask('00/00/0000');
});  


function addCampos(){

//  Toda vez que add um novo campo ele excluia o que tinha sido colocado:
//  var div = document.getElementById('formBodyExp');
//  div.innerHTML += '<br><br><label for="experciencia">Experiência/Referência: </label><textarea name="experiencias[]" rows="4" cols="92"></textarea>';
//  Mudei pra ao inves de substituir o innerHTML, criar um novo elemento dentro.

    var textarea = document.createElement('textarea');
    textarea.name = "experiencias[]";
    textarea.rows = "4";
    textarea.cols = "92";

    var label = document.createElement('label');
    label.htmlFor = "experiencia";
    label.textContent = "Experiência/Referências: ";

    var div = document.getElementById('formBodyExp');

    div.appendChild(document.createElement('br')); 
    div.appendChild(label);
    div.appendChild(textarea);
    }
    


function validate(){
    var nome = document.getElementById('nome');
    var endNumero = document.getElementById('enderecoNumero');

    if (nome.value.length < 1){
        alert("Preencha o nome...");
        return false;
    }

    if (!/^\d+$/.test(endNumero.value)) { //com negação, regex se contém somente digitos 
        alert("Coloque apenas números no número do endereço");
        return false;
    }

    //Para agilizar teste não coloquei validação de cpf

    return true;
}

function imprimir(){
    window.print();
}