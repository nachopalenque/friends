@extends('layout/template')
@section('title','Ver Perro')
@section('content')

<h2>Ver:</h2>
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><strong>Nombre:</strong> {{$perro->nombre}}</li>
    <li class="list-group-item"><strong>Raza:</strong> {{$perro->raza}}</li>
    <li class="list-group-item"><strong>Color:</strong> {{$perro->color}}</li>
    <li class="list-group-item"><strong>Peso: </strong> {{$perro->peso}}</li>
    <li class="list-group-item"><strong>Sexo: </strong> {{$perro->sexo}}</li>
  
</ul>
</div>
@endsection