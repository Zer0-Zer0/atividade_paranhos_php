<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");
    include("../_templates/head.php");
    head_constructor("arabico para romano");
    ?>
    <script src="../_js/clamp.js"></script>
</head>

<body>
    <?php show("../_templates/header.html"); ?>
    <main>
        <div class="center_abs box">
            <h1>números arábicos para romanos</h1>

            <form method="post">
                <div class="formulary">
                    <p>1-3999</p>
                </div>
                <div class="formulary">
                    <input onchange="clamp(this,1,3999)" type="number" name="decimal">
                </div>
                <div class="formulary">
                    <input type="submit" name="send" value="Converter">
                </div>
            </form>

            <div id="out" class="formulary">
                <p>Resultado: </p>
                <?php
                include("code.php");
                ?>
            </div>
        </div>

    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>