<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wiki-Infopublic</title>
    <link rel="stylesheet" type="text/css" href="style.css?version=12" />
  </head>
  <body>
    <header>
      <h1 class="title">Wiki-Infopublic</h1>
      <p>Sistema de informação sobre entidades, contadores, usuários e procedimentos da Infopublic</p>
      <nav>
        <ul>
          <li><a href="./infopublic/exibir_contadores.php">Contadores</a></li>
          <li><a href="./infopublic/exibir_dados.html">Buscas</a></li>
          <li><a href="cadastros.html">Cadastros</a></li>
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
					<input type="text" id="entidade" name="entidade" value="Entre com o nome da entidade" size="50"><br />
					<input type="submit" value="Pesquisar">
				</form>
			</article>
      <article>
        <h3>Entidade Folha: </h3>
        <form action="retorna_entidade_folha.php" method="POST">
          <input type="text" id="entidade_folha" name="entidade_folha" value="Entre com o nome da entidade" size="50"><br />
          <input type="submit" value="Pesquisar">
        </form>
      </article>
		</section>
	</main>

    <footer>
      <p><a href="http://www.infopublic.com.br">Infopublic</a></p>
      <p>&copy; engels@infopublic.com.br</p>
    </footer>


  </body>
</html>
