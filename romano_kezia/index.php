<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php
    include("../_templates/echoer.php");

    include("code.php");

    include("../_templates/head.php");
    head_constructor("Conversor de Números Romanos");
    ?>

    <script src="../_js/clamp.js"></script>
</head>

<body>
    <?php show("../_templates/header.html"); ?>

    <main>
        <h1>Conversor de Números Romanos</h1>
        <?php if (isset($erro)) {
            echo '<p>$erro</p>';
        } ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="numero">Insira um número entre 1 e 3999:</label>
            <input type="number" name="numero" id="numero" min="1" max="3999" required>
            <button type="submit">Converter</button>
        </form>
        <?php if (isset($romano)) { ?>
            <p>O número <?php echo $numero; ?> em algarismos romanos é: <?php echo $romano; ?></p>
        <?php } ?>
    </main>

    <?php show("../_templates/footer.html"); ?>
</body>

</html>