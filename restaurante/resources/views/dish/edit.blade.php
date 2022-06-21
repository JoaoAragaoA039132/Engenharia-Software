@extends('layouts.auth-master')
@section('content')
<form method="POST" action="{{route('dish.update', $Menus->id)}}">
    @method('PUT')
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="id" value="{{$Menus->id}}">
    <br>
    <h1 class="h3 mb-3 fw-normal" style="text-align: center">Alterar Prato</h1>
    <div>
        <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="{{$Menus->nome}}" required>
                </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationServer01">Categoria: </label>
                <div class="form-group">
                  <select class="custom-select" name="categoria" id="categoria">
                    <option value="0" selected >{{$Menus->categoria}}</option>
                    <option value="1">Entrada</option>
                    <option value="2">Sopa</option>
                    <option value="3">Prato Pricipal</option>
                    <option value="4">Bebidas</option>
                    <option value="5">Sobremesa</option>
                    <option value="6">Digestivo</option>
                  </select>
                </div>
        </div>
        <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Preco: </label>
                    <input type="text" class="form-control" id="preco" name="preco" placeholder="" value="{{$Menus->preco}}" required>
                </div>
        </div>
                <div class="col-sm-8">
                    <label for="validationServer01">Descricao:</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="" value="{{$Menus->descricao}}" required>
                </div>

                </div>
            </div>
        <br>
        <div>
            <button class="btn btn-primary" type="submit">Alterar</button>
            <a href="/dish" class="btn btn-light" >Voltar</a>
        </div>
</form>
        <br>
        <br>
</div>
@endsection
