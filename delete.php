<?php
require_once('banco.php'); //acesso ao banco
include('session.php'); // valida sessão
$session = new poo;
$session->session();


$id = isset($_GET['id']) ? $_GET['id'] : null; //pega o id vindo da URL

if (!is_null($id)) {
  $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = :id"); //executa a deleção
  $sql->bindParam(':id', $id);
  $sql->execute();
}

header("Location: list.php"); // direciona para este local apos ação
exit();
