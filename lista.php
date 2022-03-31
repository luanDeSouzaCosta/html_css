<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
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
      </svg> Nome do sistema</p>
    <p>Segue Lista dos Produtos.</p>
<table width="300">

      <?
    # Substitua abaixo os dados, de acordo com o banco criado
    $user = "368079";
    $db = "368079";
    $password = "LuAm1003";

    # O hostname deve ser sempre localhost
    $hostname = "localhost";

    # Conecta com o servidor de banco de dados
    $conn = mysqli_connect( $hostname, $user, $password, $db ) or die( ' Erro na conexÃ£o ' );

    # Executa a query desejada
    $query = "SELECT * FROM produtos ORDER BY nomeproduto ASC";
    $result_query = mysqli_query($conn, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error($conn) );

    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($result_query);
    // calcula quantos dados retornaram
    $total = mysqli_num_rows($result_query);

    if ($total > 0) { ?>
<tr><td>Nome</td><td>Condição</td><td>Vencimento</td><td>Dias</td></tr>
<?
      do {

        $ajuste = 1;
        $condicao = "Fechado";
        if ($linha['status']==1) {
          $ajuste = 0.75;
          $condicao = "Aberto";
        }

        $data1 = date('Y-m-d', strtotime('+'.round($linha['prazo']*$ajuste).' days', strtotime($linha['datalote'])));
        $data1 = explode("-", $data1); //Transforma em array
        $data1 = mktime(0, 0, 0, $data1[1], $data1[2], $data1[0]); // Utiliza o array para pegar o unix timestamp da data em questão

        $data2 = time(); //Pega o unix timestamp da momento atual

        $diferenca = ceil(($data1-$data2)/86400); // faz a diferença dividida por 86400 para termos o resultado em dias e arredondamos para cima com ceil

        $cor = "Red";

        if ($diferenca >= 0) $cor = "Green";
         ?>

              <tr><td><?=$linha['nomeproduto']?></td><td><?=$condicao?></td><td><?=date('d/m/Y', strtotime('+'.round($linha['prazo']*$ajuste).' days', strtotime($linha['datalote'])))?></td><td bgcolor="<?=$cor?>" align="center"><?=$diferenca?></td></tr>

          <?

      }while($linha = mysqli_fetch_assoc($result_query));
    }

    mysqli_free_result($result_query);

    ?></table>
<br>
<Br>
<p align="center">Quer se deslogar? <a href="logoff.php" class="link">Clique aqui!</a></p>
</div>
</body>
</html>
