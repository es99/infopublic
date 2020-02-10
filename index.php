<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wiki-Infopublic</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Wiki-Infopublic</h1>
      <p>Sistema de informação sobre entidades, contadores, usuários e procedimentos da Infopublic</p>
      <nav>
        <ul>
          <li><a href="./infopublic/exibir_contadores.php">Contadores</a></li>
          <li><a href="./infopublic/exibir_dados.html">Buscas</a></li>
          <li><a href="cadastro_servidores.html">Servidores</a></li>
          <li><a href="usuarios.html">Usuários</a></li>
        </ul>
      </nav>
    </header>

	<main>
		<section>
			<h2>Busca rápida PJCTB/PJFOLHA</h2>
			<article>
				<h3>Entidade Contabilidade: </h3>
				<form action="retorna_entidade.php" method="POST">
					<label for="entidade">Digite o nome da entidade:</label>
					<input type="text" id="entidade" name="entidade"><br />
					<input type="submit" value="Pesquisar">
				</form>
			</article>
      <article>
        <h3>Entidade Folha: </h3>
        <form action="retorna_entidade_folha.php" method="POST">
          <label for="entidade_folha">Digite o nome da entidade: </label>
          <input type="text" id="entidade_folha" name="entidade_folha"><br />
          <input type="submit" value="Pesquisar">
        </form>
      </article>
		</section>
		<section>
			<h2>Informes</h2>
			<p>Quadro de avisos relacionados ao suporte técnico Infopublic</p>
      <article>
        <?php include './includes/conexao.php'; ?>
        <?php
            $query = "SELECT texto, data FROM informes";
            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) > 0){
              echo "<table><tr><th>Painel</th><th>Data</th></tr>";
              while($row = mysqli_fetch_array($result)){
                echo "<tr><td>" . $row['texto'] . "</td><td>" . $row['data'] . "</td></tr>";
              }
              echo "</table>";
            }else{
              echo "<p>Sem informes no momento.</p>";
            }
            mysqli_close($conn);
        ?>
      </article>
		</section>
	</main>

    <footer>
      <nav>
        <ul>
          <li><a href="http://www.infopublic.com.br">Infopublic - Sistemas para orgãos públicos</a></li>
          <li><a href="admin-area.html">Admin</a></li>
        </ul>
      </nav>
      <p>&copy; engels@infopublic.com.br</p>
    </footer>


  </body>
</html>
