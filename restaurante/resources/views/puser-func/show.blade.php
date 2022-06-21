@extends('layouts.app-master-no-navbar')
@section('content')
    <div class="bg-light p-5 rounded" style="margin:10px;">

        <div  style="text-align: right">
            <a {{--href="{{route('logout.perform')}}"--}} class="btn btn-outline-danger" href="/">Logout</a>
        </div>

        @guest
            <h1>Restaurante ES</h1>
        @endguest
        <h3>Login efetuado com sucesso como <b>funcionario</b>!</h3>
        <br>
        <br>

        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/dish">Pratos</a></h6>
        </div>
        <br>
        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/reservations-func">Reservas</a></h6>
        </div>
        <br>
        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/categories">Categorias</a></h6>
        </div>
        <br>
        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/messages-func">Mensagens</a></h6>
        </div>
        <br>
        <div style="text-align: center">
            <h6><a class="btn btn-outline-secondary btn-lg" aria-current="page" href="/images">Imagens</a></h6>
        </div>
    </div>

    <br>
    <br>

    <div style="text-align: left">
        <p>Em caso de dúvidas ou problemas contacte o seu gestor informático, obrigado.</p>
        <p><b>Contacto:</b> +351 965 542 351 - Aurélio Silva - IT Manager</p>
    </div>

    <br>

@endsection
