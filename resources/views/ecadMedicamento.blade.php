@extends('template.template')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    
    <title>Cadastro Medicamentos</title>
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
			<h2>Cadastro de Medicamentos</h2>
		</div>
		<div class="container">
			<form method="POST" action="medicamento">
				@csrf
				<fieldset class="col-sm-12">
					<legend>Dados do Medicamento</legend>
					<div class="form-group row">
				      	<div class="col-sm-12">
			      			<label for="nmmedicamento" class="col-sm-12 col-form-label">Nome do Medicamento: </label>
				        	<input type="text" name= "nmmedicamento" class="form-control" id="nmmedicamento">
				      	</div>
		    		</div>
					<div class="form-group row">
				      	<div class="col-sm-12">
			      			<label for="nmlaboratorio" class="col-sm-6 col-form-label">Nome do Laboratório: </label>
				        	<input type="text" name= "nmlaboratorio" class="form-control" id="nmlaboratorio">
				      	</div>
		    		</div>
					<div class="form-group row">
				      	<div class="col-sm-8">
			      			<label for="nucodigobarras" class="col-sm-8 col-form-label">Código de barrras: </label>
				        	<input type="text" name= "nucodigobarras" class="form-control" id="nucodigobarras">
				      	</div>
				      	<div class="col-sm-4">
			      			<label for="dtvalidade" class="col-sm-4 col-form-label">Dt. Validade </label>
				        	<input type="date" name= "dtvalidade" class="form-control" id="dtvalidade">
				      	</div>
		    		</div>
					<div class="form-group row">
				      	<div class="col-sm-6">
			      			<label for="quantidade" class="col-sm-6 col-form-label">Quantidade </label>
				        	<input type="text" name= "quantidade" class="form-control" id="quantidade">
				      	</div>
				      	<div class="col-sm-6">
			      			<label for="unidade" class="col-sm-6 col-form-label">Unidade </label>
				        	<select name="unidade" class="form-control" id="unidade"> 
								<option value="comp">Comprimido</option> 
								<option value="frasco">Frasco</option> 
								<option value="tubo">Tubo</option> 		
							</select>
				      	</div>
		    		</div>
					<div class="form-group row">
				      	<div class="col-sm-6">
				            <div>
				                <input type="checkbox" name="bula" value="S"><i class="fa fa-chevron-right">Tem bula</i>
				            </div>
				            <div>
				                <input type="checkbox" name="caixa" value="S"><i class="fa fa-chevron-right">Tem caixa</i>
				            </div>
			            </div>
		    		</div>

					<div class="form-group row">
				      	<div class="col-sm-12">
			      			<label for="observacao" class="col-sm-12 col-form-label">Observação </label>
				        	<textarea type="text" name= "observacao" class="form-control" id="observacao"> </textarea>
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