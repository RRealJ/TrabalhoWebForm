<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gerando Curriculo</title>

	<style type="text/css">
		.Curriculo{
			border-left: 4mm ridge rgb(211, 220, 50);
			border-right: 2px solid rgb(130,136,30);
			border-top: 2px solid rgb(130,136,30);
			border-bottom: 2px solid rgb(130,136,30);
			background-color: #ffffff;
			width: 95%;
			font-size: 22px;
			padding: 10px 0px 10px 10px;
		}

		@media print {
			body * {
				visibility: hidden;
			}
			#printable, #printable * {
				visibility: visible;
			}
			#printable {
				position: fixed;
				left: 0;
				top: 0;
			}		
		}

	</style>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="myscript.js"></script>  
</head>

<body>
	<h1>Gerador de Curriculo</h1>
		<p>
			<?php 
			echo '<div class="Curriculo" id=printable>';
			$nome = $_POST['nome'];
			$cpf = $_POST['cpf'];
			$dtNascimento = $_POST['dtNascimento'];
			$endLogra = $_POST['enderecoLogradouro'];
			$endNumero = $_POST['enderecoNumero'];
			$endBairro = $_POST['enderecoBairro'];
			$endCidade = $_POST['enderecoCidade'];

			if(isset($nome)){
				echo "Nome: $nome<br>";
				echo "CPF: $cpf<br>";
				echo "Data de Nascimento: $dtNascimento<br>";
				echo "Endereço: $endLogra, $endNumero, $endBairro - $endCidade<br>";
				echo "-----------------------------------------------------------------------------------------<br>";
				echo "Experiências: <br><br>";

				if(isset($_POST['experiencias'])){
					$experiencias = $_POST['experiencias'];
					foreach ($experiencias as $exp) {
						$expFormatado = wordwrap($exp, 120, "<br />\n");
						echo "$expFormatado<br><br>";
					}
				}
			}
			echo '</div>';
			?>
		</p>
		<button onclick="imprimir()">Imprimir</button>

</body>
</html>

