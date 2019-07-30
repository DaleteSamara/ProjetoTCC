<?php

	include("conexao.php");
	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = md5($_POST["senha_cadastro"]);
	$sexo = $_POST["sexo"];
	
	$erro = $nome . " " . $email . " " . $senha . " " . $sexo;
	
	$insert = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, sexo)
	values('$nome', '$email', '$senha', '$sexo')";
	
	mysqli_query($link, $insert) or die($link);
?>