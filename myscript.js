function addCampos(){
    var div = document.getElementById('formBody');
    var linha = '<label for="nome">Nome</label><input type="text" name="nome[]" placeholder="Digite seu Nome"><label for="cpf">CPF</label><input type="text" name="cpf[]" placeholder="Digite seu CPF"><label for="dtNascimento">Data de Nascimento</label><input type="text" name="dtNascimento[]" placeholder="Digite a Data"><br><br><label>Endereço</label><input type="text" name="enderecoLogradouro[]" placeholder="Digite o Logradouro"><input type="text" name="enderecoNumero[]" placeholder="Digite o Número"><input type="text" name="enderecoBairro[]" placeholder="Digite o Bairro"><input type="text" name="enderecoCidade[]" placeholder="Digite a Cidade"><button type="button" class="btn btn-outline-secondary" name="addCampos" onclick="addCampos()"> + </button>';
    div.innerHTML += linha;
}


function validate(){
    if (document.formulario.nome.value.length < 3){
        alert("Escreva mais");
        return false;
    }
    return true;
}

function imprimir(){
    window.print();
}