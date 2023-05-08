<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");
    include("../_templates/head.php");
    head_constructor("Calculadora de multas");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>
    <main>
        <div class="center_abs">
            <div class="box">
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
            </div>
            <div class="outcome box">
                <p>Resultado: </p>

                <?php
                extract($_POST);
                if (isset($send)) {
                    $delta = $veiculo - $via;

                    $multa =    $delta <= 10  ? 0   : ($delta <= 50  ? 100 : ($delta <= 100 ? 150 : 200));

                    echo $multa == 0 ? "nenhuma multa a pagar" : "O motorista tem uma multa de R$$multa.00 para pagar";
                }
                ?>
            </div>
        </div>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>