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
            <div class="box">
                <h1>Calculadora de multas</h1>

                <form method="post">
                    <div class="input_combo formulary">
                        <label for="via">Velocidade máxima da via</label>
                        <input type="number" name="via">
                    </div>
                    <div class="input_combo formulary">
                        <label for="veiculo">Velocidade do veículo</label>
                        <input type="number" name="veiculo">
                    </div>
                    <div class="input_combo formulary">
                        <input type="submit" name="send" value="Calcular">
                    </div>
                </form>
            </div>
            <div class="outcome box">
                <p>Resultado: </p>

                <?php
                fine_calc();
                ?>
            </div>
        </div>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>