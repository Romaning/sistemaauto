@foreach($datosvehiculo as $filavehiculo)
@endforeach
@foreach($datosvehiculo as $datovehiculo)
@endforeach
    <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /*html, body {
            background-color: white;
        }*/

        * {
            font-family: "Times New Roman", sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            /*background-color: white;*/
        }

        .font_times {
            font-family: "Times New Roman", sans-serif, Arial, Verdana, "Trebuchet MS", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            background-color: white;
        }

        .centrar-vertical {
            display: flex;
            align-items: center;
        }

        .titulo_1 {
            font-size: 1.3rem;
            font-weight: bold;
        }

        .titulo_2 {
            font-size: 1.3rem;
            font-weight: bold;
        }


        #markered {
            @if(!isset($datosFuncionario))
            /*background-image: url({{--{{asset('imagenes_store/funcionarios/'.$datosFuncionario[0]->ci.'/'.$datosFuncionario[0]->imagen_perfil--}})}});*/
            @endif
            background-size: cover;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            cursor: pointer;
        }

        .mapboxgl-popup {
            max-width: 200px;
        }
    </style>
    <link rel="stylesheet" id="css-main" href="{{asset('cs_js_reports/css/oneui.min.css')}}">
    {{--<link rel="stylesheet" id="css-main" href="{{asset('assets/css/oneui.css')}}">--}}
    <script src="{{asset('https://api.tiles.mapbox.com/mapbox-gl-js/v1.6.1/mapbox-gl.js')}}"></script>
    <link href="{{asset('https://api.tiles.mapbox.com/mapbox-gl-js/v1.6.1/mapbox-gl.css')}}" rel="stylesheet"/>
</head>
<body>

<div class="block-options">
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="button" class="{{--btn-block-option--}} btn btn-primary" id="btnImprimir"
                    onclick="One.helpers('print');" style="width: 100%;">
                IMPRIMIR
            </button>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-2 font-size-sm pr-7">
        <img src="{{asset('image_proyect/logos/elalto_report.jpg')}}" alt="" width="130px">
    </div>
    <div class="col-md-8 text-center justify-content-center centrar-vertical">
        <h3 class="align-self-center" id="titulo_gobierno"><u>GOBIERNO AUTÓNOMO MUNICIPAL DE EL ALTO</u></h3>
    </div>
    <div class="col-md-2 text-right font-size-sm pl-3">
        <img src="{{asset('image_proyect/logos/gamea_report.jpg')}}" alt="" width="130px">
    </div>
</div>

