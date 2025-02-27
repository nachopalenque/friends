@extends('layout/template')
@section('title','Editar Perro')
@section('content')

<h2>Editar:</h2>
<form action="{{url('/perros/'.$id)}}" method="post">
    @method("PUT")
    @csrf

    <section class="mb-3">
        <label for="nombre" class="form-label" id="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$perro->nombre}}">
    </section>

    <section class="mb-3">
        <label for="raza" class="form-label" id="raza">Raza:</label>
        <input type="text" name="raza" id="raza" class="form-control" value="{{$perro->raza}}">
    </section>

    <section class="mb-3">
    <label for="color" class="form-label" id="color">Color:</label>
    <input type="text" name="color" id="color"  value="{{$perro->color}}" class="form-control">
    </section>

    <section class="mb-3">
    <label for="peso" class="form-label" id="peso">Peso: </label>
    <input type="number" name="peso" id="peso" value="{{$perro->peso}}" class="form-control">
    </section>

    <section class="mb-3">
    <label for="sexo" class="form-label" id="sexo">Sexo: </label>
    <input type="text" name="sexo" id="sexo" value="{{$perro->sexo}}"class="form-control">
    </section>

    <button type="submit" class="btn btn-success">Guardar</button>

</form>
@endsection