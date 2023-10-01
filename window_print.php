<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gerando Curriculo</title>
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
		$endLogra = $_POST['enderecoLogradouro'];
		$endNumero = $_POST['enderecoNumero'];
		$endBairro = $_POST['enderecoBairro'];
		$endCidade = $_POST['enderecoCidade'];
		$experiencias = $_POST['experiencas'];
		$i = 0;		

		if(isset($nome)){
			echo "$n<br>";
			echo "$cpf<br>";
			echo "$dtNascimento<br>";
			echo "$endLogra<br>";
			echo "$endNuemro<br>";
			echo "$endBairro<br>";
			echo "$endCidade<br>";
			foreach($nome as $n){
				echo "$experiencias[$i]<br><br>";
				$i++;
			}
		}
		
		$i++;
		?>


	</p>
	<button onclick="imprimir()">Imprimir</button>
</body>
</html>

