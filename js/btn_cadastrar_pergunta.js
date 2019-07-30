$("#btn_cadastrar_pergunta").click(function(){
	
	$.ajax({ 
	
		url : "cadastrando_perguntas.php", 
		type : 'post', 
		data : { 
		
			pergunta: $("#pergunta").val()
			
		},
		
		beforeSend : function(){ 
		
			$("#status_cadastro").html("Cadastrando...");
		
		}					
		
	})
	
	.done(function(msg){
		
		$("#status_cadastro").html("Cadastrado com sucesso");
	},
				beforeSend : function(){ 
				
					$("#status_login").html("Autenticando...");
				
				}					
				
			})
			
			.done(function(msg){
				if(msg == 1){
					
					location.href = "index.php";
					
				}else{
					
					$("#status_login").html("Falha ao salvar...");
					
					
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