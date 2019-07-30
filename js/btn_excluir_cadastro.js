$("#btn_excluir_cadastro").click(function(){
	
	$.ajax({ 
	
		url : "excluindo_cadastro.php", 
		type : 'post', 
		data : { 
		
			id_usuario : "aux"
			
		},
		
		beforeSend : function(){ 
		
			$("#status_exclusao").html("Excluindo...");
			
		}					
		
	})
	
	.done(function(msg){
		
		$("#status_exclusao").html(msg);
		window.location.href= "/tcc/logout.php";
	})
	
	.fail(function(jqXHR, textStatus, msg){
	
		alert(msg);
	
	});
	
});

