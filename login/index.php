<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");
    
    include("../_templates/head.php");
    head_constructor("Página de login");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>
    <main>
        <div class="center_flex flex_column">
            <form method="post" action="/login/code.php" class="box">
                <h1>Seja bem-vindo!</h1>

                <div class="flex_row">
                    <label for="username">
                        Usuário
                    </label>
                    <input type="text" name="username">
                </div>
                <div class="flex_row">
                    <label for="password">
                        Senha
                    </label>
                    <input type="password" name="password">
                </div>
                <div class="flex_row">
                    <input type="submit" name="send" value="Entrar">
                </div>
            </form>
        </div>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>