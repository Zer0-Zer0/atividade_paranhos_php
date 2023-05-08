<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Conversor Decimal-Romano</title>
</head>

<body>
    <main class="center_flex">
        <h1 class="box">Conversor de números decimais para romanos</h1>

        <p class="box">1-3999</p>

        <form method="post" class="box">
            <input type="number" name="decimal">
            <input type="submit" name="send" value="Converter">
        </form>

        <div id="out" class="box">
            <?php require_once("code.php")?>
        </div>
    </main>
</body>

</html>