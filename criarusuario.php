<?php


// recebe as variaveis do formulÃ¡rio
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
$email = $_POST['email'];

if ($senha != $senha2){
    die( 'Senhas diferentes' );
}

# Substitua abaixo os dados, de acordo com o banco criado
$user = "368079";
$db = "368079";
$password = "LuAm1003";

# O hostname deve ser sempre localhost
$hostname = "localhost";

# Conecta com o servidor de banco de dados
$conn = mysqli_connect( $hostname, $user, $password, $db ) or die( ' Erro na conexÃ£o ' );


# Executa a query desejada
$query = "INSERT INTO cadastro (login, nome, senha) VALUES ('$email','$nome','$senha')";
$result_query = mysqli_query($conn, $query) or die(' Erro na query:' . $query . ' ' . mysqli_error($conn) );

mysqli_close($conn);

header("location: index.php?msg=UsuarioCadastrado");

?>
