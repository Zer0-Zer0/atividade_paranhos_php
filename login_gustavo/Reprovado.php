<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("../_templates/head.php");
    head_constructor("Login reprovado");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <div class="flex-column">
            <h1>
                Login reprovado
            </h1>
            <div class="box">
                <p>
                    Desculpe, suas credenciais não foram reconhecidas. Tente novamente.
                </p>
            </div>
    </main>

    <?php show("../_templates/footer.html"); ?>
</body>

</html>