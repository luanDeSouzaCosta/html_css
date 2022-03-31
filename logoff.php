<?php
// session_start inicia a sessão
session_start();
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:index.php');

?>
