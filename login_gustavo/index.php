<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verifica se o usuário e a senha foram enviados pelo formulário
  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica se o usuário e a senha estão corretos
    if ($username === "123" && $password === "123") {
      // Redireciona para a página de aprovação
      header("Location: Aprovado.php");
      exit();
    } else {
      // Redireciona para a página de reprovação
      header("Location: Reprovado.php");
      exit();
    }
  } else {
    // Exibe uma mensagem de erro se o usuário ou a senha estiverem em branco
    $erro = "Por favor, preencha todos os campos.";
  }
}
?>

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
    <div class="flex-column">
      <h2>Por favor, faça o login</h2>
      <form method="post" class="box flex-column">
        <div class="flex-row spaced-between">
          <label for="username">Nome de usuário:</label>
          <input type="text" id="username" name="username">
        </div>
        <div class="flex-row spaced-between">
          <label for="password">Senha:</label>
          <input type="password" id="password" name="password">
        </div>
        <div class="flex-row spaced-between">
          <input type="submit" value="Login">
        </div>
        <?php
        if (isset($erro)) {
          echo "<p style='color: red;'>$erro</p>";
        }
        ?>
      </form>
    </div>
  </main>
  <footer>
    <p>Site feito por Gustavo Costa Santos da EI-32</p>
  </footer>
</body>

</html>