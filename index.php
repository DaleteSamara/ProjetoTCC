<?php

	session_start();

?>


<!DOCTYPE html>

<html lang="pt-BR">

	<head>
	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="js/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/config_div.css"/>
		<title>Ecological Footprint</title>
		
		<script src="js/bootstrap.min.js"></script>

		
		<script>
			$(document).ready(function(){
				
				$("#div_cadastro").hide();
				$("#div_dicas").hide();
				$("#div_quiz").hide();
				$("#div_alterar").hide();
				$("#div_curiosidades").hide();
				$("#div_login").hide();
				$("#inicio").fadeIn();
				
				
				$("#login").click(function(){
					
					$("#div_login").fadeIn();
					$("#div_cadastro").hide();
					$("#inicio").hide();
					$("#div_alterar").hide();
					$("#div_curiosidades").hide();
					$("#div_dicas").hide();
					$("#div_quiz").hide();
					
				});
				
				$("#um").click(function(){
				
					$("#div_login").fadeIn();
					$("#div_alterar").fadeIn();
					$("#inicio").fadeIn();
					$("#div_cadastro").fadeIn();
					$("#div_curiosidades").fadeIn();
					$("#div_dicas").fadeIn();
					$("#div_quiz").fadeIn();
				
				});
				
				$("#dois").click(function(){
				
					$("#div_login").hide();
					$("#div_alterar").hide();
					$("#inicio").hide();
					$("#div_cadastro").hide();
					$("#div_curiosidades").hide();
					$("#div_dicas").fadeIn();
					$("#div_quiz").hide();
				
				});
				
				$("#tres").click(function(){
				
					$("#div_login").hide();
					$("#div_alterar").hide();
					$("#inicio").hide();
					$("#div_cadastro").hide();
					$("#div_curiosidades").fadeIn();
					$("#div_dicas").hide();
					$("#div_quiz").hide();
				
				});
				
				$("#quatro").click(function(){
				
					$("#div_login").hide();
					$("#inicio").hide();
					$("#div_cadastro").hide();
					$("#div_curiosidades").hide();
					$("#div_dicas").hide();
					$("#div_quiz").fadeIn();
					$("#div_alterar").hide();
				
				});
				
				$("#cinco").click(function(){
				
					$("#div_login").hide();
					$("#inicio").hide();
					$("#div_cadastro").hide();
					$("#div_curiosidades").hide();
					$("#div_dicas").hide();
					$("#div_quiz").hide();
					$("#div_alterar").fadeIn();
				
				});
				
				
				<?php
					
					include("js/btn_login.js");
					include("js/btn_cadastrar.js");
					include("js/btn_alterar_cadastro.js");
					include("js/btn_alterando_senha.js");
					include("js/confirma_senha.js");
					include("js/conf_atualizar_senha.js");
					include("js/btn_excluir_cadastro.js");
					
				?>

				
				
			});
		</script>
		
	</head>
	
	
	
	<body background="ecologia.jpg">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 bg-dark " style="backgroudn=#00BFFF">			
			<nav class="navbar navbar-expand-lg navbar-light bg-dark">
				<a href="formPrincipal.php" class="navbar-brand text-light bg-dark sublink"><h3>Ecological Footprint</h3></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">			
				<span class="navbar-toggler-icon"></span>				
			</button>				
				<div class="collapse navbar-collapse" id="collapsibleNavbar">					
					<a class="nav-link" id="um" href="#">Home</a>					
					<a class="nav-link" id="dois" href="#">Dicas</a>					
					<a class="nav-link" id="tres"  href="#">Curiosidades</a>					
					<?php					
						if(isset($_SESSION["autenticacao"])){
							echo "<a class='nav-link' id='quatro' href='#'>Quiz</a>							
							<a class='nav-link' id='cinco' href='#'>Alterar Dados</a>							
							<a class='nav-link' id='sair' href='logout.php'>Sair</a>";						
						}else{				
							echo "<a class='nav-link' id='login' href='#'>Login</a>";					
						}					
					?>					
				</div>				
			</nav>
		</div>
		</div>
	<div class="row">
				<div class="col-md-12  bg-transparent text-dark">		
				<div class="divisao" id="inicio" >					
					<?php				
						include("info.php");				
					?>				
				</div>
				
				<div class="divisao" id="div_login" >					
					<?php				
						include("login.php");				
					?>				
				</div>
				
				<div class="divisao" id="div_cadastro" >					
					<?php				
						include("cadastrar_usuario.php");				
					?>				
				</div>
				
				<div class="divisao" id="div_curiosidades" >					
					<?php				
						include("curiosidades.php");				
					?>				
				</div>
				
				<div class="divisao" id="div_dicas" >					
					<?php				
						include("dicas.php");				
					?>				
				</div>
				
				<div class="divisao" id="div_quiz" >					
					<?php				
						include("quiz.php");				
					?>				
				</div>
				
				<div class="divisao" id="div_alterar" >
					<?php
					include("alterar_cadastro.php");
					?>				
			</div>
			</div>	
	</div>
	</div>
	
	</body>
	
</html>