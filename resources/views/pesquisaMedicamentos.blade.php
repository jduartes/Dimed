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
</head>


    <title>
        Pesquisa Medicamento
    </title>
    @section("conteudo")
    <div class="master">
        <div class="page-header" align="center">
            <h2>Pesquisa Medicamento</h2>
        </div>
        <div class="container">
        <fieldset class="col-sm-12">
         <form method="show" action="bucamedicamento/result">
            @csrf
            <div class="form-group row">
              <label for="nmmedicamento" class="col-sm-2 col-form-label">Nome do Medicamento: </label>
              <div class="col-sm-10">
                <input type="text" name= "nmmedicamento" class="form-control" id="nmmedicamento">
              </div>
            </div>  
            <div>   
                <a class="btn btn-default buttonnovo" href="/medicamento" role="button">Novo</a>
                <button class="btn btn-default buttonconsultar">Consultar</button>
            </div>
            
     </form>
@stop





