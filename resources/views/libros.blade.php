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
      <h2 class="display-4 fst-italic"><a href="libros/{{$libro->id}}">{{$libro->titulo}}</a></h2>
      <p class="lead my-3">{{$libro->Descripcion}}</p>
      
      
    </div>
</div>
@endforeach


@include('footer')
