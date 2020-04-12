@extends('layouts.app')

@section('content')

<div id="side_bar" class="clearfix">
    <h2 style="float: left;">Ventas</h2>
    <a style="float: left; position: relative; top: 3px; right: -20px;" href="/exportar"><button type="button" class="btn btn-success btn-sm">Exportar</button></a><br><br><br>
</div>


<div class="row">
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">${{$total}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ventas</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$count}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-cart-plus fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Esta semana</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">${{$last_week_sum}}</div>
                </div>
                <div class="col-auto">
                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Esta semana</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$last_week_count}}</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-cart-plus fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<br>





<div class="table-responsive">
    <table class="table table-hover compact-table">
        <div class="table-header">

            <thead>
                <tr>
                    <th scope="col" style="width: 10%">Código</th>
                    <th scope="col" style="width: 40%">Servicio</th>
                    <th scope="col" style="width: 10%">Total</th>
                    <th scope="col" style="width: 50%">Fecha</th>
                </tr>
            </thead>
        </div>
        <tbody>
            @php
            $num = 1;
            @endphp
            @foreach($sales as $sale)
            <tr>
                <th scope="row">{{$sale->id}}</th>
                <td><a href="/ventas/{{$sale->id}}" data-toggle="tooltip" data-placement="top" title="{{$sale->service_1}}">{{substr($sale->service_1, 0, 25)}}
                        @if(strlen($sale->service_1) > 25)
                        {{"..."}}
                        @endif
                    </a>
                    @if(strlen($sale->service_2) > 0)
                    <span class="badge badge-secondary" data-toggle="tooltip" title="Ver más servicios...">+1</span>
                    @endif</td>
                <td>${{$sale->total}}</td>
                <td>{{$sale->created_at}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $sales->links() }}

</div>
@endsection

<style>
    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #e3e6f0;
        border-radius: 0.35rem;
    }

    .border-left-success {
        border-left: 0.25rem solid #1cc88a !important;
    }

    .text-gray-300 {
        color: #dddfeb !important;
    }

    .text-success {
        color: #1cc88a !important;
    }
</style>