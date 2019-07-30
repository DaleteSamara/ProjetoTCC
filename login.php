<script>
		$(document).ready(function(){
			$("#aqui").click(function(){
	
				$("#div_login").hide();
				
				$("#div_cadastro").fadeIn();
			
			});
		
			$("#btn_voltar").click(function(){
		
				$("#div_login").fadeIn();
				
				$("#div_cadastro").hide();
			});
		});

</script>

<center>	
		<br />
		
		<hr />
			
			<h3>Área do Login</h3>
			
		<hr />
			<br />
				
				<div id="status_login"></div>
				
			<br />
		<hr />
		
		<br />
		
		<label>E-mail: </label>
		<input type="email" id="email_login" class="input" name="email_login" placeholder="digite seu email aqui..."/>
		
		<br /><br />
		
		<label>Senha: </label>
		<input type="password" id="senha_login" class="input" name="senha_login" placeholder="digite sua senha aqui..."/>
		
		<br /><br />
		
		<button id="btn_login" class="btn">Logar</button>
		
		<br /><br /><br />
		<p><b>Se não for cadastrado, clique <button id="aqui" class="btn">aqui</button></b></p>
	
</center>
		
	