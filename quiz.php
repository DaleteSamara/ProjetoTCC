<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
		.pt-3-half {
			padding-top: 1.4rem;
		}
		.mb-0{
				padding-bottom: 0rem;
		}
		
	</style>
  </head>
	
  <body><center>
  <button id='addComponente' type="button" class="btn btn-primary" data-toggle="modal" data-target="#pergunta1">VAMOS COMEÇAR?</button></center>
    <form class="needs-validation" novalidate>
		<!-- Inicia Pergunta 1--><center>
		<div class="modal fade bg-secondary" id="pergunta1" tabindex="1" role="dialog" style="margin-top:100px; margin-left:30%; width: 500px; height: 300px;" >
			<div class="form-group col-md col-form-label-sm mb-0">
				<div class="modal-header">
					<h5 class="modal-title">Com que frequencia você consome carne vermelha?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body" >
					<label for="pergunta1"></label>
					<select id="carnevermelha" class="form-control form-control-sm mb-0">
						<option selected>Escolher...</option>
						<option value="0">Nunca</option>
						<option value="1">Pouca Frequencia</option>
						<option value="2">Frequentemente</option>
						<option value="3">Sempre</option>
					</select>
						<button id='addComponente' type="button" class="btn btn-primary" data-toggle="modal" data-target="#pergunta2">Proximo</button></center>
				</div>
			</div></center>
		<!-- Fim Pergunta 1-->
		
		<!-- Inicia Pergunta 2--><center>
		<div class="modal fade  bg-info text-white" id="pergunta2" tabindex="1" role="dialog" style="margin-top:100px; margin-left:30%; width: 500px; height: 300px;" >
			<div class="form-group col-md col-form-label-sm mb-0">
				<div class="modal-header">
					<h5 class="modal-title">Você usa aquecedores ou ar condicionado?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body" >
					<label for="pergunta2"></label>
					<select id="carnevermelha" class="form-control form-control-sm mb-0">
						<option selected>Escolher...</option>
						<option value="0">Sim</option>
						<option value="1">Não</option>
					</select>
						<button id='addComponente' type="button" class="btn btn-primary" data-toggle="modal" data-target="#pergunta3">Proximo</button></center>
				</div>
			</div></center>
		<!-- Fim Pergunta 2-->
		
		
			<!-- Inicia Pergunta 3--><center>
		<div class="modal fade bg-success text-white" id="pergunta3" tabindex="1" role="dialog" style="margin-top:100px; margin-left:30%; width: 500px; height: 300px;" >
			<div class="form-group col-md col-form-label-sm mb-0">
				<div class="modal-header">
					<h5 class="modal-title">Você costuma ler livros e jornais?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body" >
					<label for="pergunta3"></label>
					<select id="carnevermelha" class="form-control form-control-sm mb-0">
						<option selected>Escolher...</option>
						<option value="0">Raramente</option>
						<option value="1">Diariamente</option>
						<option value="1">Não leio livros ou jornais impressos</option>
					</select>
						<button id='addComponente' type="button" class="btn btn-primary" data-toggle="modal" data-target="#pergunta4">Proximo</button></center>
				</div>
			</div></center>
		<!-- Fim Pergunta 3-->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

	</form>
	
	
	</body>
	
</html>