<!-- Page Content -->
<div class="content content-boxed">

    <!-- Invoice -->
    <div class="block">
        {{--CABECERA DE INFORMACIÓN--}}
        <div class="block-header text-center">
            <div class="col-md-12">
                <div class="block-title">
                    <div class="h3">SISTEMA DE CONTROL PARQUE AUTOMOTOR</div>
                    <div class="h4">(SPA)</div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            <div class="col-md-6">FECHA EMISIÓN DE REPORTE:</div>
                            <div class="col-md-4">{{date('Y-m-d H:i:s')}}</div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        {{-- MAIN (CONTENIDO PRINCIPAL)--}}
        <div class="block-content">
            <div class="p-sm-4 p-xl-7">
                <div class="vehiculo">
                    <div class="row margen_ml2_5_and_2_all mb-4">
                        <div class="titulo_1 font_times">VEHÍCULO</div>
                    </div>
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--I. --}}IDENTIFICACIÓN DEL VEHÍCULO</div>
                    </div>
                    <div class="row margen_ml2_5_and_2_all">
                        <div class="col-md-1"></div>
                        <div class="col-md-7 mb-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">PLACA:</div>
                                    <div class="col">{{$datovehiculo->placa_id}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">CRPVA:</div>
                                    <div class="col">{{$datovehiculo->numero_crpva}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">DOCUMENTO DE IMPORTACIÓN:</div>
                                    <div class="col">{{$datovehiculo->documento_importacion}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">NÚMERO DOCUMENTO DE IMPORTACIÓN:</div>
                                    <div class="col">{{$datovehiculo->numero_documento_importacion}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--II. --}}DATOS TÉCNICOS</div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">NÚMERO CHASIS:</div>
                                    <div class="col">{{$datovehiculo->numero_chasis}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">NÚMERO MOTOR:</div>
                                    <div class="col">{{$datovehiculo->numero_motor}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">CLASE:</div>
                                    <div class="col">{{$datovehiculo->clase_descripcion}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">MARCA:</div>
                                    <div class="col">{{$datovehiculo->marca_descripcion}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">TIPO:</div>
                                    <div class="col">{{$datovehiculo->tipo_descripcion}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">TIPO COMBUSTIBLE:</div>
                                    <div class="col">{{$datovehiculo->tipo_combustible_descripcion}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">RUEDAS:</div>
                                    <div class="col">{{$datovehiculo->ruedas}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">COLOR:</div>
                                    <div class="col">{{$datovehiculo->color}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">PLAZAS:</div>
                                    <div class="col">{{$datovehiculo->plazas}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--II. --}}OTROS DATOS</div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-7">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">TIPO USO:</div>
                                    <div class="col">{{$datovehiculo->tipo_uso_descripcion}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">FECHA DE INCORPORACIÓN A LA INSTITUCIÓN:</div>
                                    <div class="col">{{$datovehiculo->fecha_incorporacion_institucion}}</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">FECHA DE INICIO DE ACTIVIDADES:</div>
                                    @if(!isset($diaInicioActividades))
                                        <div class="col">{{$diaInicioActividades[0]->fecha_inicio}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="row margen_ml2_5_and_2_all">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <div class="h5">III. DATOS </div>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- END Invoice -->

</div>
<!-- END Page Content -->

<!-- Invoice -->
<div class="block mt-6 mb-0">
    <div class="block-content">
        DOCUMENTOS DE PROPIEDAD
    </div>
</div>
@foreach($datosdocumentospropiedadvehicular as $filadocpropvehi)
    <div class="row">
        <div class="col-md-12">
            <img src="{{asset('imagenes_store/documentos/'.$filadocpropvehi->archivo_subido.'')}}" width="100%">
            <div class="row">
                <div class="col-12 text-center">
                    @php
                        $name_imag = str_replace(".jpg", "", $filadocpropvehi->nombre_documento_propiedad);
                        $name_imag = str_replace(".png", "", $filadocpropvehi->nombre_documento_propiedad);
                        $name_imag = str_replace(".jpg", "", $name_imag);
                    @endphp
                    {{$name_imag}}
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="block">
    <div class="block-content">
        FOTOGRAFIAS
    </div>
</div>
@foreach($datosimagenperfilvehicular as $fileimgperfil)
    <div class="row mb-8">
        <div class="col-md-12">
            <img src="{{asset('imagenes_store/vehiculos/'.$fileimgperfil->archivo_subido.'' )}}" width="100%">
        </div>
    </div>
@endforeach

@foreach($asignaciones as $asignacion)
@endforeach
<div class="row">
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    @if(empty($asignaciones))
                        <div class="row">
                            <div class="col-lg-12 text-center justify-content-center">
                                <label for="" class="btn btn-danger">
                                    <span class="font-italic">VEHÍCULOS NO ASIGNADO</span>
                                </label>
                            </div>
                        </div>
                    @else
                        <div class="form-group">
                            <div class="titulo_2 font_times">{{--I. --}}ASIGNACIÓN</div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="asignacion">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">FECHA DE ASIGNACIÓN ACTIVO:</div>
                                            <div class="col-md-6">{{$asignacion->fecha_asignacion}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">NÚMERO MEMORÁNDUM DE TRANSEFERENCIA:</div>
                                            <div class="col-md-6">{{$asignacion->identificador_memorandum}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">TIPO DE ASIGNACIÓN:</div>
                                            <div class="col-md-6">{{$asignacion->tipo_conductor_chofer}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="titulo_2 font_times">{{--I. --}}
                                INFROMACIÓN SOBRE {{$asignacion->tipo_conductor_chofer}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                @foreach($datosFuncionario as $datofuncionario)
                                @endforeach
                                <div class="funcionario">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">DEPENDENCIA:</div>
                                            <div class="col">{{$datofuncionario->departamento_nombre}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">CI:</div>
                                            <div class="col">{{$datofuncionario->ci}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">EXPEDIDO EN:</div>
                                            <div class="col">{{$datofuncionario->ci_exped_en}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">APELLIDOS:</div>
                                            <div class="col">{{$datofuncionario->apellidos}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">NOMBRES:</div>
                                            <div class="col">{{$datofuncionario->nombres}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">FECHA DE NACIMIENTO:</div>
                                            <div class="col">{{$datofuncionario->fecha_nac}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">NÚMERO DE LICENCIA:</div>
                                            <div class="col">{{$datofuncionario->numero_licencia}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">CATEGORIA DE LICENCIA:</div>
                                            <div class="col">{{$datofuncionario->categoria_licencia}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">FECHA DE EXPEDICIÓN DE LICENCIA:</div>
                                            <div class="col">{{$datofuncionario->fecha_expedicion_licencia}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">FECHA DE VENCIMIENTO DE LICENCIA:</div>
                                            <div class="col">{{$datofuncionario->fecha_vencimiento_licencia}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">NÚMERO DE ACCIDENTES:</div>
                                            <div class="col">{{$datofuncionario->numero_accidentes}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">CONTACTOS:</div>
                                            <div class="col">{{$datofuncionario->contacto}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">TIPO DE CONTRATO:</div>
                                            <div class="col">{{$datofuncionario->tipo_contrato_descripcion}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">FECHA INICIO DE CONTRATO:</div>
                                            <div class="col">{{$datofuncionario->fecha_ini_tipo_contrato}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">FECHA FIN DE CONTRATO:</div>
                                            <div class="col">{{$datofuncionario->fecha_fin_tipo_contrato}}</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">DISPONIBILIDAD ACTUAL:</div>
                                            <div class="col">{{$datofuncionario->estado_func_descripcion}}</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <style>
                                                #map {
                                                    height: 400px;
                                                    width: 100%;

                                                }

                                                .coordinates {
                                                    background: rgba(0, 0, 0, 0.5);
                                                    color: #fff;
                                                    position: absolute;
                                                    bottom: 40px;
                                                    left: 10px;
                                                    padding: 5px 10px;
                                                    margin: 0;
                                                    font-size: 11px;
                                                    line-height: 18px;
                                                    border-radius: 3px;
                                                    display: none;
                                                }
                                            </style>
                                            <label for="map" class="mb-4">UBICACIÓN FUNCIONARIO: </label>
                                            <div id="map"></div>
                                            <pre id="coordinates" class="coordinates"></pre>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group d-none">
                                                <div id="markered">
                                                    <img src="{{asset('imagenes_store/funcionarios/'.$datofuncionario->ci.'/'.$datofuncionario->imagen_perfil)}}" width="100px;" alt="">
                                                </div>
                                                <input type="text" class="form-control js-maxlength d-none"
                                                       name="coordenday"
                                                       id="coordenday"
                                                       value="{{$datofuncionario->coordenday}}"
                                                       maxlength="191" data-always-show="true"
                                                       data-placement="top">
                                                <input type="text" class="form-control js-maxlength d-none"
                                                       name="coordendax"
                                                       id="coordendax"
                                                       value="{{$datofuncionario->coordendax}}"
                                                       maxlength="191" data-always-show="true"
                                                       data-placement="top">
                                            </div>
                                        </div>
                                        {{--<div class="col-md-12">
                                            <div class="form-group">
                                                <img src="{{asset('imagenes_store/funcionarios/'.$datofuncionario->ci.'/'.$datofuncionario->imagen_perfil)}}" width="50px;" alt="">
                                            </div>
                                        </div>--}}
                                    </div>
                                    {{--{{$datofuncionario->imagen_perfil}}--}}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@if (isset($asignaciones))
    <div class="row">
        <div class="col-md-12">
            <img src="{{asset('imagenes_store/asignaciones/'.$asignacion->archivo_memorandum)}}" width="100%">
        </div>
    </div>
@endif


<div class="row">
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--I. --}}
                            HISTORIAL DE ASIGNACIONES
                        </div>
                    </div>
                    <div class="table-responsive push">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>FECHA ASIGNACIÓN</th>
                                <th>NUM MEMORÁNDUM</th>
                                <th style="width: 150px;">CI</th>
                                <th>APELLIDOS</th>
                                <th>NOMBRES</th>
                                <th>TIPO ASIGNACIÓN</th>
                                <th>CAT. LIC.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $contador=1; @endphp
                            @foreach($historialAsignaciones as $historialAsignacion)
                                <tr>
                                    <td>{{$contador++}}</td>
                                    <td>{{$historialAsignacion->fecha_asignacion}}</td>
                                    <td>{{$historialAsignacion->identificador_memorandum}}</td>
                                    <td>{{$historialAsignacion->ci}} {{$historialAsignacion->ci_exped_en}}</td>
                                    <td>{{$historialAsignacion->apellidos}}</td>
                                    <td>{{$historialAsignacion->nombres}}</td>
                                    <td>{{$historialAsignacion->tipo_conductor_chofer}}</td>
                                    <td>{{$historialAsignacion->categoria_licencia}}</td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--I. --}}
                            HISTORIAL DE DODUMENTOS RENOVABLES POR PERIODO DE TIEMPO
                        </div>
                    </div>
                    <div class="table-responsive push">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>GESTIÓN</th>
                                <th>FECHA FIN COBERTURA DE SOAT</th>
                                <th class="text-center">BSISA</th>
                                <th class="text-center">INSPECCIÓN VEHICULAR</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $contador=1; @endphp
                            @foreach($datosdocumentosrenovable as $datodocumentorenovable)
                                <tr>
                                    <td>{{$contador++}}</td>
                                    <td>{{$datodocumentorenovable->gestion}}</td>
                                    <td>{{$datodocumentorenovable->fecha_fin_cobertura_soat}}</td>
                                    <td class="text-center">
                                        @if($datodocumentorenovable->bsisa == "1")
                                            SI
                                        @else
                                            NO
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($datodocumentorenovable->inspeccion_vehicular == "1")
                                            SI
                                        @else
                                            NO
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--I. --}}
                            HISTORIAL DE SEGUROS
                        </div>
                    </div>
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>N°</th>
                            <th>GESTIÓN</th>
                            <th>DESCRIPCIÓN</th>
                            <th>EMPRESA ASEGURADORA</th>
                            <th>FECHA DE VIGENCIA</th>
                            <th>GRUPO</th>
                            <th style="width:13%;">ARCHIVO SUBIDO</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $contador=1; @endphp
                        @foreach($datosseguro as $seguro)
                            <tr>
                                <td>
                                    {{$contador++}}
                                </td>
                                <td>
                                    {{$seguro->gestion}}
                                </td>
                                <td>
                                    {{$seguro->texto}}
                                </td>
                                <td>
                                    {{$seguro->empresa_aseguradora}}
                                </td>
                                <td>
                                    {{$seguro->fecha_vigencia}}
                                </td>
                                <td>
                                    @php $grupoID=$seguro->grupo_id; @endphp
                                    @if ($grupoID!="")
                                        <a href="{{route('seguro.show.group',$grupoID)}}"
                                           class="btn btn-sm btn-info push mb-md-0" data-toggle="tooltip"
                                           title="VER INFORMACIÓN DE GRUPO">
                                            {{$grupoID}}
                                        </a>
                                    @endif
                                </td>
                                {{--$$$$$$$$$$$$$$  input files $$$$$$$$$$$$$$--}}
                                <td class="text-center">
                                    @if ($seguro->archivo_subido!="")
                                        <i class="fa fa-check-circle"></i>
                                    @else
                                        <i></i>
                                    @endif
                                </td>
                                {{--$$$$$$$$$$$$$$  input files $$$$$$$$$$$$$$--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--I. --}}
                            HISTORIAL DE MANTENIMIENTOS
                        </div>
                    </div>
                    <div class="table-responsive push">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>FECHA INICIO DE MANTENIMIENTO</th>
                                <th>DETALLE MANTENIMIENTO</th>
                                <th>TIPO DE MANTENIMIENTO</th>
                                <th>EMPRESA ENCARGADA</th>
                                <th>FECHA INICIO DE MANTENIMIENTO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $contador=1; @endphp
                            @foreach($mantenimientos as $mantenimiento)
                                <tr>
                                    <td>{{$contador++}}</td>
                                    <td>{{$mantenimiento->fecha_inicio_mant}}</td>
                                    <td>{{$mantenimiento->detalle_mant}}</td>
                                    <td>{{$mantenimiento->tipo_mant}}</td>
                                    <td>{{$mantenimiento->empresa_encargada_mant}}</td>
                                    <td>{{$mantenimiento->fecha_fin_mant}}</td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--I. --}}
                            HISTORIAL DE ESTADO DE SERVICIO DE VEHICULO
                        </div>
                    </div>
                    <div class="table-responsive push">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>FECHA INICIO</th>
                                <th>ESTADO</th>
                                <th>MOTIVO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $contador=1; @endphp
                            @foreach($historialEstadoServicioVehiculo as $historialEstadoServicioVehi)
                                <tr>
                                    <td>{{$contador++}}</td>
                                    <td>{{$historialEstadoServicioVehi->fecha_inicio}}</td>
                                    <td>{{$historialEstadoServicioVehi->motivo}}</td>
                                    <td>{{$historialEstadoServicioVehi->est_descripcion}}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--I. --}}
                            HISTORIAL DE INFRACCIONES
                        </div>
                    </div>
                    <div class="table-responsive push">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>FECHA INFRACCION</th>
                                <th>GESTIÓN</th>
                                <th>SERIE</th>
                                <th>BOLETA</th>
                                <th>CÓDIGO</th>
                                <th>DESCRIPCIÓN</th>
                                <th>MONTO (Bs)</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $contador=1; @endphp
                            @foreach($infracionesInst as $infracionInst)
                                <tr>
                                    <td>{{$contador++}}</td>
                                    <td>{{$infracionInst->fecha_infraccion}}</td>
                                    <td>{{$infracionInst->gestion}}</td>
                                    <td>{{$infracionInst->serie}}</td>
                                    <td>{{$infracionInst->boleta}}</td>
                                    <td>{{$infracionInst->condigo}}</td>
                                    <td>{{$infracionInst->descripcion}}</td>
                                    <td>{{$infracionInst->monto}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--I. --}}
                            HISTORIAL DE INCIDENCIAS
                        </div>
                    </div>
                    <div class="table-responsive push">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>CI</th>
                                <th>APELLIDOS y NONBRES</th>
                                {{--<th>NOMBRES</th>--}}
                                <th>TIPO DE INCIDENCIA</th>
                                <th>FECHA DE INCIDENCIA</th>
                                <th>VEHÍCULO EN MOVIMIENTO</th>
                                <th>LUGAR DE INCIDENCIA</th>
                                <th>DESCRIPCIÓN</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $contador=1; @endphp
                            @foreach($datosincidencias as $datoincidencia)
                                <tr>
                                    <td>{{$contador++}}</td>
                                    <td>{{$datoincidencia->ci}} {{$datoincidencia->ci_exped_en}}</td>
                                    <td>{{$datoincidencia->apellidos}} {{$datoincidencia->nombres}}</td>
                                    {{--<td>{{$datoincidencia->nombres}}</td>--}}
                                    <td>{{$datoincidencia->tipo_incidencia_descripcion}}</td>
                                    <td>{{$datoincidencia->fecha_incidencia}}</td>
                                    <td>{{$datoincidencia->vehiculo_en_movimiento}}</td>
                                    <td>{{$datoincidencia->lugar_incidencia}}</td>
                                    <td>{{$datoincidencia->descripcion}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="content content-boxed">
        <!-- Invoice -->
        <div class="block">
            <div class="block-content">
                <div class="p-sm-4 p-xl-7">
                    <div class="form-group">
                        <div class="titulo_2 font_times">{{--I. --}}
                            HISTORIAL VALES DE COMMBUSTIBLES
                        </div>
                    </div>
                    <div class="table-responsive push">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th>NÚMERO VALE DE COMBUSTIBLE</th>
                                <th>FECHA ENTREGA VALE DE COMBUSTIBLE</th>
                                <th>TIPO DE COMBUSTIBLE</th>
                                <th>CANTIDAD</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($valesporplaca as $datovale)
                                <tr>
                                    <td>
                                        {{$datovale->numero_vale}}
                                    </td>
                                    <td>
                                        {{$datovale->fecha_entrega}}
                                    </td>
                                    <td>
                                        {{$datovale->tipo_combustible_descripcion}}
                                    </td>
                                    <td>
                                        {{$datovale->cantidad}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('cs_js_reports/oneui.core.min.js')}}"></script>
<script src="{{asset('cs_js_reports/oneui.app.min.js')}}"></script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoicm9tYW5mcmFuY28iLCJhIjoiY2s0ZDU1dTh5MDdmdDNkbXpndmttMTA2YSJ9.1aDtba7t8APV2yQsz1-lIg';

    /*instanciando y configurando el mapa*/
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [document.getElementById('coordenday').value, document.getElementById('coordendax').value], // starting position
        zoom: 14 // starting zoom
    });

    /*
    var popup = new mapboxgl.Popup({ closeOnClick: false })
        .setLngLat([document.getElementById('coordenday').value, document.getElementById('coordendax').value])
        .setHTML('<h1>Hello World!</h1>')
        .addTo(map);*/

    // create the popup
    var html_para =$('#markered').html();
        var popup = new mapboxgl.Popup({closeOnClick: false})
        .setHTML(html_para);
    /*.setText('Construction on the Washington Monument began in 1848.');*/

    /*marcador dentro de map*/
    var marcador = new mapboxgl.Marker({draggable: false})
        .setLngLat([document.getElementById('coordenday').value, document.getElementById('coordendax').value])
        .setPopup(popup) /*incorporamos el popup aqui*/
        .addTo(map);

    /*cuadrito de informacion de latitud y longitud*/
    coordinates.style.display = 'block';
    coordinates.innerHTML =
        'Longitude: ' + document.getElementById('coordenday').value + '<br/>' +
        'Latitude: ' + document.getElementById('coordendax').value;

    /*map.on('click', function (e) {
        coordinates.style.display = 'block';
        coordinates.innerHTML =
            'Longitude: ' + e.lngLat.lng + '<br />Latitude: ' + e.lngLat.lat;

        var puntoMarcador = document.querySelector(".mapboxgl-marker");
        if (puntoMarcador) {
            puntoMarcador.remove();
        }
        var marcador = new mapboxgl.Marker({draggable: false})
            .setLngLat([e.lngLat.lng, e.lngLat.lat])
            .setPopup(popup)
            .addTo(map);
        document.getElementById('coordenday').value = (e.lngLat.lng);
        document.getElementById('coordendax').value = (e.lngLat.lat);
    });*/

    $(document).ready(function () {
        $(".mapboxgl-marker").click();
        $("#btnImprimir").click();
    });
</script>
</body>
</html>
