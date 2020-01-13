@extends('layouts.layoutmaster')
@section('title')
    REGISTRAR VALES DE COMBUSTIBLE
@endsection
@section('styles')
    {{--#################### START CSS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}
    @include('components.links_css_js.pluginsform.plugin_form_css')
    {{--#################### END CSS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}

    {{--##################### START CAROUSEL CSS #####################--}}
    @include('components.links_css_js.carousel.carousel_css')
    {{--##################### END CAROUSEL CSS #####################--}}
    <!-- Stylesheets -->
    <!-- Page CSS DIRECTO PARA SHOW VEHÍCULO -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/flatpickr/themes/material_green.css')}}">
@endsection

{{--################### MODIFICACION HERO #################--}}
@section('div_content_css','d-none')
@section('nuevo_contenido_hero')
    @component('components.Hero.herotexto')
        @slot('titulo1','Registrar Vales de Combustible')
        <li class="breadcrumb-item">SECCION 3</li>
        <li class="breadcrumb-item">VALES DE COMBUSTIBLE</li>
        <li class="breadcrumb-item">Informacion</li>
        <li class="breadcrumb-item" aria-current="page">
            <a class="link-fx" href="">Form Registrar Nuevo</a>
        </li>
    @endcomponent
@endsection
{{--################### MODIFICACION HERO #################--}}

@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    @include('components.alerts.alerttre')

    @if(count($errors) > 0)
        <div class="errors">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{csrf_field()}}
    <!-- Basic -->

    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                VALES DE COMBUSTIBLE
                <button id="btn_generar_filas" class="btn btn-primary shadow rounded"
                        style="float: right; justify-content: end;">
                    <i class="fas fa-plus-circle"></i> GENERAR CAMPOS
                </button>
            </h3>
        </div>
        <form action="{{route('vale.store')}}" method="POST" enctype="multipart/form-data" id="form_subir_devolucion">
            @csrf
            @method('POST')
            <table
                class="table {{--table-bordered--}} {{--table-striped table-vcenter--}}{{-- js-dataTable-buttons--}}">
                <thead>
                <tr>
                    <th class="d-none d-sm-table-cell">NÚMERO DE VALE</th>
                    <th class="d-none d-sm-table-cell">FECHA DE ENTREGA VALE DE COMBUSTIBLE</th>
                    <th class="d-none d-sm-table-cell">PLACA VEHÍCULO</th>
                    <th class="d-none d-sm-table-cell">TIPO DE COMBUSTIBLE</th>
                    <th class="d-none d-sm-table-cell">CANTIDAD (litros)</th>
                    <th style="width:3%;" class="text-sm-center">
                    </th>
                </tr>
                </thead>
                <tbody id="body_tb_form_in">
                <tr>
                    <td>
                        <input type="text" class="form-control" name="numero_vale[]" placeholder='...'>
                    </td>
                    <td>
                        <input type="date" class="form-control" name="fecha_entrega[]" placeholder='...'
                               required>
                    </td>
                    <td>
                        <select class="{{--js-select2 --}}form-control" name='placa_id[]' data-placeholder="Escoger..."
                        required>
                            <option></option>
                            @foreach($datosvehiculo as $vehiculo)
                                <option value='{{$vehiculo->placa_id}}'>{{$vehiculo->placa_id}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select class="{{--js-select2 --}}form-control" name='tipo_combustible[]' data-placeholder="Escoger..."
                                required>
                            <option></option>
                            @foreach($datostipocombustible as $datotipocombustible)
                                <option value='{{$datotipocombustible->tipo_combustible_id}}'>
                                    {{$datotipocombustible->tipo_combustible_descripcion}}
                                </option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="number" class="form-control" name="cantidad[]" placeholder='...'
                               required>
                    </td>
                    <td class="btn-eliminar">
                        <i class="fa fa-trash"></i>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-primary shadow rounded" style="float: right;">
                        GUARDAR
                    </button>
                </div>
            </div>
        </form>
        <div id="mensaje_respuesta_form_subir_devolucion"></div>
    </div>

    <div class="d-none">
        <button type="button" class="js-swal-success btn btn-light push" id="boton_exito">
            <i class="fa fa-check-circle text-success mr-1"></i> Launch Dialog
        </button>
    </div>
@endsection
@section('js_script_import')

    {{--############################ START SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}
    @include('components.links_css_js.pluginsform.plugin_form_js')
    {{--############################ END SCRIPTS PLUGINS PARA FORMS VALIDATIONS Page JS Plugins CSS BE_FORM_PLUGINS ####################--}}

    {{--###################### START SCRIPT JS CARROUSEL ####################--}}
    @include('components.links_css_js.carousel.carousel_js')
    {{--###################### END SCRIPT JS CARROUSEL ####################--}}

    {{--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$--}}
    {{--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ SCRIPT PERSONAL $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$--}}
    {{--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$--}}

    {{--#################################################### JAVA SCRIPT PERSONAL############################################################--}}
    <script type="text/javascript">
        /*COMO AVERIGUAR DONDE EN DONDE ESTA NUESTRO PROYECTO, POR EJEMPLO SI ESTAMOS EN localhost/proyecto3/proyectosLaravel/GAmeaAutoParkSys/public
        *   NOS MUESTRA EL URL POR MAS QUE ESTE EN VARIAS DIRECIONES HASTA PUBLIC*/
        var APP_URL = {!! json_encode(url('/')) !!};
        console.log(APP_URL);

        var nuveorequerimiento = $('#body_tb_form_in').html();
        $(document).on('click', '#btn_generar_filas', function () {
            $('#body_tb_form_in').append(nuveorequerimiento);
        });

        $(document).on('click', '.btn-eliminar', function () {
            $(this).parent().remove();
        })
    </script>

@endsection

