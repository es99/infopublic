<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Entidades TS-Antigo</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
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
    <h1 style="text-align:center;">Entidades constantes no SRV TS-Antigo</h1>
    <hr>
      <?php

      $user = 'engels';
      $banco = 'infopublic';
      $senha = 'engelsink666';
      $local = 'localhost';

      $dbc = mysqli_connect($local, $user, $senha, $banco);
      if(!$dbc){
        die("Falha ao conectar-se com o banco de dados: " . mysqli_connect_error());
      }

      $query = "SELECT Banco_CTBP, unidade, contadorID FROM lugares WHERE servidor='antigo_ts'";
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
    <a href="../exibir_dados.html">Voltar</a><br />
    <a href="../../index.html">Início</a>
  </body>
</html>
