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
            <h1>
                Número romano
            </h1>

            <div class="box center_flex">
                <h2>Escolha o discente</h2>

                <a href="../romano_gustavo" class="no_deco">
                Gustavo Costa Santos
                </a>
                <a href="../romano_kaique" class="no_deco">
                Kaique Costa Nobre
                </a>
                <a href="../romano_kezia" class="no_deco">
                Kezia Silva Santos
                </a>
            </div>
        </div>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>