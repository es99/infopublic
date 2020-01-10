<!DOCTYPE html>
<html lang="pt" dir="ltr">
	<head>
		<meta charset="utf-8">
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
		<h1 style="text-align: center;">Entidades constantes na VM-10.0.6.4</h1>
		<hr>
			<?php
				$local = "localhost";
				$user = "engels";
				$senha = "engelsink666";
				$banco = "infopublic";

				$dbc = mysqli_connect($local, $user, $senha, $banco);
				if(!$dbc){
					die("Erro ao conectar-se com o servidor de banco: " . mysqli_connect_error());
				}

				$query = "SELECT Banco_CTBP, unidade, contadorID FROM lugares WHERE servidor='vm_10.0.6.4'";

				$result = mysqli_query($dbc, $query);

				if(mysqli_num_rows($result) > 0){
					echo "<table><tr><th>CTBP</th><th>Entidade</th><th>ID do Contador</th></tr>";
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr><td>" . $row['Banco_CTBP'] . "</td><td>" . $row['unidade'] . "</td><td>" . $row['contadorID'] . "</td></tr>";
						}
						echo "</table>";
						}else {
							echo "0 resultados para a busca.";
						}

		mysqli_close($dbc);
			?>
		<hr>
		<a href="../exibir_dados.html">Voltar</a><br />
		<a href="../../index.html">Início</a>
	</body>
</html>
