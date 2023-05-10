<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<?php
	include("../_templates/echoer.php");


	
	include("../_templates/head.php");
	head_constructor("Conversor de números naturais para romanos");
	?>

	<script src="../_js/clamp.js"></script>
</head>

<body>
	<?php show("../_templates/header.html"); ?>

	<main>
		<div class="flex-column">
			<h1>Números Romanos</h1>

			<div class="box standard-width">
				<form method="post" class="flex-column spaced-between">
					<div class="flex-row spaced-between">
						<label for="numero">
							Digite um número natural
						</label>
						
                        <input onchange="clamp(this,1,3999)" type="number" name="numero" required>
					</div>

					<div class="flex-row spaced-between">
						<input type="submit" value="Converter">
					</div>
				</form>
			</div>

			<div class="box">
				<?php include("code.php"); ?>
			</div>
		</div>

	</main>

	<?php show("../_templates/footer.html"); ?>
</body>

</html>