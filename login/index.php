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
        <div class="  flex-column">
            <h1>
                Login
            </h1>

            <div class="box  ">
                <h2>
                    Escolha o discente
                </h2>

                <a href="../login_gustavo" class="no-deco">
                Gustavo Costa Santos
                </a>
                <a href="../login_kaique" class="no-deco">
                Kaique Costa Nobre
                </a>
                <a href="../login_kezia" class="no-deco">
                Kezia Silva Santos
                </a>
            </div>
        </div>
    </main>
    <?php show("../_templates/footer.html"); ?>
</body>

</html>