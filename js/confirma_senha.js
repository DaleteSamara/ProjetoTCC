$("#senha_cadastro_conf").keyup(function(){

	if( $("#senha_cadastro").val() == $("#senha_cadastro_conf").val() ) {
		if($("#senha_cadastro_conf").val() != 0 ){
			$("#confirmacao").html("senhas correspondem");
			$("#btn_cadastrar").prop("disabled",false);
		}
	}else{
		$("#btn_cadastrar").prop("disabled",true);
		$("#confirmacao").html("senhas não correspondem");
	}
	
});
