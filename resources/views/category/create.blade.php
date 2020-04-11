@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Crear nueva categoría</h1>
            <div class="service-card">
                {!! Form::open(['method' => 'POST', 'action' => 'CategoryController@store']) !!}
                @csrf
                {!! Form::label('Título') !!}
                {!! Form::text('Titulo', null, ['class' => 'form-control', 'required']) !!}
                <br>
                {!! Form::label('Descripción') !!}
                {!! Form::textarea('Descripcion', null, ['class' => 'form-control', 'rows'=>'2']) !!}
                <br><br>
                {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
                <a href="/categorias"><button type="button" class="btn btn-secondary">Cancelar</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection('content')
