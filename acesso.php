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
			<article>
				<?php include './includes/conexao.php'; ?>
				<?php
					$login = $_POST['login'];
					$senha = $_POST['senha'];

					$query = "SELECT * FROM administradores WHERE login='{$login}'";
					$result = mysqli_query($conn, $query);

					if(mysqli_num_rows($result) > 0){
						$row = mysqli_fetch_array($result);
						if(($row['login'] == $login) && ($row['senha'] == $senha)){
							echo "<p>" . "Login efetuado com sucesso!" . "</p>";
							echo "<h3>" . "Escolha uma das opções abaixo:" . "</h3>";
							echo "<nav><ul>";
							echo "<li><a href='./infopublic/cadastro_unidade.html'>Cadastro de unidade</a></li>";
							echo "<li><a href='./infopublic/cadastro_contadores.html'>Cadastro de contadores</a></li>";
							echo "<li><a href='./infopublic/cadastro_informes.html'>Cadastrar informe</a></li>";
							echo "</ul></nav>";
						}else{
							echo "<p>Usuário ou senha incorretos!</p>";
						}
					}else{
						echo "<p>Dados de administrador não encontrado!</p>";
					}
					mysqli_close($conn);
				?>
			</article>
		</section>
	</main>
	<footer>
		<nav>
			<ul>
				<li><a href="index.php">Início</a></li>
				<li><a href="admin-area.html">Voltar</a></li>
			</ul>
		</nav>
		<p>&copy; engels@infopublic.com.br</p>
	</footer>

</body>
</html>
