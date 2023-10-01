function addCampos(){
    var div = document.getElementById('formBody');
    var linha = '<label>Nome</label><input type="text" name="nome[]" placeholder="Digite seu Nome"><label>CPF</label><input type="text" name="cpf[]" placeholder="Digite seu CPF"><label>Data de Nascimento</label><input type="text" name="dtNascimento[]" placeholder="Digite a Data"><br><br><label>Endereço</label><input type="text" name="endereco_logradouro[]" placeholder="Digite o Logradouro"><input type="text" name="endereco_numero[]" placeholder="Digite o Número"><input type="text" name="endereco_bairro[]" placeholder="Digite o Bairro"><input type="text" name="endereco_cidade[]" placeholder="Digite a Cidade"><button type="button" class="btn btn-outline-secondary" name="addCampos" onclick="addCampos()"> + </button>';
    div.innerHTML += linha;
}


function validate(){
    if (document.formulario.nome.value.length < 3){
        alert("Escreva mais");
        return false;
    }
    return true;
}