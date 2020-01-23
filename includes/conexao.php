<?php
$local = 'localhost';
$user = 'engels';
$senha = 'engelsink666';
$database = 'infopublic';

$conn = mysqli_connect($local, $user, $senha, $database);
if(!$conn){
	die('Erro ao conectar-se com o banco de dados: ' . mysqli_connect_error());
}
?>