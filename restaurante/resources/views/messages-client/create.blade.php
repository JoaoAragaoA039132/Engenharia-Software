@extends('layouts.app-master')
@section('content')
<form method="POST" {{route('messages.createc')}}>
    <div class="bg-light p-5 rounded" style="margin:10px;">

        @guest
            <h1>Enviar mensagem</h1>
        @endguest

        <div>
            <div class="form-row">
                <div class="col-sm-8">
                    <label for="validationServer01">Nome:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nome" value="" required>
                </div>
                <br>{{--
                <div class="col-sm-8">
                    <label for="validationServer01">E-Mail:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="E-Mail" value="" required>
                </div>
                <br>--}}
                <div class="col-sm-8 form-group">
                    <label for="validationServer01">
                        Mensagem:</label>
                    <textarea class="form-control" type="textarea" id="cliente" name="cliente" placeholder="Inserir os seus contactos no fim da mensagem" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <br>
        <div>
            <input type="submit" class="btn btn-primary" name="Enviar" value="Enviar">
        </div>
    </div>
</form>
@csrf

@endsection
