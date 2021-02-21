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

<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Biografia del Autor</a></h1>
      <p class="lead my-3">Nació en el año 1993 en Palma de Mallorca.</p>

      
    </div>
</div>



@include('footer')