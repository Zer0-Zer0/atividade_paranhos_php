<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("../_templates/head.php");
    head_constructor("Acesso permitido");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <div class="center_flex flex_column">
            <h1>
                ACESSO PERMITIDO
            </h1>

            <p class="box">
                Bem-vindo de volta admin!
            </p>
        </div>
    </main>

    <?php show("../_templates/footer.html"); ?>
</body>

</html>