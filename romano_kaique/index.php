<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("code.php");

    include("../_templates/head.php");
    head_constructor("arabico para romano");
    ?>

    <script src="../_js/clamp.js"></script>
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <div class="  flex-column">
            <h1>Números Romanos</h1>

            <div class="box standard-width">
                <h2>Conversor</h2>

                <form method="post" class="flex-column">
                    <div class="flex-row spaced-between">
                        <label for="decimal">Insira um algarismo entre 1 e 3999</label>
                        <input onchange="clamp(this,1,3999)" type="number" name="decimal" required>
                    </div>

                    <input type="submit" name="send" value="Converter">
                </form>

            </div>

            <div class="box">
                <div class="flex-row spaced-between  ">
                    <div>
                        <?php arabic_to_roman(); ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>