<?php

# Substitua abaixo os dados, de acordo com o banco criado
$user = "usuario_do_banco";
$password = "senha_do_banco";
$database = "nome_do_banco";

# O hostname deve ser sempre localhost
$hostname = "localhost";

# Conecta com o servidor de banco de dados
mysql_connect( $hostname, $user, $password ) or die( ' Erro na conexão ' );

# Seleciona o banco de dados
mysql_select_db( $database ) or die( 'Erro na seleção do banco' );

# Executa a query desejada
$query = "SELECT codigo,nome,endereco FROM tabela";
$result_query = mysql_query( $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() );

# Exibe os registros na tela
while ($row = mysql_fetch_array( $result_query )) { print $row[codigo] . " -- " . $row[nome] . " -- " . $row[endereco]; }

?>
