<!DOCTYPE html>
<html>
<head>
	<title>Conversor de números naturais para romanos</title>
</head>
<body>
	<form method="POST">
		<label>Digite um número natural:</label>
		<input type="text" name="numero">
		<button type="submit">Converter</button>
	</form>
	<?php
		function converter_para_romano($numero) {
			$romano = '';
			$numeros_romanos = array(
				'M' => 1000,
				'CM' => 900,
				'D' => 500,
				'CD' => 400,
				'C' => 100,
				'XC' => 90,
				'L' => 50,
				'XL' => 40,
				'X' => 10,
				'IX' => 9,
				'V' => 5,
				'IV' => 4,
				'I' => 1
			);
			foreach($numeros_romanos as $romano_atual => $valor) {
				while($numero >= $valor) {
					$romano .= $romano_atual;
					$numero -= $valor;
				}
			}
			return $romano;
		}

		if(isset($_POST['numero'])) {
			$numero = intval($_POST['numero']);
			if($numero >= 1 && $numero <= 3999) {
				$romano = converter_para_romano($numero);
				echo '<p>O número ' . $_POST['numero'] . ' em algarismos romanos é: ' . $romano . '</p>';
			}
			else {
				echo '<p>Por favor, digite um número entre 1 e 3999.</p>';
			}
		}
	?>
</body>
</html>