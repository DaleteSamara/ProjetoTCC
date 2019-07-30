<?php

	session_start();
	include("conexao.php");

	
	$id = $_SESSION["autenticacao"];
	
	$verif = "SELECT * FROM usuario WHERE id_usuario LIKE '$id'";
	$result = mysqli_query($link,$verif) or die("erro");
	
	if(mysqli_num_rows($result)>=1){
		$linha = mysqli_fetch_assoc($result);
	}
	$senha_comp = $linha["senha_usuario"];
	
	$senha_atual = md5($_POST["senha_atual"]);
	$senha_nova = md5($_POST["senha_nova"]);
	
	
	if($senha_atual == $senha_comp){
		$sql = "UPDATE usuario SET senha_usuario = '$senha_nova' WHERE id_usuario = '$id'";
	}
	
	
	
	$resultado = mysqli_query($link,$sql) or die("Erro ao atualizar senha.");
	
	echo "Senha atualizado com sucesso.";
?>