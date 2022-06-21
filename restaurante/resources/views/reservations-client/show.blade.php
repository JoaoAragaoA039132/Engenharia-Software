@extends('layouts.app-master')
@section('content')
<input type="hidden" name="_token" value="{{csrf_token()}}">
<br>
<h1 class="h3 mb-3 fw-normal">As tuas reservas</h1>
<div style="text-align: center; align-right;" >
    <table>
        <tr>
            <th class="col-3" style="border: 2px solid #000000"> Nome</th>
            <th class="col-1" style="border: 2px solid #000000">Nº Pessoas</th>
            <th class="col-3" style="border: 2px solid #000000">Data</th>
            <th class="col-2" style="border: 2px solid #000000">Hora </th>
            <th class="col-1" style="border: 2px solid #000000">Mesa </th>
            <th class="col-3" style="border: 2px solid #000000">Estado </th>
            <th class="col-3"></th>
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
        </tr>
        @endforeach
    </table>
    <br>
    <div>
        <a href="{{route('reservations.create')}}" class="btn btn-primary" >Efetuar nova reserva</a>
    </div>
</div>
@endsection
