<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("../_templates/head.php");
    head_constructor("Login");
    ?>
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <div class="flex-column">
            <h1>Login</h1>

            <form method="post" action="/login_kezia/login.php" class="box">
                <div class="flex-row spaced-between">
                    <label for="username">
                        Username
                    </label>

                    <input type="text" id="username" name="username">
                </div>

                <div class="flex-row spaced-between">
                    <label for="password">
                        Password
                    </label>

                    <input type="password" id="password" name="password">
                </div>

                <div class="flex-row spaced-between">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </main>

    <?php show("../_templates/footer.html"); ?>
</body>

</html>