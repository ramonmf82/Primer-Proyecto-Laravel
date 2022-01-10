@extends('plantilla')

@section('title', 'Editar')

@section('content')
<h1 class="text-center my-5">Edita la noticia</h1>
<div class="row">
    <div class="col-12 col-md-2">

    </div>
    <div class="col-12 col-md-8">
        <form action="{{route('noticias.update', $noticia)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Título:</label>
                <input type="text" class="form-control" name="titulo" value="{{old('titulo') ?? $noticia->titulo}}">
            </div>

            @error('titulo')
                {{$message}}
            @enderror

            <div class="mb-3">
                <label class="form-label">Subtítulo:</label>
                <input type="text" class="form-control" name="subtitulo" value="{{old('subtitulo') ?? $noticia->subtitulo}}">
            </div>

            @error('subtitulo')
                {{$message}}
            @enderror

            <div>
                <p>Escribe la noticia:</p>
                <textarea class="my-form" id="exampleFormControlTextarea1" rows="10" name="cuerpo">{{old('cuerpo') ?? $noticia->cuerpo}}</textarea>
            </div>

            @error('cuerpo')
                {{$message}}
            @enderror

            <div>
                <p>Selecciona la categoría: </p>
                <select class="form-select" aria-label="Default select example" name="categoria" value="{{old('categoria') ?? $noticia->categoria}}">
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria}}">{{$categoria}}</option>
                    @endforeach
                </select>
            </div>

            @error('categoria')
                {{$message}}
            @enderror

            <!-- <div>
                <label class="form-label">Imagen de la noticia:</label>
                <input type="text" class="form-control" name="imagen" placeholder="Imagen">
            </div> -->
            <div class="my-2">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>
    <div class="col-12 col-md-2">

    </div>
</div>
    
    
@endsection