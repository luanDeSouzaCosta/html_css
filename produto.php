<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['login'];


// recebe as variaveis do formulário
$nomeProduto = $_POST['nomeProduto'];
$dataValidade = $_POST['dataValidade'];
$dataInicio = $_POST['datainicio'];
$status = $_POST['status'];

# Substitua abaixo os dados, de acordo com o banco criado
$user = "368079";
$password = "LuAm1003";

# O hostname deve ser sempre localhost
$hostname = "localhost";

# Conecta com o servidor de banco de dados
mysql_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' );

# Executa a query desejada
$query = "INSERT INTO produtos (nomeproduto, prazo, status, datalote) VALUES (" & $nomeProtudot & "," & $dataValidade & "," & $status & "," & $dataInicio &")
";
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

?>
