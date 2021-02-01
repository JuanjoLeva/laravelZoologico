@extends("layouts.master")

@section("titulo")
    show
@endsection

@section("contenido")
    <div class="container">
        <div class="row">
                <div class="col-sm-3">
                        <img src="{{asset('assets/imagenes')}}/{{$animal->imagen}}" class="rounded-circle border border-primary" style="height:275px;width:200px"/>
                </div>

                <div class="col-sm-9">
                    <h3 class="align-center" style="min-height:45px;margin:5px 0 10px 0" >
                        {{$animal->especie}}
                    </h3>
                    <li><strong>Descripcion:</strong></li>
                    {{$animal->descripcion}}<br><br>

                    <li><strong>Años:</strong></li>
                    {{$animal->getEdad()}}<br><br>

                    <li><strong>Comida:</strong></li>
                    {{$animal->alimentacion}}<br><br>

                    <li><strong>Revisiones:</strong></li>
                    @foreach($animal->revisiones as $revision)
                        <ul>Fecha: {{$revision->fecha}} -- Revision numero: {{$revision->id}}</ul>
                    @endforeach<br>

                    <a href="{{ route('animales.edit', $animal) }}"><button class="btn btn-warning">Editar</button></a>
                    <a href="{{ route('animales.index') }}"><button class="btn btn-success">Mostrar todos los animales</button></a>
                    <a href="{{ route('revisiones.create', $animal) }}"><button class="btn btn-danger">Añadir revision</button></a>
                </div>
        </div>
    </div>
@endsection
