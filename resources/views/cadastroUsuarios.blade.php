@extends('template.template')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    
    <title>Cadastro</title>

</head>
	@section('conteudo')
		@if (count($errors) > 0) 
	    <div class="alert alert-danger"> 
	        <ul> @foreach ($errors->all() as $error) 
	            <li>{{ $error }}</li>
	        @endforeach </ul>
	    </div>
	@endif 

	<div class="master">
		<div class="page-header" align="center">
			<h2>Cadastro de Usuário</h2>
		</div>
		<div class="container">
			<form method="POST" action="/usuario/grava">
				@csrf
				<fieldset class="col-sm-12">
					<legend>Dados Pessoais</legend>
					<div class="form-group row">
				      	<div class="col-sm-7">
			      			<label for="nmusuario" class="col-sm-7 col-form-label">Nome: </label>
				        	<input type="text" name= "nmusuario" class="form-control" id="nmusuario">
				      	</div>
				      	<div class="col-sm-5">
			      			<label for="dtnacimento" class="col-sm-5 col-form-label">Data Nasc. </label>
				        	<input type="date" name= "dtnacimento" class="form-control" id="dtnacimento">
				      	</div>
		    		</div>
					<div class="form-group row">
				      	<div class="col-sm-6">
			      			<label for="nucpf" class="col-sm-6 col-form-label">CPF: </label>
				        	<input type="text" name= "nucpf" class="form-control" id="nmusuario">
				      	</div>
				      	<div class="col-sm-6">
			      			<label for="nurg" class="col-sm-6 col-form-label">RG: </label>
				        	<input type="text" name= "nurg" class="form-control" id="nurg">
				      	</div>
		    		</div>
		  
				</fieldset>
				<fieldset class="col-sm-12">
					<legend>Endereço</legend>
					<div class="form-group row">
				      	<div class="col-sm-8">
			      			<label for="deendereco" class="col-sm-8 col-form-label">Endereço: </label>
				        	<input type="text" name= "deendereco" class="form-control" id="deendereco">
				      	</div>
				      	<div class="col-sm-4">
			      			<label for="nuendereco" class="col-sm-4 col-form-label">Número </label>
				        	<input type="text" name= "nuendereco" class="form-control" id="nuendereco">
				      	</div>
		    		</div>
					<div class="form-group row">
				      	<div class="col-sm-6">
			      			<label for="debairro" class="col-sm-6 col-form-label">Bairro: </label>
				        	<input type="text" name= "debairro" class="form-control" id="debairro">
				      	</div>
				      	<div class="col-sm-6">
			      			<label for="decidade" class="col-sm-6 col-form-label">Cidade: </label>
				        	<input type="text" name= "decidade" class="form-control" id="decidade">
				      	</div>
		    		</div>
					<div class="form-group row">
				      	<div class="col-sm-4">
			      			<label for="nucep" class="col-sm-4 col-form-label">CEP: </label>
				        	<input type="text" name= "nucep" class="form-control" id="nucep">
				      	</div>
				      	<div class="col-sm-8">
			      			<label for="deestado" class="col-sm-8 col-form-label">Estado: </label>
							<select name="deestado" class="form-control" id="deestado"> 
								<option value="ac">Acre</option> 
								<option value="al">Alagoas</option> 
								<option value="am">Amazonas</option> 
								<option value="ap">Amapá</option> 
								<option value="ba">Bahia</option> 
								<option value="ce">Ceará</option> 
								<option value="df">Distrito Federal</option> 
								<option value="es">Espírito Santo</option> 
								<option value="go">Goiás</option> 
								<option value="ma">Maranhão</option> 
								<option value="mt">Mato Grosso</option> 
								<option value="ms">Mato Grosso do Sul</option> 
								<option value="mg">Minas Gerais</option> 
								<option value="pa">Pará</option> 
								<option value="pb">Paraíba</option> 
								<option value="pr">Paraná</option> 
								<option value="pe">Pernambuco</option> 
								<option value="pi">Piauí</option> 
								<option value="rj">Rio de Janeiro</option> 
								<option value="rn">Rio Grande do Norte</option> 
								<option value="ro">Rondônia</option> 
								<option value="rs">Rio Grande do Sul</option> 
								<option value="rr">Roraima</option> 
								<option value="sc">Santa Catarina</option> 
								<option value="se">Sergipe</option> 
								<option value="sp">São Paulo</option> 
								<option value="to">Tocantins</option> 
							</select>
				      	</div>
		    		</div>
			  
				</fieldset>
				<fieldset class="col-sm-12">
					<legend>Dados de Login</legend>
					<div class="form-group row">
				      	<div class="col-sm-7">
			      			<label for="nmlogin" class="col-sm-7 col-form-label">Login: </label>
				        	<input type="text" name= "nmlogin" class="form-control" id="nmlogin">
				      	</div>
				      	<div class="col-sm-5">
			      			<label for="deemail" class="col-sm-5 col-form-label">Email </label>
				        	<input type="email" name= "deemail" class="form-control" id="deemail">
				      	</div>
		    		</div>
					<div class="form-group row">
				      	<div class="col-sm-6">
			      			<label for="desenha" class="col-sm-6 col-form-label">Senha: </label>
				        	<input type="password" name= "desenha" class="form-control" id="desenha">
				      	</div>
				      	<div class="col-sm-6">
			      			<label for="confsenha" class="col-sm-6 col-form-label">Confirmar Senha: </label>
				        	<input type="password" name= "confsenha" class="form-control" id="confsenha">
				      	</div>
		    		</div>
		  
				</fieldset>
				<div>
					<button class="btn btn-default buttongravar">Gravar</button>
					<a class="btn btn-default buttoncancelar" href="/pesqcentrocusto" role="button">Cancelar</a>					

				</div>
			</form>
		</div>
	</div>

</html>
@stop