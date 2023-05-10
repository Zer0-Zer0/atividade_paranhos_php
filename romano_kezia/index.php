<?php

function converter_romano($numero)
{
    $valores = array(
        "M" => 1000,
        "CM" => 900,
        "D" => 500,
        "CD" => 400,
        "C" => 100,
        "XC" => 90,
        "L" => 50,
        "XL" => 40,
        "X" => 10,
        "IX" => 9,
        "V" => 5,
        "IV" => 4,
        "I" => 1
    );
    $resultado = '';
    foreach ($valores as $romano => $arabico) {
        $matches = intval($numero / $arabico);
        $resultado .= str_repeat($romano, $matches);
        $numero = $numero % $arabico;
    }
    return $resultado;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];
    if ($numero >= 1 && $numero <= 3999) {
        $romano = converter_romano($numero);
    } else {
        $erro = "Por favor, insira um número entre 1 e 3999.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Conversor de Números Romanos</title>
</head>

<body>
    <h1>Conversor de Números Romanos</h1>
    <?php if (isset($erro)) { ?>
        <p><?php echo $erro; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="numero">Insira um número entre 1 e 3999:</label>
        <input type="number" name="numero" id="numero" min="1" max="3999" required>
        <button type="submit">Converter</button>
    </form>
    <?php if (isset($romano)) { ?>
        <p>O número <?php echo $numero; ?> em algarismos romanos é: <?php echo $romano; ?></p>
    <?php } ?>
</body>
<footer>
    <p>Site feito por Kézia Silva Santos da EI-32</p>
</footer>

</html>