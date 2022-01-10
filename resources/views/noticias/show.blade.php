@extends('plantilla')

@section('title', $noticia->titulo)

@section('content')

    <div class="row">
        <h1 class="py-2 my-2">{{$noticia->titulo}}</h1>
        <h5 class="py-2 my-2">{{$noticia->subtitulo}}</h5>
        <img src="{{$noticia->imagen}}" alt="{{$noticia->titulo}}" class="my-imagen-show">
        <p class="py-2 my-2">{{$noticia->cuerpo}}</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo iste modi, incidunt architecto voluptas perspiciatis consectetur pariatur repellat animi quae, suscipit dolorem dicta! Nisi, illum et. Sit quisquam dicta, animi eum ratione hic neque ab, accusantium, rerum aliquid impedit expedita eaque facere delectus voluptate! Repellat voluptas, quis provident ducimus sequi expedita sunt quas, amet, hic dicta obcaecati voluptatibus accusantium ullam. Voluptate et doloremque, est odit perferendis saepe dolores, impedit aut corporis mollitia sunt, omnis repudiandae sed numquam excepturi. At aut iusto odit neque eos temporibus animi dolore excepturi iure, magni qui dolores cumque facere id ullam repellat! Rerum, dolor maiores.</p>
    </div>
    
    <div class="d-flex justify-content-around">
        <div class="d-flex">
            <b>Creada el: </b>
            <p>{{$noticia->created_at}}</p>
        </div>
        <div>
            <b>Categoria:</b>
            <a href="#" class="my-categoria-show">{{$noticia->categoria}}</a>
        </div>
    </div>
    
    <div class="d-flex justify-content-around">
        <div class="py-2 my-2">
            <a href="{{route('noticias.edit', $noticia)}}" class="btn btn-success">Editar</a>
        </div>
        <form class="py-2 my-2" action="{{route('noticias.destroy', $noticia)}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger">Eliminar</button>
        </form>
    </div>
    
@endsection