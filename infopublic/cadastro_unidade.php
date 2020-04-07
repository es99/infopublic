<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de unidades</title>
  </head>
  <body>
    <h1 style="text-align:center;">Cadastro de unidades</h1>
    <hr>
    <h2 style="text-align:center;">Unidade cadastrada com sucesso!</h2><br />
    <?php include '../includes/conexao.php'; ?>
    <?php
      

      $id_unidade= $_POST['id'];
      $unidade= $_POST['nome'];
      $servidor= $_POST['servidor'];
      $id_contador= $_POST['id_contador'];

      echo 'Dados inseridos na tabela: <br />';
      echo 'Banco_CTBP: ' . $id_unidade . '<br />';
      echo 'unidade: ' . $unidade . '<br />';
      echo 'servidor: ' . $servidor . '<br />';
      echo 'contadorID: ' . $id_contador . '<br />';


      $query = "INSERT INTO lugares (Banco_CTBP, unidade, servidor, contadorID) VALUES ('$id_unidade', '$unidade', '$servidor', '$id_contador')";

      $result = mysqli_query($conn, $query) or die('Erro de inserção no banco de dados, erro: ' . $result);

      mysqli_close($conn);
    ?>
    <a href="cadastro_unidade.html">Voltar</a><br />
  </body>
</html>
