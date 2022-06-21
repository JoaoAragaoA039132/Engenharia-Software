@extends('layouts.auth-master')
@extends('layouts.partials.messages')
@section('content')
<form method="POST" action="{{route('reservations.store')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<br>
<h1 class="h3 mb-3 fw-normal" style="text-align: center">Efetuar reserva</h1>
<div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">Número de cliente:</label>
                <input type="text" class="form-control" id="cliente" name="cliente" placeholder="" value="" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServer02">Número de pessoas</label>
                <input type="text" class="form-control" id="n_pessoas" name="n_pessoas" placeholder="" value="" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">Data da reserva: </label>
                <input type="date" class="form-control" id="data_reserva"  name="data_reserva" value="" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">Hora</label>
                <input type="time" class="form-control" id="horario" name="horario" value="" required>
            </div>
        </div> <input type="hidden" name="mesa" id="mesa" value=0>
        <input type="hidden" name="estado" id="estado" value=0>
    <br>
    <div>
        <button class="btn btn-primary" type="submit">Reservar</button>
    </div>
    </form>
    <br>
    <br>
</div>
@endsection
