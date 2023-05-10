<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("code.php");

    include("../_templates/head.php");
    head_constructor("Conversor de Números Romanos");
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
                            Insira um número entre 1 e 3999
                        </label>

                        <input onchange="clamp(this,1,3999)" type="number" name="numero" required>
                    </div>

                    <div class="flex-row spaced-between">
                        <input type="submit" value="Converter">
                    </div>
                </form>
            </div>

            <?php
            if (isset($romano)) {
                echo "
                    <div class='box flex-column'>
                        <p>O número $numero em algarismos romanos é $romano</p>
                    </div>";
            }
            ?>
        </div>
    </main>

    <?php show("../_templates/footer.html"); ?>
</body>

</html>