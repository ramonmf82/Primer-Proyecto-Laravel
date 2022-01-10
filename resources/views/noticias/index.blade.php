@extends('plantilla')

@section('title', 'Noticias')

@section('content')
    
    <li class="nav-item">
        <a class="my-link mx-5" href="{{route('noticias.create')}}">Crear Noticia</a>
    </li>

    <h1 class="text-center my-5">Las noticias que te interesan</h1>
    
    <div class="row">
        <div class="col-12 my-2 py-2"> 
            @foreach($noticias as $noticia)
            @if($noticia->id % 2 == 0)
            <div class="my-3 py-3 my-border-index-izdo">
                <div class="d-flex flex-wrap">
                    <img src="{{$noticia->imagen}}" class="my-img-index" alt="{{$noticia->titulo}}">
                    <div class="px-2 mx-2 my-titulo-index-izdo">
                        <a href="{{route('noticias.show', $noticia)}}" class="my-titulo-index"><h2>{{$noticia->titulo}}</h2></a>
                        <b>Categoría:   </b><a href="#" class="btn btn-primary">{{$noticia->categoria}}</a>
                    </div>
                </div>      
            </div>  
            @else
            <div class="my-3 py-3 my-border-index-dcho">
                <div class="d-flex flex-wrap">
                     <div class="px-2 mx-2 my-titulo-index-dcho">
                        <a href="{{route('noticias.show', $noticia)}}" class="my-titulo-index"><h2>{{$noticia->titulo}}</h2></a>
                        <b>Categoría:   </b><a href="#" class="btn btn-primary">{{$noticia->categoria}}</a>
                    </div>
                    <img src="{{$noticia->imagen}}" class="my-img-index" alt="{{$noticia->titulo}}">
                </div>      
            </div> 
            @endif
            @endforeach
        </div>
    </div>

@endsection