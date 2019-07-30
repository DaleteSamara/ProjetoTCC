$("#btn_alterando_senha").click(function(){
	
	$.ajax({ 
	
	
		url : "alterando_senha.php", 
		type : 'post', 
		data : { 
		
			senha_atual : $("#senha_atual").val(),
			senha_nova : $("#senha_nova").val()
			
		},
		
		beforeSend : function(){ 
		
			$("#status_alterar").html("Alterando...");
			
		}					
		
	})
	
	.done(function(msg){
		
		$("#status_alterar_senha").html(msg);
	})
	
	.fail(function(jqXHR, textStatus, msg){
	
		alert(msg);
	
	});
	
});