<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");
    
    include("../_templates/head.php");
    head_constructor("inicio");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>
    <main>
        <div class="center_flex flex_column">
            <h1>Olá, Seja bem-vindo!</h1>
            <p class="box">
                 selecione uma atividade no Header.
            </p> 
        </div>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>