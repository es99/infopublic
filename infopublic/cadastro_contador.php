<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de contadores</title>
  </head>
  <body>
    <h1 style="text-align:center;">Cadastro de contadores</h1>
    <hr>
    <h2 style="text-align:center;">Contador cadastrado com sucesso!</h2>
    <a href="cadastro_contadores.html">Voltar</a>
    <?php
      $banco = 'infopublic';
      $usuario = 'engels';
      $senha = 'engelsink666';
      $local = 'localhost';

      $dbc = mysqli_connect($local, $usuario, $senha, $banco) or die('Falha ao se conectar com o banco de dados!');

      $nome = $_POST['nome'];
      $sobrenome = $_POST['sobrenome'];
      $cpf = $_POST['cpf'];
      $senha_contador = $_POST['contador-pass'];

      $query = "INSERT INTO contadores (nome, sobrenome, cpf, senha_rdp) VALUES ('$nome', '$sobrenome', '$cpf', '$senha_contador')";

      $result = mysqli_query($dbc, $query) or die('Erro de inserção no banco de dados');

      mysqli_close($dbc);
    ?>
  </body>
</html>
