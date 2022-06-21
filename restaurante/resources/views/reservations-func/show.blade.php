@extends('layouts.auth-master')
@section('content')
<input type="hidden" name="_token" value="{{csrf_token()}}">
<br>
<div  style="text-align: right">
    <a {{--href="{{route('logout.perform')}}"--}} class="btn btn-outline-danger" href="/index">Logout</a>
</div>
<h1 class="h3 mb-3 fw-normal">Lista de reservas</h1>
<div style="text-align: center; align-right;" >
    <table class="table table-striped">
        <tr>
            <th class="col-5" style="border: 2px solid #000000">Nome</th>
            <th class="col-1" style="border: 2px solid #000000">Nº Pessoas</th>
            <th class="col-2" style="border: 2px solid #000000">Data</th>
            <th class="col-1" style="border: 2px solid #000000">Hora </th>
            <th class="col-1" style="border: 2px solid #000000">Mesa </th>
            <th class="col-2" style="border: 2px solid #000000">Estado da reseva </th>
        </tr>
        @foreach($reservations as $res)
        <tr style=>
            <td style="border: 1px solid #000000">{{$res->clienteNome->nome}}</td>
            <td style="border: 1px solid #000000">{{$res->n_pessoas}}</td>
            <td style="border: 1px solid #000000">{{$res->data_reserva}}</td>
            <td style="border: 1px solid #000000">{{$res->horario}}</td>
            <td style="border: 1px solid #000000">{{$res->mesa}}</td>
            <td style="border: 1px solid #000000">@switch($res->estado)
                @case(0)
                <span class="status">Pendente</span>
                @break

                @case(1)
                <span class="status">Aceite</span>
                @break

                @default
                <span class="status">Recusado</span>
                @endswitch
            </td>
            <td><a href="{{route('reservations-func.edit', $res->id)}}" class="btn btn-light" >Alterar</a></td>
        </tr>
        @endforeach
    </table>
    <br>
    <div>
        <a href="/puser-func" class="btn btn-primary" >Voltar</a>
    </div>
</div>
@endsection
