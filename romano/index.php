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

    <link rel="stylesheet" href="/romano/style.css">
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <div class="center_flex flex_column">
            <h1>Números Romanos</h1>

            <div class="box standard_width">
                <h2>Conversor</h2>

                <form method="post">
                    <div class="flex_row">
                        <label for="decimal">Insira um algarismo entre 1 e 3999</label>
                        <input onchange="clamp(this,1,3999)" type="number" name="decimal" required>
                    </div>

                    <input type="submit" name="send" value="Converter">
                </form>

            </div>

            <div class="box">
                <div class="flex_row center_flex">
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