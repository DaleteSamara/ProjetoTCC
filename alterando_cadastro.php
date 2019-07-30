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
	
	$nome_alt = $_POST["nome_alt"];
	$email_alt = $_POST["email_alt"];
	$senha_alt = md5($_POST["senha_alteracao"]);
	$sexo_alt = $_POST["sexo_alt"];
	
	if($senha_alt == $senha_comp){
		$sql = "UPDATE usuario SET nome_usuario = '$nome_alt', email_usuario = '$email_alt', 
			sexo = '$sexo_alt' WHERE id_usuario = '$id'";
	}
	
	
	
	$resultado = mysqli_query($link,$sql) or die("Erro ao atualizar cadastro.");
	
	echo "Cadastro atualizado com sucesso.";
?>