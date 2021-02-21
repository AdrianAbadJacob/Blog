
@include('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">-</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Bienvenido {{$user->name}}

                   @if ($user->name=='administrador')
                        <form method="POST" action="/insertar">
                            <input type="text" name="name" value=" {{$user->name}}" hidden>
                            Escribe algo que quieras compartir: <input type="text" name="entrada">
                            {{csrf_field()}}
                            <input type="submit" name="enviar" value="Blogear">
                        </form>
                    @endif
                
                </div>
            </div>
        </div>
    </div>
</div>
@foreach ($entradas as $entrada)
<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <p class="lead my-3">{{$entrada->usuario}} escribió:</p>
      <p class="lead my-3">{{$entrada->entrada}}</p>
      
    </div>
</div>
@endforeach


@include('footer')
