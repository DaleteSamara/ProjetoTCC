$("#btn_proximo").click(function(){				
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