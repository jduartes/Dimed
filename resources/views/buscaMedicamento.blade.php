@extends('template.template')
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
    Busca Medicamento
  </title>
  @section('conteudo')

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Medicamento</th>
            <th scope="col">Laboratório</th>
            <th scope="col">Dt. Validade</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Unidade</th>
            <th scope="col">Tem Bula</th>
            <th scope="col">Tem Caixa</th>
            <th scope="col">Observação</th>
          </tr>
        </thead>
        <tbody>
           @foreach ($dados as $dado) 
          	<tr>
              <th>{{$dado->nmmedicamento}}</th>
      	      <td>{{$dado->nmlaboratorio}}</td>
      	      <td>{{$dado->dtvalidade}}</td>
              <th>{{$dado->qtmedicamento}}</th>
              <th>{{$dado->deunidade}}</th>
              <th>{{$dado->flbula}}</th>
              <th>{{$dado->flcaixa}}</th>
              <th>{{$dado->deobservacao}}</th>

         		 </tr>
      	 @endforeach
        </tbody>
      </table>

@stop




