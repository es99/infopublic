<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
		table, tr {
  				width: 100%;
  				text-align: center;
			}
			table, th, td {
  				border: 1px solid black;
  				border-collapse: collapse;
			}

		</style>
	</head>
	<body>
		<header>
			<h1>Wiki-Infopublic</h1>
      		<p>Sistema de informação sobre entidades, contadores, usuários e procedimentos da Infopublic</p>
		</header>
		<main>
			<section>
				<h2>Resultados</h2>
				<article>
					<?php include './includes/conexao.php';  ?>
					<?php
						$entidade = $_POST['entidade'];

						echo "<h3>Resultado para a entidade selecionada: " . $entidade . "</h3>";

						$query = "SELECT usuario.cpf, usuario.user, entidade_usuario.entidade, entidade.nome, entidade.responsavel
  									FROM usuario
    								INNER JOIN entidade_usuario ON entidade_usuario.cpf = usuario.cpf
    								INNER JOIN entidade ON entidade.codigo = entidade_usuario.entidade
    								WHERE entidade.nome LIKE '%{$entidade}%'";

						$result = mysqli_query($conn, $query);
						
						if(mysqli_num_rows($result) > 0){
							echo "<table><tr><th>CPF</th><th>Nome</th><th>Código da entidade</th><th>Entidade</th><th>Responsável</th></tr>";
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr><td>" . $row['cpf'] . "</td><td>" . $row['user'] . "</td><td>" . $row['entidade'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['responsavel'] . "</td></tr>";
						}
						echo "</table>";
					}else{
						echo "0 resultados para a busca!";
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
				</ul>
			</nav>
			<p>&copy; engels@infopublicpb.com.br</p>
		</footer>
	</body>
</html>