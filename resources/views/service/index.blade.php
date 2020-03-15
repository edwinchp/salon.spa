@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col">
    <h1>Servicios</h1>
    </div>
    <div class="col col-sm-2">
    <a href="servicios/create"><button type="button" class="btn btn-success btn-sm">Nuevo servicio</button></a>
    </div>
  </div>

<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoría</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
        <tr>
            <th scope="row">{{$service->id}}</th>
            <td><a href="/servicios/{{$service->id}}">{{$service->name}}</a></td>
            <td>${{$service->price}}</td>
            <td>{{$service->category}}</td>
            <td>
            <button type="button" class="btn btn-secondary btn-sm" type="button" onclick="newService('{{$service->id}}', '{{$service->name}}', '{{$service->price}}')"><i class="fas fa-cart-plus"></i></button>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $services->links() }}





@endsection('content')

{!! Form::open(['method' => 'POST', 'action' => 'SaleController@store']) !!}
@csrf
<div class="form-group" id="sell-box">
<div id="sell-services">
</div>
</div>
{!! Form::submit('Crear') !!}
{!! Form::close()!!}

<style>
#sell-box{
    background-color:#ddd;
    position: fixed;
    padding: 2em;
    left: 50%;
    top: 0%;
    transform: translateX(-50%);
}

</style>


<script>
    var i = 1;
    function newService(id, name, price){
        if(i<6){
            $("#sell-services").append('<input type="text" name="name_' + i + '" class="form-control" value="'+name+'" id="sale_' + i + '" /> <input type="text" name="price_' + i + '" class="form-control" value="'+price+'" id="price_' + i + '" />');
        i++;
        }
    }
</script>