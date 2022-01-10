@extends('plantilla')

@section('title', 'Contacto')

@section('content')

    <h1 class="text-center my-5">Contacta con nosotros</h1>

    <div class="row">
        <div class="col-12 col-md-4"></div>
        <div class="col-12 col-md-4">
            <form action="" method="" class="my-3 py-3">
                <div class="mb-3 ordenar-form">
                    <label for="exampleFormControlInput1" class="form-label">-Tu correo electrónico:</label>
                    <input type="email" class="my-form" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3 ordenar-form">
                    <label for="exampleFormControlTextarea1" class="form-label">-Escríbenos y te contestaremos en breve:</label>
                    <textarea class="my-form" id="exampleFormControlTextarea1" rows="10" placeholder="Tu mensaje..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <div class="col-12 col-md-4"></div>
    </div>

@endsection