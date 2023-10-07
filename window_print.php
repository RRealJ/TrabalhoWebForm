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

<?php 
function quebrarLinha($texto) {

	$palavrasMax = 30;
	$textoFormatado = "";
	$i = 0;
	$palavras = explode(" ", $texto);

	foreach ($palavras as $p) {
		$textoFormatado = $textoFormatado . " " . $p;
		$i++;

		if ($i == $palavrasMax){
			echo "$textoFormatado<br>";
			$textoFormatado = "";	
			$i = 0;
		}
	}
}

?>

<body>
	<h1>Gerador de Curriculo</h1>
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

		if(isset($nome)){
			echo "<br>----------------------------------------------------------------------------------------------------------------<br>";
			echo "Nome: $nome<br>";
			echo "CPF: $cpf<br>";
			echo "Data de Nascimento: $dtNascimento<br>";
			echo "Endereço: $endLogra, $endNumero, $endBairro - $endCidade<br>";
			echo "----------------------------------------------------------------------------------------------------------------<br>";
			echo "Experiências: <br><br>";

			if(isset($_POST['experiencias'])){
				$experiencias = $_POST['experiencias'];
				foreach ($experiencias as $exp) {
					echo "->";
					quebrarLinha($exp);
					echo "<-<br><br>";
				}
			}	
			echo "----------------------------------------------------------------------------------------------------------------<br>";
		}

		?>
		
	</p>
	<button onclick="imprimir()">Imprimir</button>
</body>
</html>

