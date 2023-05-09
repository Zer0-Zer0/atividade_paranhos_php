<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("../_templates/head.php");
    head_constructor("Acesso negado");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <div class="center_flex flex_column">
            <h1>
                ACESSO NEGADO
            </h1>

            <p class="box">
                Usuário ou senha incorretos
            </p>
        </div>
    </main>

    <?php show("../_templates/footer.html"); ?>
</body>

</html>