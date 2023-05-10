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
