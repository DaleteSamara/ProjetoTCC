$("#btn_alterar_cadastro").click(function(){
					
					
					
					$.ajax({ 
					
					
						url : "alterando_cadastro.php", 
						type : 'post', 
						data : { 
						
							nome_alt : $("#nome_alteracao").val(),
							email_alt : $("#email_alteracao").val(),
							senha_alteracao : $("#senha_alteracao").val(),
							sexo_alt : $(".sexo_cadastro:checked").val()
							
						},
						
						beforeSend : function(){ 
						
							$("#status_alterar").html("Alterando...");
							
						}					
						
					})
					
					.done(function(msg){
						
						$("#status_alterar").html(msg);
						location.href = "index.php";
					})
					
					.fail(function(jqXHR, textStatus, msg){
					
						alert(msg);
					
					});
					
				});