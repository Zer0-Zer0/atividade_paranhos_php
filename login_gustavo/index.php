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
      <h1>Login</h1>

      <form method="post" class="box">
        <h2>Por favor, faça o login</h2>

        <div class="flex-row spaced-between">
          <label for="username">
            Nome de usuário
          </label>

          <input type="text" name="username" required>
        </div>

        <div class="flex-row spaced-between">
          <label for="password">
            Senha
          </label>

          <input type="password" name="password" required>
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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Verifica se o usuário e a senha foram enviados pelo formulário
  if (!empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifica se o usuário e a senha estão corretos
    if ($username === "123" && $password === "123") {
      // Redireciona para a página de aprovação
      header("Location: /login_gustavo/Aprovado.php");
      exit();
    } else {
      // Redireciona para a página de reprovação
      header("Location: /login_gustavo/Reprovado.php");
      exit();
    }
  }
}
?>
