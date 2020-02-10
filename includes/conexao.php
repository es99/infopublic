<?php
$local = '104.41.11.75';
$user = 'engels';
$senha = 'engelsink666';
$database = 'infopublic';
$port = '45000';
$conn = mysqli_connect($local, $user, $senha, $database, $port);
if(!$conn){
	die('Erro ao conectar-se com o banco de dados: ' . mysqli_connect_error());
}
?>
