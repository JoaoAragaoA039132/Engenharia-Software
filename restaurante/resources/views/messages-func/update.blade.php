@extends('layouts.app-master')
@section('content')
<form method="POST" {{--action="{{route('reservations.store')}}--}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<br>
<h1 class="h3 mb-3 fw-normal" style="text-align: center">Alterar reserva</h1>
<div>
    <form>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">Nome:</label>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServer02">Número de pessoas: </label>
            </div>
        </div>
    </form>
    <form>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">Data da reserva: </label>
            </div>
        </div>
    </form>
    <form>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">Hora:</label>
            </div>
        </div>
    </form>
    <form>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">Mesa</label>
                <form class="was-validated">
                    <div class="form-group">
                      <select class="custom-select" required>
                        <option value="">Escolher Mesa</option>
                        <option value="1">Mesa 1</option>
                        <option value="2">Mesa 2</option>
                        <option value="3">Mesa 3</option>
                        <option value="4">Mesa 4</option>
                        <option value="5">Mesa 5</option>
                      </select>
                    </div>
                </form>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServer02">Estado da reserva</label>
                <form class="was-validated">
                    <div class="form-group">
                      <select class="custom-select" required>
                        <option value="">Pendente</option>
                        <option value="1">Aceite</option>
                        <option value="2">Recusada</option>
                      </select>
                    </div>
                </form>
            </div>
        </div>
    </form>


    <br>
    <div>
        <button class="btn btn-primary" type="submit">Alterar</button>
        {{--<a href="/reservations-func" class="btn btn-light" >Voltar</a>--}}
    </div>
    </form>
    <br>
    <br>
</div>
@endsection
