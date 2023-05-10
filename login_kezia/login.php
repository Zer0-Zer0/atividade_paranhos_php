<?php
$usuarios = array(
  'usuario1' => 'senha1',
  'usuario2' => 'senha2',
  'usuario3' => 'senha3'
);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
    $_SESSION['usuario'] = $username;
    header('Location: acesso_permitido.php');
    exit;
  } else {
    header('Location: acesso_negado.php');
    exit;
  }
}

?>