@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">

            <div class="service-card">
                <div class="row">
                    <div class="col-10">
                        <h1>{{$service->name}}</h1>
                    </div>
                    <div class="col-2">
                        <div class="col-1">
                            <div class="dropdown">
                                <a href="" class="btn btn-link dropdown-toggle" role="button" data-toggle="dropdown">
                                    <i class="fas fa-cog"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="/servicios/{{$service->id}}/edit" class="dropdown-item"> <i class="far fa-edit"></i> Editar</a>
                                    <a class="dropdown-item" type="button" data-toggle="modal" data-target="#delete-modal"><i class="far fa-trash-alt"></i> Eliminar</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::model($service, ['method' => 'PATCH', 'action' => ['ServiceController@update', $service->id]]) !!}
                <br>
                {!! Form::label('Precio') !!}
                {!! Form::text('Precio', '$' .$service->price, ['class' => 'form-control', 'disabled', 'placeholder' => 'Ejemplo: 399']) !!}
                <br>
                {!! Form::label('Categoria') !!}
                {!! Form::select('Categoria', ['MASAJE'=>'Masaje', 'CORTE' => 'Corte'], $service->category, ['class' => 'form-control', 'disabled'])!!}
                <br>
                {!! Form::label('Descripción') !!}
                {!! Form::textarea('Descripcion', $service->description, ['class' => 'form-control', 'rows'=>'2', 'disabled']) !!}
                <br>
                <hr>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Actualizado en:</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" value="{{date_format($service->updated_at, 'd/m/Y g:i A')}}">
                    </div>
                    <label class="col-sm-3 col-form-label">Creado en:</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" value="{{date_format($service->created_at, 'd/m/Y g:i A')}}">
                    </div>
                </div>
                <br>
                <a href="/servicios"><button type="button" class="btn btn-secondary"> <i class="fas fa-chevron-left"></i> Atrás</button></a>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar: <strong>{{$service->name}}</strong></h5>
                <button class="close" type="button" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <span>¿Estás seguro? Esta acción no podrá deshacerse.</span>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                {!! Form::model($service, ['method' => 'DELETE', 'action' => ['ServiceController@destroy', $service->id]]) !!}
                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>


@endsection('content')