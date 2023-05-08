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
        <div class="center_abs">
            <form method="post" action="/login/code.php" class="box">
                <h1>Seja bem-vindo!</h1>

                <div class="formulary">
                    <label for="username">
                        Usuário
                    </label>
                    <input type="text" name="username">
                </div>
                <div class="formulary">
                    <label for="password">
                        Senha
                    </label>
                    <input type="password" name="password">
                </div>
                <div class="formulary">
                    <input type="submit" name="send" value="Entrar">
                </div>
            </form>
        </div>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>