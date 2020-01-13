<form action="{{route('marca.store.json')}}" method="POST" enctype="multipart/form-data" {{--onsubmit="return false;"--}}
id="formulario_create_marca" class="formulario_from_vehiculo">
    @csrf
    <div class="row push">
        <div class="col-lg-4">
            <p class="font-size-sm text-muted">
                Ingrese Marca de Vehiculo
            </p>
        </div>
        <div class="col-lg-8">
            <div class="form-group">
                <label for="example-text-input">Marca</label>
                <input type="text" class="form-control" id="marcaDescripcionIdFront" name="marcaDescripcionNameFront" placeholder="">
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-success">
                    GUARDAR
                </button>
            </div>
        </div>
    </div>
</form>
