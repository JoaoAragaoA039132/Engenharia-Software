@extends('layouts.app-master')
@section('content')
<div style="text-align: center; align-right;" >
    <br>

        <form method="POST" {{route('menu.show')}}>
            @csrf
            <br>
            <h1 class="h3 mb-3 fw-normal">O Nosso Menu</h1>
            <form style="text-align: center; align-right;" >
            <table class="table table-striped">
                <tr>
                    <th class="col-3" style="border: 2px solid #000000">Nome: </th>
                    <th class="col-2" style="border: 2px solid #000000">Categoria: </th>
                    <th class="col-2" style="border: 2px solid #000000">Preco: </th>
                    <th class="col-5" style="border: 2px solid #000000">Descricao: </th>
                </tr>

                @foreach($menu as $men)
                    <tr style=>
                        <td style="border: 1px solid #000000">{{$men->nome}}</td>
                        <td style="border: 1px solid #000000">{{$men->nomeCategoria->nome}}</td>
                        <td style="border: 1px solid #000000">{{$men->preco}}</td>
                        <td style="border: 1px solid #000000">{{$men->descricao}}</td>
                    </tr>
                @endforeach
            </table>
            <br>
            <div>
                <input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)">
            </div>
        </form>
    </div>
@endsection
