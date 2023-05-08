<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multas</title>
</head>

<body>
    <h1>Calculadora de multas</h1>

    <form method="post">
        <div class="input_combo">
            <label for="via">Velocidade máxima da via</label>
            <input type="number" name="via">
        </div>
        <div class="input_combo">
            <label for="veiculo">Velocidade do veículo</label>
            <input type="number" name="veiculo">
        </div>
        <div class="input_combo">
            <input type="submit" name="send" value="Calcular">
        </div>
    </form>

    <div class="outcome">
        <?php
        extract($_POST);
        if (isset($send)) {
            $delta = $veiculo - $via;

            $multa =    $delta <= 10  ? 0   : (
                        $delta <= 50  ? 100 : (
                        $delta <= 100 ? 150 : 200 ));

            echo $multa == 0? "nenhuma multa a pagar" : "O motorista tem uma multa de R$$multa.00 para pagar";
        }
        ?>
    </div>  
</body>

</html>