@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">

            <div class="service-card">
                <div class="row">
                    <div class="col-10">
                        <h2>Venta #{{$sale->id}} - ${{$sale->total}}</h2>
                    </div>
                    <div class="col-2">
                        <div class="col-1">
                            <div class="dropdown">
                                <a href="" class="btn btn-link dropdown-toggle" role="button" data-toggle="dropdown">
                                    <i class="fas fa-cog"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" type="button" data-toggle="modal" data-target="#delete-modal"><i class="far fa-trash-alt"></i> Eliminar</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 ">
                        <h5>Servicio</h5>
                        {!! Form::text('name_1', $sale->service_1, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off', 'readonly']) !!}<br>
                        {!! Form::text('name_2', $sale->service_2, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off', 'readonly']) !!}<br>
                        {!! Form::text('name_3', $sale->service_3, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off', 'readonly']) !!}<br>
                        {!! Form::text('name_4', $sale->service_4, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off', 'readonly']) !!}<br>
                        {!! Form::text('name_5', $sale->service_5, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off', 'readonly']) !!}<br>
                        {!! Form::label('Cargo adicional', null, ['class' => 'd-flex flex-row-reverse']) !!}<br>
                        {!! Form::label('Total', null, ['class' => 'd-flex flex-row-reverse']) !!}<br>
                        {!! Form::label('Creado', null, ['class' => 'd-flex flex-row-reverse']) !!}<br>

                    </div>

                    <div class="col-6">
                        <h5>Precio</h5>
                        {!! Form::text('price_1', $sale->price_1, ['class' => 'form-control form-control-sm', 'id' => 'price_1', 'readonly']) !!}<br>
                        {!! Form::text('price_2', $sale->price_2, ['class' => 'form-control form-control-sm', 'id' => 'price_2', 'readonly']) !!}<br>
                        {!! Form::text('price_3', $sale->price_3, ['class' => 'form-control form-control-sm', 'id' => 'price_3', 'readonly']) !!}<br>
                        {!! Form::text('price_4', $sale->price_4, ['class' => 'form-control form-control-sm', 'id' => 'price_4', 'readonly']) !!}<br>
                        {!! Form::text('price_5', $sale->price_5, ['class' => 'form-control form-control-sm', 'id' => 'price_5', 'readonly']) !!}<br>
                        {!! Form::text('price_extra', $sale->price_extra, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ejemplo: 399', 'id' => 'adicional', 'autocomplete' => 'off', 'readonly']) !!} <br>
                        {!! Form::text('total', $sale->total,['class' => 'form-control form-control-sm', 'placeholder' => 'Ejemplo: 399', 'id' => 'total', 'autocomplete' => 'off', 'readonly']) !!}<br>
                        {!! Form::text('created_at', $sale->created_at,['class' => 'form-control form-control-sm', 'readonly']) !!}
                    </div>
                        {!! Form::close() !!}
                </div>
                <a href="/ventas"><button type="button" class="btn btn-secondary"> <i class="fas fa-chevron-left"></i> Atrás</button></a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar: <strong>Venta #{{$sale->id}}</strong></h5>
                <button class="close" type="button" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <span>¿Estás seguro? Esta acción no podrá deshacerse.</span>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

                @csrf
                {!! Form::model($sale, ['method' => 'DELETE', 'action' => ['SaleController@destroy', $sale->id]]) !!}
                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger'])!!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
</div>


@endsection('content')