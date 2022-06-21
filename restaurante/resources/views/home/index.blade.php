@extends('layouts.app-master-home')
@section('content')
<div class="bg-light p-5 rounded" style="margin:10px;">
    @auth
        <h1>Restaurante ES</h1>
    @endauth
    @guest
        <h2>Restaurante ES</h2>
        <div class="row">
            <div style="vertical-align:middle"  class="col-sm-6">
                <img src="https://images-ext-1.discordapp.net/external/of5L0MiP20CQkqEjEqltexPHq6jJLgxlhbx3hMHqL58/https/images.trustinnews.pt/uploads/sites/5/2021/05/P1048552-1600x1066.jpg?width=1025&height=683" width="1000" height="500">
            </div>
            <div style="text-align: center" class="col-sm-6">
            <div>
            </div>
        </div>
        <br>
        <div style="text-align: center" class="col-sm-3">
        <br>
            <h5><b>Contactos: </b></h5>
            <h6><img src="https://cdn.icon-icons.com/icons2/1674/PNG/512/phonecall_110970.png" width="30" height="30">912833124</h6>
        </div>
        <div style="text-align: center" class="col-sm-3">
            <br>
            <h5><b>E-Mail: </b></h5>
            <h6><img src="https://cdn-icons-png.flaticon.com/512/281/281769.png" width="30" height="30">restaurante.es@gmail.pt</h6>
        </div>
        <div style="text-align: center" class="col-sm-6">
            <br>
            <h5><b>Morada: </b></h5>
            <h6><img src="https://www.worldvector.pt/wp-content/uploads/2015/05/icon-morada.png" width="30" height="30">Avenida Rodrigues de Freitas, nº1, 4300-456 Porto</h6>
        </div>
        @endguest
</div>
@endsection

