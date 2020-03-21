@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            <h1>Confirmar compra</h1>
            <div class="service-card confirm-sell">
                {!! Form::open(['method' => 'POST', 'action' => 'SaleController@confirmSale']) !!}
                @csrf
                <div class="row justify-content-center">
                    <div class="col-6 ">
                        <h3>Servicio</h3>
                        {!! Form::text('name_1', $sale->service_1, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off']) !!}<br>
                        {!! Form::text('name_2', $sale->service_2, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off']) !!}<br>
                        {!! Form::text('name_3', $sale->service_3, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off']) !!}<br>
                        {!! Form::text('name_4', $sale->service_4, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off']) !!}<br>
                        {!! Form::text('name_5', $sale->service_5, ['class' => 'form-control form-control-sm', 'autocomplete' => 'off']) !!}<br>
                        {!! Form::label('Cargo adicional', null, ['class' => 'd-flex flex-row-reverse']) !!}<br>
                        {!! Form::label('Recibo', null, ['class' => 'd-flex flex-row-reverse', 'focused']) !!}<br>
                        {!! Form::label('Cambio', null, ['class' => 'd-flex flex-row-reverse']) !!}<br>
                        {!! Form::label('Total', null, ['class' => 'd-flex flex-row-reverse']) !!}<br>

                    </div>

                    <div class="col-6">
                        <h3>Precio</h3>
                        {!! Form::text('price_1', $sale->price_1, ['class' => 'form-control form-control-sm', 'id' => 'price_1']) !!}<br>
                        {!! Form::text('price_2', $sale->price_2, ['class' => 'form-control form-control-sm', 'id' => 'price_2']) !!}<br>
                        {!! Form::text('price_3', $sale->price_3, ['class' => 'form-control form-control-sm', 'id' => 'price_3']) !!}<br>
                        {!! Form::text('price_4', $sale->price_4, ['class' => 'form-control form-control-sm', 'id' => 'price_4']) !!}<br>
                        {!! Form::text('price_5', $sale->price_5, ['class' => 'form-control form-control-sm', 'id' => 'price_5']) !!}<br>
                        {!! Form::text('adicional', 0, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ejemplo: 399', 'id' => 'adicional', 'autocomplete' => 'off']) !!} <br>
                        {!! Form::text('recibo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ejemplo: 200', 'id' => 'recibo', 'autocomplete' => 'off']) !!} <br>
                        {!! Form::text('Precio', 0, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ejemplo: 399', 'id' => 'cambio', 'autocomplete' => 'off', 'readonly']) !!} <br>
                        {!! Form::text('total', null ,['class' => 'form-control form-control-sm', 'placeholder' => 'Ejemplo: 399', 'id' => 'total', 'autocomplete' => 'off', 'readonly']) !!} <br>
                        <br><br>
                    {!! Form::submit('Confirmar', ['class' => 'btn btn-success']) !!}
                    <a href="/servicios"><button type="button" class="btn btn-secondary">Cancelar</button>

                    </div>


                    
                        {!! Form::close() !!}
                </div>
            </div>
    </div>

    <style>
        .confirm-sell{
            background-color: green;
        }
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        var price1 = parseFloat($('#price_1').val()) || 0,
            price2 = parseFloat($('#price_2').val()) || 0,
            price3 = parseFloat($('#price_3').val()) || 0,
            price4 = parseFloat($('#price_4').val()) || 0,
            price5 = parseFloat($('#price_5').val()) || 0,
            additional = parseFloat($('#adicional').val()) || 0;

        $(document).ready(function() {
            $('#total').val((price1 + price2 + price3 + price4 + price5 + additional).toFixed(2));
                });

        $(function() {
            $('#recibo, #price_1, #price_2, #price_3, #price_4, #price_5, #adicional').keyup(function() {
                price1 = parseFloat($('#price_1').val()) || 0,
                    price2 = parseFloat($('#price_2').val()) || 0,
                    price3 = parseFloat($('#price_3').val()) || 0,
                    price4 = parseFloat($('#price_4').val()) || 0,
                    price5 = parseFloat($('#price_5').val()) || 0,
                    additional = parseFloat($('#adicional').val()) || 0;
                $('#total').val((price1 + price2 + price3 + price4 + price5 + additional).toFixed(2));
                var recibo = parseFloat($('#recibo').val()) || 0;
                var total = parseFloat($('#total').val()) || 0;
                var sum = (recibo - total);
                $('#cambio').val(sum.toFixed(2));
            });

            $("#recibo").focus();
        });
    </script>
    @endsection('content')