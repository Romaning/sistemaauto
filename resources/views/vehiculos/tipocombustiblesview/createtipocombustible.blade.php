@extends('layouts.layoutmaster')
@section('title')
REGISTRAR TIPO COMBUSTIBLE
@endsection
@section('styles')

@endsection
{{--################### MODIFICACION HERO #################--}}
@section('div_content_css','d-none')
@section('nuevo_contenido_hero')
    @component('components.Hero.herotexto')
        @slot('titulo1','Registrar Tipo Combustible')
        <li class="breadcrumb-item">SECCION 1</li>
        <li class="breadcrumb-item">INDEPENDIENTES</li>
        <li class="breadcrumb-item" aria-current="page">
            <a class="link-fx" href="">Registrar Tipo Combustible</a>
        </li>
    @endcomponent
@endsection
{{--################### MODIFICACION HERO #################--}}
@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    @include('components.alerts.alerttre')
    <!-- Basic -->
    <div class="block shadow p-2 mb-1 rounded">
        <div class="block-header">
            <h3 class="block-title">Formulario</h3>
        </div>
        <div class="block-content block-content-full">
            <form action="{{route('tipo_combustible.store')}}" method="POST" enctype="multipart/form-data" {{--onsubmit="return false;"--}}>
                @csrf
                <div class="row push">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                            Ingrese Tipo Combustible de Vehiculo
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">
                        <div class="form-group">
                            <label for="example-text-input">Tipo Combustible</label>
                            <input type="text" class="form-control" id="tipo_combustibleDescripcionIdFront" name="tipo_combustibleDescripcionNameFront" placeholder="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                GUARDAR
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Basic -->
@endsection
@section('js_script_import')

@endsection

