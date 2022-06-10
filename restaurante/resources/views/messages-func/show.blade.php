@extends('layouts.app-master-no-navbar')
@section('content')
<div class="bg-light p-5 rounded" style="margin:10px;">

    <div  style="text-align: right">
        <a {{--href="{{route('logout.perform')}}"--}} class="btn btn-outline-danger" href="/index">Logout</a>
    </div>
    <form method="POST" {{route('messages.createc')}}>
        @csrf
        <br>
        <h1 class="h3 mb-3 fw-normal">Mensagens</h1>
        <form style="text-align: center; align-right;" >
        <table class="table table-striped">
            <tr>
                <th class="col-2" style="border: 2px solid #000000"> Nome</th>
                <th class="col-10" style="border: 2px solid #000000">Mensagem</th>
            </tr>

            @foreach($messages as $mes)
                <tr style=>
                    <td style="border: 1px solid #000000">{{$mes->clienteNome->cliente}}</td>
                    <td style="border: 1px solid #000000">{{$mes->mensagem}}</td>
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
