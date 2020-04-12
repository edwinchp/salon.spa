@extends('layouts.app')

@section('content')

<div id="side_bar" class="clearfix">
    <h2 style="float: left;">Promociones</h2>
    <a style="float: left; position: relative; top: 3px; right: -20px;" href="promociones/create"><button type="button" class="btn btn-success btn-sm">Nueva promoción</button></a><br><br><br>
</div>

<div class="table-responsive">
    <table class="table table-hover compact-table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="width: 10%">#</th>
                <th scope="col" style="width: 40%">Nombre</th>
                <th scope="col" style="width: 10%">Precio</th>
                <th scope="col" style="width: 20%">Categoría</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
            $num = 1;
            @endphp
            @foreach($services as $service)
            <tr>
                <th scope="row">{{$num++}}</th>
                <td><a href="/servicios/{{$service->id}}" data-toggle="tooltip" data-placement="top" title="{{$service->name}}">{{substr($service->name, 0, 25)}}
                        @if(strlen($service->name) > 25)
                        {{"..."}}
                        @endif
                    </a></td>
                <td>${{$service->price}}</td>
                <td>{{substr($service->category, 0, 25)}}
                    @if(strlen($service->category) > 25)
                    {{"..."}}
                    @endif
                </td>
                <td>
                    <button type="button" class="btn btn-secondary btn-sm" type="button" onclick="newService('{{$service->id}}', '{{$service->name}}', '{{$service->price}}')"><i class="fas fa-cart-plus"></i></button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection('content')


<div class="card" style="width: 15rem;" id="sell-box">
    <div class="card-body">
        <h5 class="card-title">Carrito</h5>
        <p class="card-text">Haz click en el botón <i class="fas fa-cart-plus"></i> para comenzar a vender.</p>
        <div class="row">

            {!! Form::open(['method' => 'POST', 'action' => 'SaleController@store']) !!}
            <div class="form-group">
                <div id="sell-services">
                </div>
            </div>
            {!! Form::submit('Vender', ['class' => 'btn btn-primary']) !!}
            {!! Form::close()!!}

        </div>

    </div>
</div>

<style>
    #sell-box {
        position: fixed;
        padding: 1em;
        left: 90%;
        top: 10%;
        transform: translateX(-50%);
       
    }

    .compact-table {
        border: 1px;
        margin-left: auto;
        margin-right: auto;
        font-size: 14px;

    }
</style>


<script>
    var i = 1;

    function newService(id, name, price) {
        if (i < 6) {
            $("#sell-services").append('<input readonly type="text" name="name_' + i + '" class="list-group-item" value="' + name + '" id="sale_' + i + '" /> <input hidden type="text" name="price_' + i + '" class="form-control" value="' + price + '" id="price_' + i + '" />');
            i++;
        }
    }

    
</script>