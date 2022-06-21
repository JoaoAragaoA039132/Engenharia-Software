@extends('layouts.app-master-no-navbar')
@section('content')
<div style="text-align: center; align-right;" >
    <br>

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
                <th class="col-2" style="border: 2px solid #000000">Nome: </th>
                <th class="col-10" style="border: 2px solid #000000">Mensagem: </th>
            </tr>

            @foreach($messages as $mes)
                <tr style=>
                    <td style="border: 1px solid #000000">{{$mes->clienteNome->nome}}</td>
                    <td style="border: 1px solid #000000">{{$mes->mensagem}}</td>
                </tr>
            @endforeach
        </table>
        <br>
        <div>
            <a href="/puser-func" class="btn btn-primary">Voltar</a>
        </div>
    </form>
</div>
@endsection
