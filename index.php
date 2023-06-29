<?php
session_start();

include('banco.php'); // Requisita conexão DB

if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $senha = md5($senha);

  $sql = $pdo->prepare('SELECT email, senha FROM usuarios WHERE email = :email AND senha = :senha'); 
  $sql->bindParam(":senha", $senha);
  $sql->bindParam(":email", $email);
  $result = $sql->execute();

  if ($result) {
    $row_count = $sql->rowCount();
    if ($row_count == 1) {
      $_SESSION['username'] = $email;
      header('Location: start.php');
      exit;
    } else {
      $login_error = "Endereço de email ou senha inválidos.";
    }
  } else {
    $login_error = "Algo deu errado ao tentar fazer login. Por favor, tente novamente mais tarde.";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/logo_redweb.svg">


  <title>GAR SYSTEM CORP</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <form class="form-signin" method="POST" action="">
    <img class="mb-4" src="img/logo_blue.svg" alt="" width="250" height="240">
    <h1 class="h3 mb-3 font-weight-normal">Por favor entre</h1>

    <?php if (!empty($login_error)) : ?>
      <div class="alert alert-danger" role="alert">
        <?php echo $login_error; ?>
      </div>
    <?php endif; ?>


    <label for="inputEmail" class="sr-only">Endereço de Email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" name="email">

    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha">
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembre-me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    <br>
    <button class="btn btn-lg btn-secundary btn-block text-white bg-dark" type="button" onclick="location='newlogin.php'">Cadastre-se</button>

    <p class="mt-5 mb-3 text-muted">&copy; Geovani Antunes - 2023</p>



  </form>



</body>

</html>