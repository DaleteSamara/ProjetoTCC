<?php

	if(isset($_SESSION["autenticacao"])){
		
		include("conexao.php");

		$id = $_SESSION["autenticacao"];
		
		$sql = "SELECT nome_usuario FROM usuario WHERE id_usuario = $id";
		
		$resultado = mysqli_query($link,$sql);
		
		$linha = mysqli_fetch_assoc($resultado);
		
		if($resultado!= ""){
			echo"Seja bem-vindo(a) <b>".$linha["nome_usuario"]." </b>, ao Ecological Footprint";
		}
	}else{
		echo"Seja bem-vindo(a) ao Ecological Footprint";
	}

?>

