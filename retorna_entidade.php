<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wiki-Infopublic</title>
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
			<h2>Resultado da busca:</h2>
			<article>
        <?php include './includes/conexao.php'; ?>
				<?php
          $entidade = $_POST['entidade'];
					$query = "SELECT * FROM lugares WHERE unidade LIKE '%{$entidade}%'";
					$result = mysqli_query($conn, $query);
					if(mysqli_num_rows($result) > 0){
						echo "<table><tr><th>Banco_CTBP</th><th>Servidor</th><th>Contador ID</th><th>Entidade</th></tr>";
						while($row = mysqli_fetch_assoc($result)){
							echo "<tr><td>" . $row['Banco_CTBP'] . "</td><td>" . $row['servidor'] . "</td><td>" . $row['contadorID'] . "</td><td>" . $row['unidade'] . "</td></tr>";
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
		<p>Infopublic - Sistemas para orgãos públicos</p>
		<nav>
        <ul>
          <li><a href="index.php">Voltar</a></li>
        </ul>
      </nav>
      <p>&copy; engels@infopublic.com.br</p>
    </footer>


  </body>
</html>
