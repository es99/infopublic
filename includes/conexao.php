<?php
$local = '191.232.52.106';
$user = 'engels';
$senha = 'engelsink666';
$database = 'infopublic';
$port = '45000';
header("Content-type: text/html; charset=utf-8");
$conn = mysqli_connect($local, $user, $senha, $database, $port);
if(!$conn){
	die('Erro ao conectar-se com o banco de dados: ' . mysqli_connect_error());
}
?>
