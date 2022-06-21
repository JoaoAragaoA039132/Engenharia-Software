@extends('layouts.app-master')
@section('content')
<div class="bg-light p-5 rounded" style="margin:10px;">
    <div class="about-section">
        <h1>Sobre Nós</h1>
        <p>O grupo Restaurante ES’s presente no mercado da restauração  desde 1969, encontra-se sediado no distrito do Porto.</p>
        <p>Com um percurso de evolução e crescimento ao longo dos anos, assente em pilares de extrema qualidade e dedicação, trabalhando e desenvolvendo todas as vertentes da nossa actividade com uma atitude positiva, contagiando quem nos visita com a mesma energia e paixão que aplicamos todos os dias aos nossos projectos.</p>
        <p>De momento reunimos uma vasta rede de espaços de restauração, constituída por dezassete estabelecimentos, todos orientados para servir e fidelizar os nossos clientes.</p>
    </div>
    <h2 style="text-align:center">Equipa</h2>
    <div class="row">
      <div class="column">
        <div class="card">
          <img src="https://static.globalnoticias.pt/tsf/image.jpg?brand=TSF&type=generate&guid=83492f80-700a-4407-809e-9ee39f7ccaf7" alt="Rui" style="width:50%">
          <div class="container">
            <h2>Rui Paula</h2>
            <p class="title">Chef</p>
            <p>chefruipaula@restaurantees.pt</p>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <img src="https://jbchost.com.br/ht/wp-content/uploads/2016/08/CelsoAmano_sushicup-800x533.jpg" alt="Celso" style="width:50%">
          <div class="container">
            <h2>Celso Amano</h2>
            <p class="title">Sushimen</p>
            <p>celso@restaurantees.pt</p>
          </div>
        </div>
    </div>
</div>

@endsection
