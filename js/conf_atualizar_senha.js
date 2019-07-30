$("#senha_nova_conf").keyup(function(){

	if( $("#senha_nova").val() == $("#senha_nova_conf").val() ) {
		$("#confirmacao").html("senhas correspondem");
		$("#btn_alterando_senha").prop("disabled",false);
	}else{
		$("#btn_alterando_senha").prop("disabled",true);
		$("#confirmacao_senha").html("senhas não correspondem");
	}
	
});


