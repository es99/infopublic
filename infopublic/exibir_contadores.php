<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Contadores cadastrados</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../style.css">
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
			<h1>Wiki-Infopublic/Contadores</h1>
			<p>Contadores cadastrados na Contabilidade (PJCTB)</p>
		</header>
		<main>
			<section>
				<article>
					<?php include '../includes/conexao.php'; ?>
					<?php
						$query = "SELECT contadorID, nome, cpf, sobrenome, senha_rdp FROM contadores";
						$result = mysqli_query($conn, $query);
						$num_contadores = mysqli_num_rows($result);

						if($num_contadores > 0){
							echo "<table><tr><th>ID</th><th>Nome</th><th>CPF</th><th>Sobrenome</th><th>Senha-RDP</th></tr>";
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr><td>" . $row['contadorID'] . "</td><td>" . $row['nome'] . "</td><td>" . $row['cpf'] . "</td><td>" . $row['sobrenome'] . "</td><td>" . $row['senha_rdp'] . "</td></tr>";
							}
							echo "</table>";
						}else{
							echo "Não foram encontrados dados para essa tabela.";
						}
						mysqli_close($conn);
					 ?>
				</article>
			</section>
		</main>
		<footer>
			<nav>
				<ul>
					<li><a href="contadores.php">Voltar</a></li>
					<li><a href="../index.html">Início</a></li>
				</ul>
			</nav>
			<?php include '../includes/footer.php'; ?>
		</footer>
	</body>
</html>