@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1>Confirmar compra</h1>
            <div class="service-card">
                {!! Form::open(['method' => 'POST', 'action' => 'SaleController@confirmSale']) !!}
                @csrf
                <div class="row justify-content-center">
                <div class="col-6 ">
                    <h3>Servicio</h3>
                {!! Form::text('name_1', $sale->service_1, ['class' => 'form-control']) !!}<br>               
                {!! Form::text('name_2', $sale->service_2, ['class' => 'form-control']) !!}<br>                
                {!! Form::text('name_3', $sale->service_3, ['class' => 'form-control']) !!}<br>                
                {!! Form::text('name_4', $sale->service_4, ['class' => 'form-control']) !!}<br>                
                {!! Form::text('name_5', $sale->service_5, ['class' => 'form-control']) !!}<br>
                {!! Form::label('Cargo adicional', null, ['class' => 'p-1 d-flex flex-row-reverse']) !!}<br>
                {!! Form::label('Recibo', null, ['class' => 'p-1 d-flex flex-row-reverse', 'focused']) !!}<br>
                {!! Form::label('Cambio', null, ['class' => 'p-1 d-flex flex-row-reverse']) !!}<br>
                {!! Form::label('Total', null, ['class' => 'p-1 d-flex flex-row-reverse']) !!}<br>
                               
                </div>
                <div class="col-6">
                    <h3>Precio</h3>
                {!! Form::text('price_1', $sale->price_1, ['class' => 'form-control', 'id' => 'price_1']) !!}<br> 
                {!! Form::text('price_2', $sale->price_2, ['class' => 'form-control', 'id' => 'price_2']) !!}<br> 
                {!! Form::text('price_3', $sale->price_3, ['class' => 'form-control']) !!}<br> 
                {!! Form::text('price_4', $sale->price_4, ['class' => 'form-control']) !!}<br> 
                {!! Form::text('price_5', $sale->price_5, ['class' => 'form-control']) !!}<br> 
                {!! Form::text('Precio', 0, ['class' => 'form-control', 'placeholder' => 'Ejemplo: 399']) !!} <br>
                {!! Form::text('Precio', null, ['class' => 'form-control', 'placeholder' => 'Ejemplo: 399']) !!} <br>
                {!! Form::text('Precio', 0, ['class' => 'form-control', 'placeholder' => 'Ejemplo: 399']) !!} <br>
                {!! Form::text('total', null ,['class' => 'form-control', 'placeholder' => 'Ejemplo: 399']) !!} <br>
                <input type="text" id="total">
                </div>
                
                
                <br><br>
                {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
                <a href="/servicios"><button type="button" class="btn btn-secondary">Cancelar</button>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection('content')



<script>
   $(function(){
       $('#price_1', '#price_2').keyup(function(){
           var price1 = parseFloat($('#price_1').val()) || 0;
           var price2 = parseFloat($('#price_2').val()) || 0;
            $('#total').val(price1 + price2);
       });
   });
</script>


