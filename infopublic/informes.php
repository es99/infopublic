<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Wiki-Infopublic</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
  </head>
  <body>
    <header>
      <h1>Wiki-Infopublic</h1>
      <p>Sistema de informação sobre entidades, contadores, usuários e procedimentos da Infopublic</p>
    </header>

	<main>
		<section>
			<h2>Informe Suporte Infopublic</h2>
			<article>
				<?php include '../includes/conexao.php'; ?>
        <?php
          $mensagem = $_POST['message'];
          $query = "INSERT INTO informes (texto, data) VALUES ('$mensagem', NOW())";
          $result = mysqli_query($conn, $query);
          if($result){
            echo "<p>Gravação do informe bem sucedida!</p>";
          }else{
            echo "<p>Houve algum erro, tente novamente.</p>";
          }
          mysqli_close($conn);
        ?>
			</article>
		</section>
	</main>

    <footer>
      <nav>
        <ul>
          <li><a href="../index.php">Início</a></li>
        </ul>
      </nav>
      <p>&copy; engels@infopublic.com.br</p>
    </footer>


  </body>
</html>
