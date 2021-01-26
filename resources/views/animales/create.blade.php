@extends("layouts.master")

@section("titulo")
    create
@endsection

@section("contenido")
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Añadir animal</h3>
                </div>
                <div class="card-body" style="padding:30px">
                    <form method="post" action="{{route('animales.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="especie"><strong>Especie</strong></label>
                        <input type="text" name="especie" id="especie" class="form-control" required>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <strong>Introduce el peso</strong> <input type="number" name="peso">
                        <br><br>
                    </div>
                    <div class="form-group">
                        <strong>Introduce la altura</strong> <input type="number" name="altura">
                        <br><br>
                    </div>
                    <div class="form-group">
                        <strong>Introduce la fecha de nacimiento</strong> <input type="date" name="fechaNac">
                        <br><br>
                    </div>
                    <div class="form-group">
                        <strong>Introduce tipo de alimentacion</strong> <input type="text" name="alimentacion">
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label for="descripcion"><strong>Descripción</strong></label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <strong>Introduce una imagen</strong> <br> <input type="file" name="imagen">
                        <br><br>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-warning" style="padding:8px 100px;margin-top:25px;">
                            Añadir animal
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
