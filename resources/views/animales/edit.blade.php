@extends("layouts.master")

@section("titulo")
    edit
@endsection

@section("contenido")
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Modificar un animal</h3>
                </div>
                <div class="card-body" style="padding:30px">
                    <form method="post" action=" {{ route('animales.update', $animal) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="especie"><strong>Especie</strong></label>
                            <input type="text" name="especie" id="especie" value="{{$animal->especie}}" class="form-control" required>
                            <br>
                        </div>
                        <div class="form-group">
                            <strong>Introduce el peso</strong> <input type="number" name="peso" value="{{$animal->peso}}">
                            <br><br>
                        </div>
                        <div class="form-group">
                            <strong>Introduce la altura</strong> <input type="number" name="altura" value="{{$animal->altura}}">
                            <br><br>
                        </div>
                        <div class="form-group">
                            <strong>Introduce la fecha de nacimiento</strong> <input type="date" name="fechaNac" value="{{$animal->fechaNac}}">
                            <br><br>
                        </div>
                        <div class="form-group">
                            <strong>Introduce tipo de alimentacion</strong> <input type="text" name="alimentacion" value="{{$animal->alimentacion}}">
                            <br><br>
                        </div>
                        <div class="form-group">
                            <label for="descripcion"><strong>Descripción</strong></label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" >{{$animal->descripcion}}</textarea>
                            <br>
                        </div>
                        <div class="form-group">
                            <strong>Introduce una imagen</strong> <br><input type="file" name="imagen" value="{{$animal->imagen}}">
                            <br><br>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-warning" style="padding:8px 100px;margin-top:25px;">
                                <strong>Modificar animal</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
