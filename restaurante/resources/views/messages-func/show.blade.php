@extends('layouts.app-master-no-navbar')
@section('content')
<form method="POST" {{route('messages.createc')}}>
    @csrf
    <br>
<h1 class="h3 mb-3 fw-normal">Lista de reservas</h1>
<div style="text-align: center; align-right;" >
    <table>
        <tr>
            <th class="col-2" style="border: 2px solid #000000"> Nome</th>
            <th class="col-11" style="border: 2px solid #000000">Nº Pessoas</th>
        </tr>
        <tr style=>
            <td style="border: 1px solid #000000">Exemplo 1</td>
            <td style="border: 1px solid #000000">2</td>
        </tr>
        <tr>
            <td style="border: 1px solid #000000">Exemplo 2</td>
            <td style="border: 1px solid #000000">4</td>
            <td><a href="/reservations-func/edit" class="btn btn-light" >Alterar</a></td>
        </tr>
    </table>
    <br>
    <div>
        <a href="/puser" class="btn btn-light" >Voltar</a>
    </div>
</div>
@endsection
