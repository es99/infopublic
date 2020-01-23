<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Admin-area</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Wiki-Infopublic</h1>
		<p>Administrator Area</p>
	</header>
	<main>
		<section>
			<p>Entre com seus dados de acesso:</p>
			<article>
				<?php include './includes/conexao.php'; ?>
				<?php
					$login = $_POST['login'];
					$senha = $_POST['senha'];

					$query1 = "SELECT login FROM administradores WHERE login='{$login}'";
					$query2 = "SELECT senha FROM administradores WHERE senha='{$senha}'";

					$user = mysqli_query($conn, $query1);
					$password = mysqli_query($conn, $query2);

					echo "<p>login enviado pelo form: " . $login . "</p>";
					echo "<p>senha enviada pelo form: " . $senha . "</p>";
					echo "<p>user do banco: " . $user . "</p>";
					echo "<p>password do banco: " . $password . "</p>";

					if(($user == $login) && ($password == $senha)){
						echo "<p>Login efetuado com sucesso!</p>"; 
					}else{
						echo "<p style='color: red;'>O login falhou</p>";
					}
					mysqli_close($conn);
				?>
			</article>
		</section>
	</main>
	<footer>
		<nav>
			<ul>
				<li><a href="index.html">Início</a></li>
			</ul>
		</nav>
		<p>&copy; engels@infopublic.com.br</p>
	</footer>

</body>
</html>