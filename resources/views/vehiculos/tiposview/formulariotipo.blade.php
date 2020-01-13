<form action="{{route('tipo.store.json')}}" method="POST" enctype="multipart/form-data" {{--onsubmit="return false;"--}}
id="formulario_create_tipo" class="formulario_from_vehiculo">
    @csrf
    <div class="row push">
        <div class="col-lg-4">
            <p class="font-size-sm text-muted">
                Ingrese Tipo de Vehiculo
            </p>
        </div>
        <div class="col-lg-8">
            <div class="form-group">
                <label for="example-text-input">Tipo</label>
                <input type="text" class="form-control" id="tipoDescripcionIdFront" name="tipoDescripcionNameFront" placeholder="">
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-success">
                    GUARDAR
                </button>
            </div>
        </div>
    </div>
</form>
