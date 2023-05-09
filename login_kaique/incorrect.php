<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("../_templates/head.php");
    head_constructor("Acesso negado");
    ?>

    <link rel="stylesheet" href="../../_css/style.css">
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <div class="  flex-column">
            <h1>
                ACESSO NEGADO
            </h1>

            <div class="box">
                <p>
                    Usuário ou senha incorretos
                </p>
            </div>
        </div>
    </main>

    <?php show("../_templates/footer.html"); ?>
</body>

</html>