@extends('layouts.app-master-no-navbar')
@section('content')
<form method="POST" {{--action="{{route('reservations.store')}}--}}">
    <div class="bg-light p-5 rounded" style="margin:10px;">

        <div  style="text-align: right">
            <a {{--href="{{route('logout.perform')}}"--}} class="btn btn-outline-danger" href="/index">Logout</a>
        </div>

        @guest
            <h1>Enviar mensagem</h1>
        @endguest

        <div>
            <div class="form-row">
                <div class="col-sm-8">
                    <label for="validationServer01">Nome:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nome" value="" required>
                </div>
                <br>
                <div class="col-sm-8">
                    <label for="validationServer01">E-Mail:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="E-Mail" value="" required>
                </div>
                <br>
                <div class="col-sm-8">
                    <label for="validationServer01">Assunto:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Assunto" value="" required>
                </div>
                <br>
                <div class="col-sm-8 form-group">
                    <label for="validationServer01">
                        Mensagem:</label>
                    <textarea class="form-control" type="textarea" id="cliente" name="cliente" placeholder="Mensagem" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <br>
        <div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </div>
</form>

@endsection
