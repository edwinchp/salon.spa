@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Crear nuevo servicio</h1>
            <div class="service-card">
                {!! Form::open(['method' => 'POST', 'action' => 'ServiceController@store']) !!}
                @csrf
                {!! Form::label('Nombre') !!}
                {!! Form::text('Nombre', null, ['class' => 'form-control', 'required']) !!}
                <br>
                {!! Form::label('Precio') !!}
                {!! Form::text('Precio', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: 399']) !!}
                <br>
                {!! Form::label('Categoria') !!}
                {!! Form::select('Categoria', ['CORTE' => 'Corte'], 'CORTE', ['class' => 'form-control'])!!}
                <br>
                {!! Form::label('Descripción') !!}
                {!! Form::textarea('Descripcion', null, ['class' => 'form-control', 'rows'=>'2']) !!}
                <br><br>
                {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
                <a href="/servicios"><button type="button" class="btn btn-secondary">Cancelar</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection('content')

<!--
<div id="mydiv"></div>

                <div class="form-group">
                    <input type="button" class="btn btn-default" value="Ajouter" onclick="createNew()" />
                </div>

<script>
    var i = 2;

    function createNew() {
        $("#mydiv").append('<div class="form-group">' + '<input type="text" name="rows[' + i + '][Title]" class="form-control" placeholder="libelé"/>' +
            '</div>' + '<div class="form-group">' + '<input type="text" name="rows[' + i + '][Quantity]" class="form-control" placeholder="Quantité"/>' + '</div>' + '<div class="form-group">' + '<input type="text" name="rows[' + i + '][Price]" class="form-control" placeholder="Prix unitaire "/>' + '</div>' + '<div class="form-group">' +
            '<input type="button" name="" class="btn btn-default" value="Ajouter" onclick="createNew()" />' +
            '</div><br/>');
        i++;
    }
</script>-->