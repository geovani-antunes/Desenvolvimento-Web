<?php
require_once('banco.php'); // solicita requisição do banco de dados

include('session.php'); //valida sessãp
$session = new poo;
$session->session();

if (isset($_POST['email'])) {

  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $id = $_POST['id'];
  $senha = md5($senha);


  
  $sql = $pdo->prepare("UPDATE usuarios SET email = :email, senha = :senha WHERE id = :id"); // realiza o UPDATE no DB
  $sql->bindParam(':email', $email);
  $sql->bindParam(':senha', $senha);
  $sql->bindParam(':id', $id);

  $sql->execute();

  header('Location: list.php');
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id=:id;"); //lista os dados do banco
  $sql->bindParam(':id', $id);
  $sql->execute();
  $result = $sql->fetch();
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
          <li class="breadcrumb-item active" aria-current="page">Editar usuários</li>
        </ol>
      </nav>
    </div>
    <h1>Editar usuário <a href="list.php"></a></h1>

    <form method="POST" action="edit.php">

      <input type="hidden" name="id" value="<?php echo $result['id']; ?>">

      <div class="form-group">
        <small class="form-text text-muted">Digite um email válido</small>
      </div>

      <div class="row">
        <div class="col">
          <input type="email" name="email" required class="form-control" value="<?php echo $result['email']; ?>">
        </div>

        <div class="col">
          <input type="text" name="senha" required class="form-control" placeholder="Digite a nova senha">
        </div>




      </div>

      <br>

      <button type="submit" class="btn btn-primary">Atualizar</button>
      <a href="list.php"><button type="button" class="btn btn-success">Listar</button></a></h1>

    </form>
  </div>
</body>

</html>