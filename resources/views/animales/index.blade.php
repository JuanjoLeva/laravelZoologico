@extends("layouts.master")

@section("titulo")
    index
@endsection

@section("contenido")
    <div class="container">
        <div class="row">
                @foreach( $animales as $clave => $animal )
                        <div class="card col-lg-6 col-md-6 col-sm-12 col-xs-12 border border-info">
                                <div class="card-body w-50  mx-auto d-block">
                                    <img class="rounded-circle border border-warning img-fluid" src="{{asset('assets/imagenes')}}/{{$animal->imagen}}" style="height:200px;width:250px"/>
                                    <h4 class="text-center" style="min-height:45px;margin:5px 0 10px 0">
                                        {{$animal['especie']}}
                                    </h4>
                                    <h5 class="card-text">-Peso: {{$animal->peso}} kg</h5>
                                    <h5 class="card-text">-Altura: {{$animal->altura}} cm</h5>
                                    <h5 class="card-text">-Fecha: {{$animal->fechaNac}}</h5>
                                    <h5 class="card-text">-Alimentacion: {{$animal->alimentacion}}</h5>
                                    <h5 class="card-text">-Revisiones: {{count($animal->revisiones)}}</h5>
                                    <br>
                                    <h3 class="text-center">
                                        <a href="{{ route('animales.show' , $animal ) }}">
                                            Información <i class="icon ion-md-search" size="large"></i>
                                        </a>
                                    </h3>
                                </div>
                        </div>
                @endforeach
        </div>
    </div>
@endsection
