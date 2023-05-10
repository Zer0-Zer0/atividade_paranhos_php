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
        <div class="flex-column">
            <h1>
                Números romanos
            </h1>

            <div class="box">
                <h2>Escolha o discente</h2>

                <a href="../romano_gustavo" class="no-deco">
                    Gustavo Costa Santos
                </a>
                <a href="../romano_kaique" class="no-deco">
                    Kaique Costa Nobre
                </a>
                <a href="../romano_kezia" class="no-deco">
                    Kezia Silva Santos
                </a>
            </div>
        </div>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>