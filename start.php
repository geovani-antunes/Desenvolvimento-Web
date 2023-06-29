<?php
include('banco.php');
include('session.php');
$session = new poo;
$session->session();

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
	<div class="pos-f-t">
		<nav class="navbar navbar-dark bg-dark">

			<div>
			<span class="text-white"><img src="img/logo_dark.svg" alt="Descrição da imagem" width="30" height="30" /> Seja bem vindo Dev Ninja -  Logado como: <?php echo $_SESSION['username']; ?></span>
			</div>
			<a href="logout.php" class="text-muted">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16" style="fill: red;">
					<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
					<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
				</svg>
			</a>





		</nav>
	</div>
	<br>




	<div class="pos-f-t">
		<div class="container PY-4">


			<div class="row align-items-md-stretch">
				<div class="col-md-6">
					<div class="h-100 p-5 bg-dark text-white rounded-3">
						<h2>Cadastrar usuários</h2>
						<p>Insira novos usuários no sistema</p>
						<a href="new.php"><button class="btn btn-outline-light" type="button">Cadastrar</button></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="h-100 p-5 bg-dark text-white rounded-3">
						<h2>Visualizar usuários</h2>
						<p>Visualize, edite e exclua usuários.</p>
						<a href="list.php"><button class="btn btn-outline-light" type="button">Visualizar</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>