@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Editar</h1>
            <div class="service-card">
                {!! Form::model($service, ['method' => 'PATCH', 'action' => ['ServiceController@update', $service->id]]) !!}
                
                {!! Form::label('Nombre') !!}
                {!! Form::text('Nombre', $service->name, ['class' => 'form-control', 'required']) !!}
                <br>
                {!! Form::label('Precio') !!}
                {!! Form::text('Precio', $service->price, ['class' => 'form-control', 'placeholder' => 'Ejemplo: 399', 'autocomplete' => 'off']) !!}
                <br>
                {!! Form::label('Categoria') !!}
                {!! Form::select('Categoria', $categories, $service->category, ['class' => 'form-control'])!!}
                <br>
                {!! Form::label('Descripción') !!}
                {!! Form::textarea('Descripcion', $service->description, ['class' => 'form-control', 'rows'=>'2']) !!}
                <br><br>
                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                <a href="/servicios"><button type="button" class="btn btn-secondary">Cancelar</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection('content')
