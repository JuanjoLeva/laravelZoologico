@extends("layouts.master")

@section("titulo")
    crear revision
@endsection

@section("contenido")
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Añadir revision</h3>
                </div>
                <div class="card-body" style="padding:30px">
                    <form method="post" action="{{route('revision.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="especie"><strong>Especie</strong></label>
                            <input type="text" name="especie" id="especie" class="form-control" readonly>
                            <br><br>
                        </div>
                        <div class="form-group">
                            <strong>Introduce la fecha de la revision</strong> <input type="date" name="fechaNac">
                            <br><br>
                        </div>
                        <div class="form-group">
                            <label for="descripcion"><strong>Descripción de la revision</strong></label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                            <br><br>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-danger" style="padding:8px 100px;margin-top:25px;">
                                Añadir revision
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
