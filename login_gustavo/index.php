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
<html>
<head>
  <?php include("../_templates/echoer.php")?>

  <title>Página de Login</title>
</head>
<body>
<?php
  show("../_templates/header.html");
  ?>
<main>
  <h2>Por favor, faça o login</h2>
  <?php
  // Exibe uma mensagem de erro se houver algum erro
  if (isset($erro)) {
    echo "<p style='color: red;'>$erro</p>";
  }
  ?>
  <form method="post">
<label for="username">Nome de usuário:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Senha:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login">
  </form>
</main>
<footer>
  Site feito por Gustavo Costa Santos da EI-32
</footer>
</body>
</html>