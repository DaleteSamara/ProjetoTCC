<?php

	include("conexao.php");
	
	$pergunta = $_POST["pergunta"];
	
	$insert = "INSERT INTO quiz (descricao)
	values('$pergunta')";
	
	mysqli_query($link, $insert) or die($link);
?>