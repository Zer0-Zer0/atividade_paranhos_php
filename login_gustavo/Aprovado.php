<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("../_templates/head.php");
    head_constructor("Login aprovado");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <div class="flex-column">
            <h1>
                Login aprovado
            </h1>
            <div class="box">
                <p>
                    Parabéns, você foi autenticado com sucesso!
                </p>
            </div>
    </main>

    <?php show("../_templates/footer.html"); ?>
</body>

</html>