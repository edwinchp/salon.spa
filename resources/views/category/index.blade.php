@extends('layouts.app')

@section('content')

<div id="side_bar" class="clearfix">
    <h2 style="float: left;">Categorías</h2>
    <a style="float: left; position: relative; top: 3px; right: -20px;" href="categorias/create"><button type="button" class="btn btn-success btn-sm">Nueva categoría</button></a><br><br><br>
</div>

<div class="container">
    <div class="row">
    @foreach($category as $cat)
    <div class="col-4 pt-3 pd-3">
            <div class="card" style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$cat->title}}</h5>
                    <div style="height:7rem;">
                        <p class="card-text">{{$cat->description}}</p>
                    </div>
                    
                    <a href="categorias/{{$cat->id}}" class="card-link">Ver más</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>


@endsection('content')