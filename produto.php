<?php

session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['login'];


// recebe as variaveis do formulário
$nomeProduto = $_POST['nomeProduto'];
$dataValidade = intval($_POST['dataValidade']);
$dataInicio = implode("-",array_reverse(explode("/",$_POST['datainicio'])));
//$dataInicio = Datetime::createFromFormat('d/m/Y', $_POST['datainicio']);
//$DateTime = DateTime::createFromFormat('Y-m-d', $originalDate);
$status = intval($_POST['status']);

# Substitua abaixo os dados, de acordo com o banco criado
$user = "368079";
$password = "LuAm1003";
$db = "368079";

# O hostname deve ser sempre localhost
$hostname = "localhost";

# Conecta com o servidor de banco de dados
$conn = mysqli_connect( $hostname, $user, $password, $db ) or die( ' Erro na conexÃ£o ' );


# Executa a query desejada
$query = "INSERT INTO produtos (nomeproduto, prazo, status, datalote) VALUES ('$nomeProduto','$dataValidade','$status','$dataInicio')
";
$result_query = mysqli_query($conn, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error($conn) );

mysqli_close($conn);

header("location: lista.php?msg=Usuário '$nomeProduto' Cadastrado");

?>
