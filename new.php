<?php

session_start();


include 'banco.php';

if (isset($_POST['email']) && isset($_POST['senha'])) {
  $email = $_POST['email'];
  $senha  = $_POST['senha'];
  $senha = md5($senha);

  $sql = $pdo->prepare('SELECT COUNT(*) FROM usuarios WHERE email = :email');
  $sql->bindParam(":email", $email);
  $sql->execute();
  $exists = $sql->fetchColumn();

  if ($exists > 0) {
    echo "Usuário já foi registrado!";
  } else {

    $sql = $pdo->prepare('INSERT INTO usuarios VALUES (NULL, :email, :senha)');
    $sql->bindParam(":senha", $senha);
    $sql->bindParam(":email", $email);
    $sql->execute();
  }
}

?>

<!DOCTYPE html>

<html>

<head>
  <title>GAR SYSTEM CORP</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="icon" href="img/logo_redweb.svg">

</head>

<body>
  <div class="container">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="start.php">Home</a></li>
          <li class="breadcrumb-item active" arixctesteia-current="page">Cadastrar usuários</li>
        </ol>
      </nav>
    </div>
    <h1>Cadastrar usuário <a href="list.php"><button type="button" class="btn btn-success">Listar</button></a></h1>

    <form method="POST" action="">
      <div class="form-group">
        <small class="form-text text-muted">Digite um email válido</small>
      </div>

      <div class="row">
        <div class="col">
          <input type="email" name="email" required class="form-control" placeholder="Digite seu e-mail">
        </div>

        <div class="col">
          <input type="text" name="senha" required class="form-control" placeholder="Digite Sua senha">




        </div>



      </div>

      <br>

      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a href="start.php"><button type="button" class="btn btn-success">Home</button></a></h1>


      <div class="php">

      </div>


    </form>
  </div>
</body>

</html>