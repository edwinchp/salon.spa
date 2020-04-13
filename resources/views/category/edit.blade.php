@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Editar</h1>
            <div class="service-card">
                {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoryController@update', $category->id]]) !!}
                {!! Form::label('Título') !!}
                {!! Form::text('Titulo', $category->title, ['class' => 'form-control', 'required']) !!}
                <br>
                <br>
                {!! Form::label('Descripción') !!}
                {!! Form::textarea('Descripcion', $category->description, ['class' => 'form-control', 'rows'=>'2']) !!}
                <br><br>
                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                <a href="/categorias"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                <a href="/categorias" type="button" data-toggle="modal" data-target="#delete-modal"><button type="button" class="btn btn-danger"> <i class="far fa-trash-alt"></i>  Eliminar</button></a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar: <strong>{{$category->title}}</strong></h5>
                <button class="close" type="button" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <span>¿Estás seguro? Esta acción no podrá deshacerse.</span>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                {!! Form::model($category, ['method' => 'DELETE', 'action' => ['CategoryController@destroy', $category->id]]) !!}
                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>
@endsection('content')
