<?php

	include("conexao.php");
	
	$id = $_SESSION["autenticacao"];
	
	$sql = "SELECT * FROM usuario"
	
	if($senha == $senha_usuario){
		$sql_delete = "DELETE FROM usuario WHERE id_usuario = $id ";
	}

?>