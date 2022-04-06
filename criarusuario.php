<?php


// recebe as variaveis do formulário
$login = $_POST['nome'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
$email = $_POST['email'];

if ($senha != $senha2 ){
    die( 'Senhas diferentes' );
} 

# Substitua abaixo os dados, de acordo com o banco criado
$user = "368079";
$password = "LuAm1003";

# O hostname deve ser sempre localhost
$hostname = "localhost";

# Conecta com o servidor de banco de dados
mysql_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' );

# Executa a query desejada
$query = "INSERT INTO cadastro (email, nome, senha) VALUES (" & $email & "," & $login & "," & $senha &")
";
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

?>
