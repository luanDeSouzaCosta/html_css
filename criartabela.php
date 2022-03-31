<?php

# Substitua abaixo os dados, de acordo com o banco criado
$user = "368079";
$password = "LuAm1003";
'$database = "cadastro";'

# O hostname deve ser sempre localhost
$hostname = "localhost";

# Conecta com o servidor de banco de dados
mysql_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' );

# Executa a query desejada
$query = "CREATE TABLE cadastro (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50) NOT NULL,
nome VARCHAR(30) NOT NULL,
senha VARCHAR(30) NOT NULL,
)
";
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

# Seleciona o banco de dados
'mysql_select_db("cadastro") or die( 'Erro na seleção do banco' );'



# Exibe os registros na tela
'while ($row = mysql_fetch_array( $result_query )) { print $row[codigo] . " -- " . $row[nome] . " -- " . $row[endereco]; }'

?>
