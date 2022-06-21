@extends('layouts.auth-master')
@section('content')
<form method="POST" action="{{route('dish.create')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<br>
<h1 class="h3 mb-3 fw-normal">Pratos:</h1>
<div style="text-align: center; align-right;" >
<body style="margin: 50px;">
    <table class="table table-striped">
        <tr>
            <th class="col-3" style="border: 2px solid #000000">Nome</th>
            <th class="col-3" style="border: 2px solid #000000">Categoria</th>
            <th class="col-3" style="border: 2px solid #000000">Preço</th>
            <th class="col-3" style="border: 2px solid #000000">Descrição </th>
            <th class="col-3"></th>
        </tr>
        @foreach($Menus as $Menu)
        <tr style="">
            <td style="border: 1px solid #000000">{{$Menu->nome}}</td>
            <td style="border: 1px solid #000000">{{$Menu->nomeCategoria->nome}}</td>
            <td style="border: 1px solid #000000">{{$Menu->preco}}</td>
            <td style="border: 1px solid #000000">{{$Menu->descricao}}</td>
            <td><a href="{{route('dish.edit', $Menu->id)}}" class="btn btn-light" >Alterar</a></td>
        </tr>
        @endforeach
    </table>
</body>
    <br>
    <div>
        <a href="{{route('dish.create')}}" class="btn btn-primary" >Adicionar Pratos</a>
    </div>
    <br>
    <div>
        <a href="/puser-func" class="btn btn-primary" >Voltar</a>
    </div>
</form>
</div>
@endsection
