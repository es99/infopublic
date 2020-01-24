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
				$numero_entidades = mysqli_num_rows($result);

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
			<p><?php echo "Número de entidades encontradas: " . $numero_entidades; ?></p>
		<hr>
			<h2>Usuários por entidade</h2>
		<hr>
			<form action="./usuarios_entidade/vm4_usuarios.php" method="POST">
				<select name="entidades">
					<option value="1">PM Alagoa Nova</option>
					<option value="39">PM Assunção</option>
					<option value="40">PM Alagoa Grande</option>
					<option value="41">PM Riacho de Santo Antônio</option>
					<option value="42">PM Umbuzeiro</option>
					<option value="43">PM Camalaú</option>
					<option value="44">PM Equador</option>
					<option value="45">PM S. Sebastião de Lagoa de Roça</option>
					<option value="46">PM Massaranduba</option>
					<option value="48">PM Livramento</option>
					<option value="49">PM Aroeiras</option>
					<option value="51">PM Parari</option>
				</select><br />
				<input type="submit" value="Pesquisar">
			</form>
		<hr>
		<a href="../exibir_dados.html">Voltar</a><br />
		<a href="../../index.php">Início</a>
	</body>
</html>
