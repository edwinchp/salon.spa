@extends('layouts.app')

@section('content')

<div id="side_bar" class="clearfix">
    <h2 style="float: left;">Categorías ({{$category->count()}})</h2>
    <a style="float: left; position: relative; top: 3px; right: -20px;" href="categorias/create"><button type="button" class="btn btn-success btn-sm">Nueva categoría</button></a><br><br><br>
</div>

<div class="container">
    <div class="row">
        @foreach($category as $cat)
        <div class="col-4 pt-3 pd-3">
            <div class="card" style="width: 14rem;">
            @if($cat->path != null)
                <img src="storage/{{$cat->path}}" class="card-img-top" alt="Imagen de la categoría">
            @endif
                <div class="card-body">
                    <h5 class="card-title">{{substr($cat->title, 0, 38)}}
                        @if(strlen($cat->title) > 40)
                        {{"..."}}
                        @endif
                    </h5>
                    <div style="height:7rem;">
                        <p class="card-text">{{substr($cat->description, 0, 80)}}
                            @if(strlen($cat->description) > 80)
                            {{"..."}}
                            @endif
                        </p>
                    </div>

                    <a href="categorias/{{$cat->id}}" class="card-link">Ver más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection('content')