$("#btn_login").click(function(){
					
					$.ajax({ 
					
						url : "autenticacao.php", 
						type : 'post', 
						data : { 
						
							email_login : $("#email_login").val(),
							senha_login : $("#senha_login").val()
						
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
					
				});