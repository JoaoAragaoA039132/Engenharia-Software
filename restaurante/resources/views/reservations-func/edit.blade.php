@extends('layouts.auth-master')
@section('content')
<form method="POST" action="{{route('reservations-func.update', $reservations->id)}}">
    @method('patch')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="id" value="{{$reservations->id}}">
    <br>
    <h1 class="h3 mb-3 fw-normal" style="text-align: center">Alterar reserva</h1>
    <div>
        <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Nome: {{$reservations->cliente}}</label>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Número de pessoas: {{$reservations->n_pessoas}}</label>
                </div>
        </div>
        <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Data da reserva: {{$reservations->data_reserva}}</label>
                </div>
        </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Hora: {{$reservations->horario}}</label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Mesa</label>
                        <div class="form-group">
                          <select class="custom-select" name="mesa" id="mesa">
                            <option value="0" selected >Escolher Mesa</option>
                            <option value="1">Mesa 1</option>
                            <option value="2">Mesa 2</option>
                            <option value="3">Mesa 3</option>
                            <option value="4">Mesa 4</option>
                            <option value="5">Mesa 5</option>
                          </select>
                        </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Estado da reserva </label>
                        <div class="form-group">
                          <select class="custom-select" required name="estado" id="estado">
                            <option value="0">Pendente</option>
                            <option value="1">Aceite</option>
                            <option value="2">Recusada</option>
                          </select>
                        </div>
                </div>
            </div>
        <br>
        <div>
            <button class="btn btn-primary" type="submit">Alterar</button>
            <a href="/reservations-func" class="btn btn-light" >Voltar</a>
        </div>
</form>
        <br>
        <br>
</div>
@endsection
