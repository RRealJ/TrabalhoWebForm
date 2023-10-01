<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Imprimindo uma Página</title>
	<style type="text/css">
		.cor-vermelha{
			color: red;
		}
	</style>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="myscript.js"></script>
    
</head>
<body>
	<h1>Título da Página</h1>
	<p>Descrição longa em campo paragráfo.</p>
	<h2>Novo destaque</h2>
	<p class="cor-vermelha">
		Descrição vinda do formulário: 


		<?php 
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$dtNascimento = $_POST['dtNascimento'];
		$enderecoLogradouro = $_POST['enderecoLogradouro'];
		$enderecoNumero = $_POST['enderecoNumero'];
		$enderecoBairro = $_POST['enderecoBairro'];
		$enderecoCidade = $_POST['enderecoCidade'];
		
			if(isset($nome)){
				foreach($nome as $n){
					echo "$n<br>";
				}
			}
		?>


	</p>
	<button onclick="imprimir()">Imprimir</button>
</body>
</html>

