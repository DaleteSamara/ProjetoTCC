<?php

	include("conexao.php");
	
	$email_login = $_POST["email_login"];
	
	$senha_login = md5($_POST["senha_login"]);
	
	$sql = "SELECT * FROM usuario WHERE email_usuario LIKE '$email_login' 
	AND senha_usuario LIKE '$senha_login'";
	
	$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
	
	if(mysqli_num_rows($resultado)>=1){
		
		$linha = mysqli_fetch_assoc($resultado);
		
		session_start();
		
		$_SESSION["autenticacao"] = $linha["id_usuario"];
		
		
		echo "1";
	
	}else{
		
		echo "0";
		
	}
	
?>