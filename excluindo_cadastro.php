<?php

	session_start();
	include("conexao.php");

	
	$id = $_SESSION["autenticacao"];
	
	$sql = "DELETE FROM usuario WHERE id_usuario = $id";	
	
	$resultado = mysqli_query($link,$sql) or die("Erro ao excluir usuário.");
	
	echo "Exclusão realizada com sucesso.";
?>