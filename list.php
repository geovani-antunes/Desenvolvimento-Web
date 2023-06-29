<?php
include('banco.php');
include('session.php');
$session = new poo;
$session->session();



$sql = 'SELECT * FROM usuarios;';
$result = $pdo->query($sql);

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
					<li class="breadcrumb-item"><a href="../../start.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Listar usuários</li>
				</ol>
			</nav>
		</div>
		<h1>Visualizar <a href="new.php"></a></h1>

		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">E-mail</th>
					<th scope="col">Password</th>
					<th scope="col">Actions</th>

					<?php

					while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
						echo "<tr>";
						echo "<td>" . $row['id'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . str_repeat("*", strlen($row['senha'])) . "</td>";
						echo "<td>
            <a class='btn btn-primary' href='edit.php?id=$row[id]'> 
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg>
            </a>";
						echo "
            <a class='btn btn-danger' href='delete.php?id=$row[id]'>
            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg>
            </td>";
						echo "</tr>";
					}
					?>


				</tr>

				</tr>
			</thead>



			<tbody>




			</tbody>
		</table>
		<a href="new.php"><button type="button" class="btn btn-success">Inserir novo</button></a></h1>
		<a href="start.php"><button type="button" class="btn btn-success">Home</button></a></h1>

	</div>

</body>

</html>