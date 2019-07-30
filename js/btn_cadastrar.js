$("#btn_cadastrar").click(function(){
	
	$.ajax({ 
	
		url : "cadastrando_usuario.php", 
		type : 'post', 
		data : { 
		
			nome : $("#nome_cadastro").val(),
			email : $("#email_cadastro").val(),
			senha_cadastro : $("#senha_cadastro").val(),
			sexo : $(".sexo_cadastro:checked").val()
			
		},
		
		beforeSend : function(){ 
		
			$("#status_cadastro").html("Cadastrando...");
		
		}					
		
	})
	
	.done(function(msg){
		
		$("#status_cadastro").html("Cadastrado com sucesso");

				$.ajax({ 
			
				url : "autenticacao.php", 
				type : 'post', 
				data : { 								
					email_login : $("#email_cadastro").val(),
					senha_login : $("#senha_cadastro").val()
				},
				
				beforeSend : function(){ 
				
					$("#status_login").html("Autenticando...");
				
				}					
				
			})
			
			.done(function(msg){
				if(msg == 1){
					
					location.href = "index.php";
					
				}else{
					
					$("#status_login").html("Falha ao autenticar...");
					
					
				}
			
			})
			
			.fail(function(jqXHR, textStatus, msg){
			
				alert(msg);
			
			});
	})
	
	.fail(function(jqXHR, textStatus, msg){
	
		alert(msg);
	
	});
	
});