<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("contact_reader.php");
    include("contact_writer.php");

    include("../_templates/head.php");
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
            <form id="create_new" class="center_abs hidden box" method="post">
                <h1>Novo contato</h1>

                <div class="formulary">
                    <label for="nome">Nome</label>
                    <input maxlength="64" type="text" name="name" required>
                </div>
                <div class="formulary">
                    <label for="email">Email</label>
                    <input maxlength="64" type="email" name="email" required>
                </div>
                <div class="formulary">
                    <label for="tel"> N° telefone</label>
                    <input maxlength="11" type="tel" name="tel" required>
                </div>
                <div class="formulary">
                    <label for="zap"> N° telefone (whatsapp)</label>
                    <input maxlength="11" type="tel" name="zap" required>
                </div>

                <div>
                    <input type="reset" value="apagar">
                    <input type="submit" name="send" value="criar">
                </div>
            </form>
        </div>
        <div class="contacts">
                <?php echo_contacts(); ?>
                <div>
                    <button onclick="toggle(document.getElementById('create_new'))" class="add_contact"></button>
                </div>
            </div>
    </main>

    <?php
    show("../_templates/footer.html");
    ?>
</body>

</html>