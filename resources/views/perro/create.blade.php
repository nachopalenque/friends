@extends('layout/template')
@section('title','Nuevo Perro')
@section('content')

<form action="{{url('/perros')}}" method="post">
    @csrf
    <section class="mb-3">
        <label for="nombre" class="form-label" id="codigo">Nombre: </label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </section>
    <section class="mb-3">
        <label for="raza" class="form-label" id="raza">Raza: </label>
        <input type="text" name="raza" id="raza" class="form-control">
    </section>
    <section class="mb-3">
    <label for="color" class="form-label" id="color">Color: </label>
    <input type="text" name="color" id="color"   class="form-control">
    </section>
    <section class="mb-3">
    <label for="peso" class="form-label" id="peso">Peso: </label>
    <input type="number" name="peso" id="peso" class="form-control">
    </section>
 
    <section class="mb-3">
    <label for="sexo" class="form-label" id="peso">Sexo: </label>
    <input type="text" name="sexo" id="sexo" class="form-control">
    </section>
 
    <button type="submit" class="btn btn-success">Guardar</button>

</form>
@endsection