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
            <div class="box">
                <h1>números arábicos para romanos</h1>

                <form method="post" class="formulary">
                    <label for="decimal">1-3999</label>
                    <input onchange="clamp(this,1,3999)" type="number" name="decimal" required>
                </form>
                <input type="submit" name="send" value="Converter">
            </div>

            <div class="box">
                <div class="formulary">
                    <p>Resultado: </p>

                    <div id="out">
                        <?php arabic_to_roman(); ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>