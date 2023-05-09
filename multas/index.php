<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("code.php");

    include("../_templates/head.php");
    head_constructor("Calculadora de multas");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>
    <main>
        <div class="center_flex flex_column">
            <h1>Multas</h1>

            <div class="box standard_width">
                <h2>Calculadora</h2>

                <form method="post">
                    <div class="input_combo flex_row">
                        <label for="via">Velocidade máxima da via</label>
                        <input type="number" name="via" required>
                    </div>
                    <div class="input_combo flex_row">
                        <label for="veiculo">Velocidade do veículo</label>
                        <input type="number" name="veiculo" required>
                    </div>
                    <div class="input_combo flex_row">
                        <input type="submit" name="send" value="Calcular">
                    </div>
                </form>
            </div>

            <div class="outcome box standard_width flex_row">
                <?php
                fine_calc();
                ?>
            </div>
        </div>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>