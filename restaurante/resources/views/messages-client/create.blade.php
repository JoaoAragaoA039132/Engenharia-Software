@extends('layouts.app-master-no-navbar')
@section('content')
    <div class="bg-light p-5 rounded" style="margin:10px;">

        <div  style="text-align: right">
            <a {{--href="{{route('logout.perform')}}"--}} class="btn btn-outline-danger" href="/index">Logout</a>
        </div>

        @guest
            <h1>Enviar Mensagem</h1>
        @endguest

        <div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Nome:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nome" value="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">E-Mail:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="E-Mail" value="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer01">Assunto:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Assunto" value="" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer02">Mensagem:</label>
                    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Mensagem" value="" required>
                </div>
            </div>

            <input type="hidden" name="estado" id="estado" value=0>
        <br>
        <div>
            <button class="btn btn-primary" type="submit">Enviar</button>
            <input type="button" class="btn btn-outline-danger" value="Cancelar" onClick="history.go(-1)">

        </div>
    </div>
    </form>
    <br>
    <br>
</div>

@endsection
