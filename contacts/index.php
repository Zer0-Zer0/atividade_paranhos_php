<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("contact_writer.php");
    include("../_templates/head.php");
    include("../_templates/echoer.php");

    head_constructor("Contatos");
    ?>

    <script src="/_js/toggle.js"></script>
</head>


<body>
    <?php
    show("../_templates/header.html");
    ?>

    <main>
        <div class="center_flex flex_column">
            <form id="create_new" class="hidden box" method="post">
                <h1>Novo contato</h1>

                <div class="formulary">
                    <label for="nome">Nome</label>
                    <input type="text" name="name" required>
                </div>
                <div class="formulary">
                    <label for="email">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="formulary">
                    <label for="tel"> N° telefone</label>
                    <input type="tel" name="tel" required>
                </div>
                <div class="formulary">
                    <label for="zap"> N° telefone (whatsapp)</label>
                    <input type="tel" name="zap" required>
                </div>

                <div>
                    <input type="reset" value="apagar">
                    <input type="submit" name="send" value="criar">
                </div>
            </form>

            <div class="contacts">
                <?php
                include("contact_reader.php");
                ?>

                <div>
                    <button onclick="toggle(document.getElementById('create_new'))" class="add_contact"></button>
                </div>
            </div>
        </div>
    </main>

    <?php
    show("../_templates/footer.html");
    ?>
</body>

</html>