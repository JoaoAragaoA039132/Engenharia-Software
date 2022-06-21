@extends('layouts.auth-master')
@section('content')
<form method="POST" action="{{route('dish.store')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<br>
<h1 class="h3 mb-3 fw-normal" style="text-align: center">Prato</h1>
<div>
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationServer01">nome: </label>
            <input type="text" class="form-control" id="nome"  name="nome" placeholder="nome" value="" required>
        </div>
    </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">categoria:</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria" value="" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServer02">preco:</label>
                <input type="text" class="form-control" id="preco" name="preco" placeholder="preco" value="" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationServer01">descricao:</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="descricao" value="" required>
            </div>
        </div>
    <br>
    <div>
        <button class="btn btn-primary" type="submit">Adicionar Prato</button>
        <input type="button" class="btn btn-outline-danger" value="Cancelar" onClick="history.go(-1)">

    </div>
    </form>
    <br>
    <br>
</div>
@endsection
