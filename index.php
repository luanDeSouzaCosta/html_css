<?php

session_start();
if((isset ($_SESSION['login']) == true) and (isset ($_SESSION['senha']) == true))
{
  header('location:lista.php');
  }

$logado = $_SESSION['login'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Login</title>
</head>
<body>
    <div class="formCadLog">
    <p class="nomeSistema"align="center"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
      </svg> L.S.C Controle de Remédios</p>
    <p>Informe seus dados para realizar login no sistema.</p>
    <table width="300", height="230",padding="5">
        
    <?php
    $msg = $_GET['msg'];
    if ($msg != null) {
      ?>
   <br><p><? echo $msg; ?></p>
      <?
    }
    ?>
    <form action="login.php" method="post">
        <ul>
            <li>
                <input name="email" type="email" placeholder="E-mail" required  >
            </li>
            <li>
                <input name="senha" type="password" placeholder="Senha" required>
            </li>
    </ul>
        <input type="submit" value="Acessar" class="btnNext"></button>
        <p align="center">Não possui login? <a href="telacadastro.php" class="link">Cadastre-se</a></p>
    </form>
</div>
</body>
</html>
