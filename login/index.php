<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/head.php");
    include("../_templates/echoer.php");
    head_constructor("Página de login");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>
    <main>
        <form method="post" action="/login/code.php">
            <div class="element">
                <label for="username">
                    Usuário
                </label>
                <input type="text" name="username">
            </div>
            <div class="element">
                <label for="password">
                    Senha
                </label>
                <input type="password" name="password">
            </div>
            <div class="element">
                <input type="submit" name="send">
            </div>
        </form>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>