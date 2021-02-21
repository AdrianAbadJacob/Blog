@include('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Escribe algo!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Bienvenido {{$user->name}}


                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($libros as $libro)
<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">{{$libro->titulo}}</a></h1>
      <p class="lead my-3">{{$libro->Descripcion}}</p>
      <p class="lead my-3">Editorial {{$libro->Editorial}}</p>
      <p class="lead my-3">Año de publicación: {{$libro->Publicacion}}</p>
      
    </div>
</div>
@endforeach


@include('footer')