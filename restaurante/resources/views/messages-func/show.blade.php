@extends('layouts.app-master-no-navbar')
@section('content')
<form method="POST" {{route('messages.createc')}}>
    @csrf
    <br>
<h1 class="h3 mb-3 fw-normal">Mensagens</h1>
<div style="text-align: center; align-right;" >
    <table>
        <tr>
            <th class="col-2" style="border: 2px solid #000000"> Nome</th>
            <th class="col-11" style="border: 2px solid #000000">Mensagem</th>
        </tr>

        @foreach($messages as $mes)
            <tr style=>
                <td style="border: 1px solid #000000">{{$mes->nome}}</td>
                <td style="border: 1px solid #000000">{{$mes->mensagens}}</td>
            </tr>
        @endforeach

        <tr>
            <td style="border: 1px solid #000000"></td>
            <td style="border: 1px solid #000000"></td>
        </tr>
        <tr>
            <td style="border: 1px solid #000000"></td>
            <td style="border: 1px solid #000000"> </td>
            <td></td>
        </tr>
    </table>
    <br>
    <div>
        <input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)">
    </div>
</div>
@endsection
