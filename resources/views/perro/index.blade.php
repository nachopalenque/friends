@extends('layout/template')
@section('title','Perros')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>


<section class="container mb-3">
<h1>Perro</h1><br>
<form action="{{url('/cruce')}}" method="POST">
@csrf
<label for="idPerro1">Id del perro1 a cruzar</label><br>
<input type="number" id="idPerro1" name="idPerro1" placeholder="id del candidato 1 a cruzar"><br>
<label for="idPerro2">Id del perro2 a cruzar</label><br>
<input type="number" id="idPerro2" name="idPerro2" placeholder="id del candidato 2 a cruzar"><br>

<input type="submit" value="cruzar" class="btn btn-secondary m-3 p-3">

</form>
<span></span>
<span></span>




</section>

    
<h1>Lista de perros</h1>
<table class="table table-sm table-hover table-striped table-bordered">
        <thead>
            <tr>
                <td hidden>id</td>
                <td>Nombre</td>
                <td>Raza</td>
                <td>Color</td>
                <td>Peso</td>
                <td>Sexo</td>
                <td>Opciones</td>

            </tr>

        </thead>
        <tbody>
            @foreach($lista AS $item)
            <tr>
                <td hidden>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->raza}}</td>
                <td>{{$item->color}}</td>
                <td>{{$item->peso}}</td>
                <td>{{$item->sexo}}</td>
                <td>
                    <form action="{{url('/perros/'.$item->id)}}" method="get">
                        <input type="submit" class="btn btn-primary" value="ver">
                    </form> 
                </td> 

                <td>
                    <form action="{{url('/perros/'.$item->id.'/edit')}}" method="get">
                        <input type="submit" class="btn btn-secondary" value="editar">
                    </form> 
                </td>       
                <td>
                    <form action="{{url('/perros/'.$item->id)}}" method="post">
                    @method('DELETE')                   
                    @csrf
                        <input type="submit" class="btn btn-danger" value="eliminar">
                    </form> 
                </td>


            </tr>
            @endforeach
        </tbody>

    </table>


</body>
</html>
@endsection