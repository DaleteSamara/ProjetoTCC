<script>
		$(document).ready(function(){
			$("#div_alt_senha").hide();

			$("#btn_alterar_senha").click(function(){
	
				$("#div_alt_cadastro").hide();
				
				$("#div_alt_senha").fadeIn();
			
			});
		
			$("#btn_voltar_cadastro").click(function(){
		
				$("#div_alt_cadastro").fadeIn();
				
				$("#div_alt_senha").hide();
			});
		});

</script>

<?php

	include("conexao.php");
	
	$id = $_SESSION["autenticacao"];
	
	$sql = "SELECT * FROM usuario WHERE $id LIKE id_usuario";
	
	$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
	
	$nome1 = "";
	$email1 = "";
	
	if(mysqli_num_rows($resultado) >= 1){
		
		$linha = mysqli_fetch_assoc($resultado);
		
		$nome1 = $linha["nome_usuario"];
		$email1 = $linha["email_usuario"];
		
	}
?>

<div id="div_alt_cadastro">
	<center>
		
		<br />

		<hr />
			
			<h3>Área de Alteração do Usuário</h3>
			
		<hr />
			<br />
				
				<div id="status_alterar"></div>
				
			<br />
		<hr />
		
		<br />
		
		<label>Nome:</label> &nbsp;&nbsp;
		<input id="nome_alteracao" type="text" name="nome" placeholder="<?php echo $nome1 ?>" />
		<br/><br/>
		
		<label>Email:</label> &nbsp;&nbsp;
		<input id="email_alteracao" type="text" name="email" placeholder="<?php echo $email1 ?>" />
		<br/><br/>
		
		<label>Sexo:</label> &nbsp;&nbsp;
		<input class="sexo_cadastro" type="radio" name="sexo" value="Masculino">Masculino &nbsp;
		<input class="sexo_cadastro" type="radio" name="sexo" value="Feminino">Feminino
		<br/><br/>
		
		<label>Digite a senha para confirmação:</label></br> 
		<input type="password" id="senha_alteracao" class="input" name="senha" />
		<br /><br />
		
		
		<button id="btn_alterar_cadastro" name="botao" class="btn">Alterar</button>
		<button id="btn_alterar_senha" name="botao" class="btn">Alterar Senha</button>
		 <br /><br />
		<button id="btn_excluir_cadastro" name="botao" class="btn">Excluir</button>
		
	</center>
</div>

<?php include("alterar_senha.php"); ?>

	
