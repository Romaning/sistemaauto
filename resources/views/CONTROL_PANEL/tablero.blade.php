{{--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ HOME $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$--}}
@extends('layouts.layoutmaster')
@section('title')
    TABLERO
@endsection
@section('styles')
    {{--<!-- Favicon-->
    <link rel="icon" href="../../../favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
          type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">--}}
    <link rel="stylesheet" href="{{asset('cssromsys/style.css')}}">
    {{--
        <link rel="stylesheet" href="{{asset('cssromsys/animate.css')}}">
        <link rel="stylesheet" href="{{asset('cssromsys/style.css')}}">
        <link rel="stylesheet" href="{{asset('cssromsys/waves.css')}}">--}}
@endsection
@section('sidebar_header_perfil_usuario_css','d-none')
@section('hero_cuadro_bienvenida')
@section('css_hero','d-none')
@section('New_Hero')
    <!-- Instructors -->
    {{--<div class="bg-image" style="background-image: url({{asset('assets/media/photos/photo27@2x.jpg')}});">--}}
    <div class="bg-image" style="background-image: url({{asset('image_proyect/fondo_hero9.jpg')}});">
        <div class="bg-primary-dark-op py-1">
            <div class="content content-full content-boxed text-center">
                <h2 class="font-w400 text-white mb-2 {{--mb = margin-button--}} invisible" data-toggle="appear"
                    data-offset="50"
                    data-class="animated fadeInDown" style="font-family:'Times New Roman';">BIENVENIDO
                    ADMINISTRADOR</h2>
                <h3 class="h4 font-w400 text-white-75 invisible" data-toggle="appear" data-timeout="300"
                    data-class="animated fadeInDown">{{-- $$$$$$$$$ TEXTO $$$$$$$ --}}</h3>
                <div class="row items-push mt-1"> {{--mt = margin-top --}}
                    <div class="col-md-4 invisible" data-toggle="appear" data-offset="-150" data-timeout="150"
                         data-class="animated fadeInRight">
                        {{--<img class="img-avatar img-avatar-thumb" src="{{asset('assets/media/avatars/avatar1.jpg')}}"
                             alt="">
                        <div class="font-size-lg text-white mt-1">Lisa Jenkins</div>--}}{{--###--}}{{--
                        <div class="font-size-sm text-white-50">Web Designer</div>--}}
                    </div>
                    <div class="col-md-4 invisible" data-toggle="appear" data-offset="-150"
                         data-class="animated zoomIn">
                        <img class="img-avatar img-avatar-thumb" src="{{asset('assets/media/avatars/avatar13.jpg')}}"
                             alt="">
                        <div class="font-size-lg text-white mt-1">
                            @if (Route::has('login'))
                                @auth
                                    {{ Auth::user()->name }}
                                @else
                                @endauth
                            @endif</div>{{--###--}}
                        <div class="font-size-sm text-white-50">Super Usuario</div>
                    </div>
                    <div class="col-md-4 invisible" data-toggle="appear" data-offset="-150" data-timeout="150"
                         data-class="animated fadeInLeft">
                        {{--<img class="img-avatar img-avatar-thumb" src="{{asset('assets/media/avatars/avatar3.jpg')}}"
                             alt="">
                        <div class="font-size-lg text-white mt-1">Judy Ford</div> --}}{{--###--}}{{--
                        <div class="font-size-sm text-white-50">Photographer</div>--}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END Instructors -->
@endsection
@endsection
@section('content')
    {{--
    array:1 [▼
      0 => {#565 ▼
        +"mes": 10
        +"numero_vehiculos": 4
      }
    ]
    --}}
    {{--
    $incidenciasAnoActual
    $anoActual
    $incidenciasAnoAnterior
    $anoAnterior

    $contValesPorPlacaMesActual
    $numeroVehiculos
    $numeroDepartamentos
    $numeroFuncionarios
    $numeroAsigancionesActiva
    $numeroVehiculosSinAsignaciones
    $numeroDeVehiculosEnServicio
    $numeroDeVehiculosFueraServicio

$numeroInfraccionesPorMes
$numeroInfraccionesPorMesAnoAnterior
$numeroBsisaPorGesion
$numeroInspeccionPorGestion
$numeroSoatPorGestionActivo
$numeroSoatVencido
    --}}
    <div class="{{--content content-boxed --}}overflow-hidden">
        <div class="row">
            <div class="col-6 col-md-3 col-lg-6 col-xl-3 invisible" data-toggle="appear" data-timeout="200"
                 data-class="animated fadeInDown">
                <a class="block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x shadow"
                   href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">NÚMERO TOTAL DE VEHÍCULOS</div>
                        <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                             data-to="@if(empty($numeroVehiculos)) 0 @else {{$numeroVehiculos[0]->total_vehiculos}} @endif"
                             data-speed="7000"
                             data-fresh-interval="1">X
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3 invisible" data-toggle="appear" data-timeout="400"
                 data-class="animated fadeInDown">
                <a class="block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x shadow"
                   href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">NÚMERO DE DEPENDENCIAS</div>
                        <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                             data-to="{{$numeroDepartamentos[0]->numero_departamentos}}"
                             data-speed="7000"
                             data-fresh-interval="1">X
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3 invisible" data-toggle="appear" data-timeout="600"
                 data-class="animated fadeInDown">
                <a class="block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x shadow"
                   href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">NÚMERO DE FUNCIONARIOS</div>
                        <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                             data-to="{{$numeroFuncionarios[0]->numero_funcionarios}}"
                             data-speed="7000"
                             data-fresh-interval="1">X
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3 invisible" data-toggle="appear"
                 data-class="animated fadeInDown">
                <a class="block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x shadow"
                   href="javascript:void(0)">
                    @if(empty($contValesPorPlacaSemanaActual)) {{-- SI NO EXISTE DATOS --}}
                    <div class="block-content block-content-full {{--btn-warning--}}" style="background-color: red;"
                         style="background-color: red;">
                        <div class="font-size-sm font-w600 text-uppercase text-white">
                            <small>VEHÍCULOS CON VALE EN SEMANA{{--(L-D)--}}: </small>
                        </div>
                        <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                             data-to="0"
                             data-speed="1000"
                             data-fresh-interval="1">X
                        </div>
                    </div>
                    @else
                        @foreach($contValesPorPlacaSemanaActual as $filacontValesPorPlacaSemanaActual)
                        @endforeach
                        @if($numeroVehiculos[0]->total_vehiculos == $filacontValesPorPlacaSemanaActual->numero_vehiculos)
                            <div class="block-content block-content-full">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">
                        @else
                            <div class="block-content block-content-full {{--btn-warning--}}"|
                                 style="background-color: red;">
                                <div class="font-size-sm font-w600 text-uppercase text-white">
                         @endif


                                    <small>VEHÍCULOS CON VALE EN SEMANA{{--(L-D)--}}
                                        : </small>{{--{{$filacontValesPorPlacaSemanaActual->semana}}--}}
                                </div>
                                <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                                     data-to="{{$filacontValesPorPlacaSemanaActual->numero_vehiculos}}"
                                     data-speed="1000"
                                     data-fresh-interval="1">X
                                </div>
                            </div>
                        @endif
                </a>
            </div>

        </div>
    </div>
    {{--<div class="block shadow p-2 mb-1 rounded" id="" data-toggle="appear" data-class="animated bounceIn">--}}


    <div class="block shadow p-2 mb-1 rounded" id="" data-toggle="appear" data-class="animated bounceIn">
        <!-- Dashboard Charts -->
        <div class="row">
            <div class="col-lg-12">
                <div class="block block-rounded block-mode-loading-oneui">
                    <div class="block-header">
                        <h3 class="block-title">INCIDENCIAS</h3>
                        <div class="row" id="antAnoEsteAno">
                            <div class="col-lg-12">
                                <div class="text-lg-center">
                                    {{(date('Y')-1)}} - {{date('Y')}}
                                </div>
                            </div>
                        </div>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-settings"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-0 bg-body-light text-center">
                        <!-- Chart.js is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js) -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <div class="pt-3" style="height: 250px;">
                            <canvas class="js-chartjs-dashboard-incidencia"></canvas>
                        </div>
                    </div>
                    <div class="block-content">

                    </div>
                </div>
            </div>
        </div>
        <!-- END Dashboard Charts -->
    </div>


    <div class="">
        <div class="row">
            <div class="col-md-6" style="/*background-color: #faf9fb; */padding-top: 1.3rem; padding-bottom: 0rem;">
                <div class="row {{--block shadow--}}">
                    <div class="col-6 col-md-6 col-lg-6 {{--col-xl-3--}} invisible" data-toggle="appear"
                         data-class="animated fadeInDown">
                        <a class="block block-rounded block-link-pop border-left border-danger border-4x shadow border-hecho-azul-marino"
                           href="javascript:void(0)">
                            @if(($numeroAsigancionesActiva[0]->numero_asignaciones == 0))
                                <div class="block-content block-content-full {{--btn-warning--}}"
                                     style="background-color: red;">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted text-white">VEHÍCULOS
                                        ASIGNADOS
                                    </div>
                                    <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                                         data-to="0" data-speed="1000"
                                         data-fresh-interval="1">
                                    </div>
                                </div>
                            @else
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">VEHÍCULOS ASIGNADOS
                                    </div>
                                    <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                                         data-to="{{$numeroAsigancionesActiva[0]->numero_asignaciones}}"
                                         data-speed="1000"
                                         data-fresh-interval="1">
                                    </div>
                                </div>
                            @endif
                        </a>
                    </div>
                    <div class="col-6 col-md-6 col-lg-6 col-xl-6 invisible" data-toggle="appear" data-timeout="200"
                         data-class="animated fadeInDown">
                        <a class="block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x shadow"
                           href="javascript:void(0)">
                            @if($numeroVehiculosSinAsignaciones==0)
                                @php($css = "")
                                <div class="block-content block-content-full">
                                    @else
                                        @php($css = "text-white")
                                        <div class="block-content block-content-full {{--btn-warning--}}"
                                             style="background-color: red;">
                                            @endif
                                            <div class="font-size-sm font-w600 text-uppercase text-muted {{$css}}">
                                                VEHÍCULOS
                                                NO
                                                ASIGNADOS
                                            </div>
                                            <div class="font-size-h2 font-w400 count-to "
                                                 data-from="0" data-to="{{$numeroVehiculosSinAsignaciones}}"
                                                 data-speed="1000"
                                                 data-fresh-interval="1">
                                            </div>
                                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="background-color: #f5f5f5; padding-top: 1.3rem; padding-bottom: 0rem;">
                <div class="row">
                    <div class="col-md-6 invisible" data-toggle="appear" data-timeout="400"
                         data-class="animated fadeInDown">
                        <a class="block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x shadow"
                           href="javascript:void(0)">
                            @if($numeroDeVehiculosEnServicio[0]->numero_vehiculo_en_servicio==0)
                                <div class="block-content block-content-full {{--btn-warning--}}"
                                     style="background-color: red;">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted text-white">VEHÍCULOS
                                        EN
                                        SERVICIO
                                    </div>
                                    <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                                         data-to="0"
                                         data-speed="1000"
                                         data-fresh-interval="1">X
                                    </div>
                                </div>
                            @else
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">VEHÍCULOS EN
                                        SERVICIO
                                    </div>
                                    <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                                         data-to="{{$numeroDeVehiculosEnServicio[0]->numero_vehiculo_en_servicio}}"
                                         data-speed="1000"
                                         data-fresh-interval="1">X
                                    </div>
                                </div>
                            @endif
                        </a>
                    </div>

                    <div class="col-md-6 invisible" data-toggle="appear" data-timeout="600"
                         data-class="animated fadeInDown">
                        <a class="block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x shadow"
                           href="javascript:void(0)">
                            @if($numeroDeVehiculosFueraServicio==0)
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">VEHÍCULOS FUERA DE
                                        SERVICIO
                                    </div>
                                    <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                                         data-to="0" data-speed="1000"
                                         data-fresh-interval="1">X
                                    </div>
                                </div>
                            @else
                                <div class="block-content block-content-full {{--btn-warning--}}"
                                     style="background-color: red;">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted text-white">VEHÍCULOS
                                        FUERA DE
                                        SERVICIO
                                    </div>
                                    <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                                         data-to="{{$numeroDeVehiculosFueraServicio}}" data-speed="1000"
                                         data-fresh-interval="1">X
                                    </div>
                                </div>
                            @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Stats -->



    {{--<div class="row">--}}
    <div class="row">
        <div class="col-lg-6" style="padding-top: 1rem;">
            <!-- Bars Chart -->
            <div class="block" style="padding-top: 1rem;">
                <div class="block-header">
                    <h3 class="block-title">INFRACCIONES </h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-lg-center">
                                <small>{{(date('Y')-1)}} - {{date('Y')}}</small>
                            </div>
                        </div>
                    </div>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-1">
                        <!-- Bars Chart Container -->
                        <canvas class="js-chartjs-bars"></canvas>
                    </div>
                </div>
            </div>
            <!-- END Bars Chart -->
        </div>
        <div class="col-lg-6">
            <div class="row" style="background-color: #f0f0f0; padding-top: 1.3rem;">
                <div class="col-md-6 invisible" data-toggle="appear" data-timeout="200"
                     data-class="animated fadeInDown">
                    <a class="shadow block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x"
                       href="javascript:void(0)">
                        @if(empty($numeroBsisaPorGesion))
                            <div class="block-content block-content-full {{--btn-warning--}}"
                                 style="background-color: red;">
                                <div class="font-size-sm font-w600 text-uppercase text-muted text-white">VEHÍCULOS CON
                                    BSISA
                                </div>
                                <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                                     data-to="0"
                                     data-speed="1000" data-fresh-interval="1">X
                                </div>
                            </div>
                        @else
                            <div class="block-content block-content-full">
                                <div class="font-size-sm font-w600 text-uppercase text-muted ">VEHÍCULOS CON BSISA</div>
                                <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                                     data-to="{{$numeroBsisaPorGesion[0]->numero_total_bsisa}}"
                                     data-speed="1000" data-fresh-interval="1">X
                                </div>
                            </div>
                        @endif
                    </a>
                </div>
                <div class="col-md-6 invisible" data-toggle="appear" data-timeout="200"
                     data-class="animated fadeInDown">
                    <a class="shadow block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x"
                       href="javascript:void(0)">
                        @if(empty($numeroSinBsisaPorGesion))
                            <div class="block-content block-content-full text-dark" {{--style="background-color: red;"--}}>
                                <div class="font-size-sm font-w600 text-uppercase text-muted">VEHÍCULOS SIN
                                    BSISA
                                </div>
                                <div class="font-size-h2 font-w400 count-to" data-from="0"
                                     data-to="0"
                                     data-speed="1000" data-fresh-interval="1">X
                                </div>
                            </div>
                        @else
                            <div class="block-content block-content-full {{--bg-danger--}}"
                                 style="background-color: red;">
                                <div class="font-size-sm font-w600 text-uppercase text-muted text-white">VEHÍCULOS SIN
                                    BSISA
                                </div>
                                <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                                     data-to="{{$numeroSinBsisaPorGesion}}"
                                     data-speed="1000" data-fresh-interval="1">X
                                </div>
                            </div>
                        @endif
                    </a>
                </div>
            </div>

            <div class="row" style="background-color: #ebebeb; padding-top: 1.3rem;">
                <div class="col-6 invisible" data-toggle="appear" data-timeout="400" data-class="animated fadeInDown">
                    <a class="shadow block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x"
                       href="javascript:void(0)">
                        @if(empty($numeroInspeccionPorGestion))
                            <div class="block-content block-content-full {{--btn-warning--}}"
                                 style="background-color: red;">
                                <div class="font-size-sm font-w600 text-uppercase text-muted text-white">VEHÍCULOS CON
                                    INSPECCION
                                    VEHICULAR
                                </div>
                                <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                                     data-to="0" data-speed="1000"
                                     data-fresh-interval="1">X
                                </div>
                            </div>
                        @else
                            <div class="block-content block-content-full">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">VEHÍCULOS CON INSPECCION
                                    VEHICULAR
                                </div>
                                <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                                     data-to="{{$numeroInspeccionPorGestion[0]->numero_total_inspeccion}}"
                                     data-speed="1000"
                                     data-fresh-interval="1">X
                                </div>
                            </div>
                        @endif

                    </a>
                </div>
                <div class="col-6 invisible" data-toggle="appear" data-timeout="400" data-class="animated fadeInDown">
                    <a class="shadow block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x"
                       href="javascript:void(0)">
                        @if(empty($numeroSinInspeccionPorGestion))
                            <div class="block-content block-content-full {{--btn-warning--}}">
                                <div class="font-size-sm font-w600 text-uppercase text-muted text-dark">
                                    VEHÍCULOS SIN INSPECCION VEHICULAR
                                </div>
                                <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                                     data-to="0" data-speed="1000"
                                     data-fresh-interval="1">X
                                </div>
                            </div>
                        @else
                            <div class="block-content block-content-full" style="background-color: red;">
                                <div class="font-size-sm font-w600 text-uppercase text-muted text-white">
                                    VEHÍCULOS SIN INSPECCION VEHICULAR
                                </div>
                                <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                                     data-to="{{$numeroSinInspeccionPorGestion}}"
                                     data-speed="1000"
                                     data-fresh-interval="1">X
                                </div>
                            </div>
                        @endif

                    </a>
                </div>
            </div>
            <div class="row" style="background-color: #e5e5e5; padding-top: 1.3rem;">
                <div class="col-6 invisible" data-toggle="appear" data-timeout="200" data-class="animated fadeInDown">
                    <a class="shadow block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x"
                       href="javascript:void(0)">
                        @if(isset($numeroSoatPorGestionActivo))
                            <div class="block-content block-content-full {{--btn-warning--}}"
                                 style="background-color: red;">
                                <div class="font-size-sm font-w600 text-uppercase text-muted text-white">VEHÍCULOS CON
                                    SOAT
                                </div>
                                <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                                     data-to="0" data-speed="1000"
                                     data-fresh-interval="1">X
                                </div>
                            </div>
                        @else
                            <div class="block-content block-content-full">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">VEHÍCULOS CON SOAT</div>
                                <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                                     data-to="{{$numeroSoatPorGestionActivo[0]->numero_total_soat_activos}}"
                                     data-speed="1000"
                                     data-fresh-interval="1">X
                                </div>
                            </div>
                        @endif
                    </a>
                </div>
                <div class="col-6 invisible" data-toggle="appear" data-timeout="400" data-class="animated fadeInDown">
                    <a class="shadow block block-rounded block-link-pop border-left border-hecho-azul-marino border-4x"
                       href="javascript:void(0)">
                        @if(isset($numeroSoatVencido) or $numeroSoatVencido=="0" or $numeroSoatVencido==0 or $numeroSoatVencido==null or $numeroSoatVencido=="null")
                            <div class="block-content block-content-full">
                                <div class="font-size-sm font-w600 text-uppercase text-muted">SOAT VENCIDOS</div>
                                <div class="font-size-h2 font-w400 text-dark count-to" data-from="0"
                                     data-to="0" data-speed="1000"
                                     data-fresh-interval="1">X
                                </div>
                            </div>
                        @else
                            <div class="block-content block-content-full {{--btn-warning--}}"
                                 style="background-color: red;">
                                <div class="font-size-sm font-w600 text-uppercase text-muted text-white">SOAT VENCIDOS
                                </div>
                                <div class="font-size-h2 font-w400 text-white count-to" data-from="0"
                                     data-to="{{$numeroSoatVencido[0]->numero_total_soat_vencidos}}" data-speed="1000"
                                     data-fresh-interval="1">X
                                </div>
                            </div>
                        @endif
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- END Page Content -->
    {{--{{$numeroBsisaPorGesion[0]->numero_total_bsisa}}
    {{$numeroInspeccionPorGestion[0]->numero_total_inspeccion}}
    {{$numeroSoatPorGestionActivo[0]->numero_total_soat}}

    @if(empty($numeroSoatVencido))
        NO HAY SOAT VENCIDOS
    @else
        {{$numeroSoatVencido[0]->numero_total_soat}}
    @endif--}}


    {{--<div class="block shadow p-2 mb-1 rounded" id="" data-toggle="appear" data-class="animated bounceIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="block block-rounded block-mode-loading-oneui">
                    <div class="block-header">
                        <h3 class="block-title">Sales</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-settings"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content p-0 bg-body-light text-center">
                        <div class="pt-3" style="height: 300px;">
                            <canvas class="js-chartjs-dashboard-infraccion"></canvas>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>--}}

    {{--#$$$$$$$$$$$$$$$################$$$$$$$$$$$$$$$## LOADER #################$$$$$$$$$$$$$$$$$####################--}}
    <div id="page-loader" class="show"></div>
    {{--#$$$$$$$$$$$$$$$################$$$$$$$$$$$$$$$## LOADER #################$$$$$$$$$$$$$$$$$####################--}}
@endsection

@section('js_script_import')
    <script src="{{asset('jsromsys/jquery.countTo.js')}}"></script>
    <script src="{{asset('jsromsys/infobox-4.js')}}"></script>
    <script src="{{asset('assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script>/*#$#$#$#$#$#$#$#$#$#$*/
        var arrayInfraccionesAnoActual = [];
        var infraccionesAnoActual = @json($numeroInfraccionesPorMes);
        console.log(infraccionesAnoActual);
        var mes = 0;
        for (var j = 1; j <= 12; j++) {
            if (infraccionesAnoActual[mes] !== undefined) {
                if (infraccionesAnoActual[mes].mes == j) {
                    arrayInfraccionesAnoActual.push(infraccionesAnoActual[mes].numero_infracciones);
                    mes++;
                } else {
                    arrayInfraccionesAnoActual.push(0);
                }
            } else {
                arrayInfraccionesAnoActual.push(0);
            }
        }/*#$#$#$#$#$#$#$#$#$#$*/
        var arrayInfraccionesAnoAnterior = [];
        var infraccionesAnoAnterior = @json($numeroInfraccionesPorMesAnoAnterior);
        console.log(infraccionesAnoAnterior);
        var ms = 0;
        for (var k = 1; k <= 12; k++) {
            if (infraccionesAnoAnterior[ms] !== undefined) {
                if (infraccionesAnoAnterior[ms].mes == k) {
                    arrayInfraccionesAnoAnterior.push(infraccionesAnoAnterior[ms].numero_infracciones);
                    ms++;
                } else {
                    arrayInfraccionesAnoAnterior.push(0);
                }
            } else {
                arrayInfraccionesAnoAnterior.push(0);
            }
        }
        console.log("-------------------------------------------------------------------------------------------------"); /*#$#$#$#$#$#$#$#$#$#$*/
        !function (r) {
            var e = {};

            function t(a) {
                if (e[a]) return e[a].exports;
                var o = e[a] = {i: a, l: !1, exports: {}};
                return r[a].call(o.exports, o, o.exports, t), o.l = !0, o.exports
            }

            t.m = r, t.c = e, t.d = function (r, e, a) {
                t.o(r, e) || Object.defineProperty(r, e, {enumerable: !0, get: a})
            }, t.r = function (r) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(r, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(r, "__esModule", {value: !0})
            }, t.t = function (r, e) {
                if (1 & e && (r = t(r)), 8 & e) return r;
                if (4 & e && "object" == typeof r && r && r.__esModule) return r;
                var a = Object.create(null);
                if (t.r(a), Object.defineProperty(a, "default", {
                    enumerable: !0,
                    value: r
                }), 2 & e && "string" != typeof r) for (var o in r) t.d(a, o, function (e) {
                    return r[e]
                }.bind(null, o));
                return a
            }, t.n = function (r) {
                var e = r && r.__esModule ? function () {
                    return r.default
                } : function () {
                    return r
                };
                return t.d(e, "a", e), e
            }, t.o = function (r, e) {
                return Object.prototype.hasOwnProperty.call(r, e)
            }, t.p = "", t(t.s = 2)
        }([, , function (r, e, t) {
            r.exports = t(3)
        }, function (r, e) {
            function t(r, e) {
                for (var t = 0; t < e.length; t++) {
                    var a = e[t];
                    a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(r, a.key, a)
                }
            }

            var a = function () {
                function r() {
                    !function (r, e) {
                        if (!(r instanceof e)) throw new TypeError("Cannot call a class as a function")
                    }(this, r)
                }

                var e, a;
                return e = r, a = [{
                    key: "initChartsChartJS", value: function () {
                        Chart.defaults.global.defaultFontColor = "#999",
                            Chart.defaults.global.defaultFontStyle = "600",
                            Chart.defaults.scale.gridLines.color = "rgba(0,0,0,.05)",
                            Chart.defaults.scale.gridLines.zeroLineColor = "rgba(0,0,0,.1)",
                            Chart.defaults.scale.ticks.beginAtZero = !0,
                            Chart.defaults.global.elements.line.borderWidth = 2,
                            Chart.defaults.global.elements.point.radius = 4,
                            Chart.defaults.global.elements.point.hoverRadius = 6,
                            Chart.defaults.global.tooltips.cornerRadius = 3,
                            Chart.defaults.global.legend.labels.boxWidth = 15;
                        var r, e, t = jQuery(".js-chartjs-lines"), a = jQuery(".js-chartjs-bars"),
                            o = jQuery(".js-chartjs-radar"), n = jQuery(".js-chartjs-polar"),
                            l = jQuery(".js-chartjs-pie"), i = jQuery(".js-chartjs-donut");
                        r = {
                            labels: ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"],
                            datasets: [{
                                label: "Año Anterior",
                                fill: !0,
                                backgroundColor: "rgba(223,218,222,0.86)",
                                borderColor: "rgb(63,65,220)",
                                pointBackgroundColor: "rgb(78,76,220)",
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgb(76,90,220)",
                                data: arrayInfraccionesAnoAnterior
                                /*backgroundColor: "rgba(220,220,220,.3)",
                                borderColor: "rgb(64,220,58)",
                                pointBackgroundColor: "rgb(87,220,64)",
                                pointBorderColor: "#fff",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgb(124,220,68)",
                                data: arrayInfraccionesAnoActual*/
                            }, {
                                label: "Este Año",
                                fill: !0,
                                backgroundColor: "rgb(66,243,20)",
                                borderColor: "rgb(34,55,227)",
                                pointBackgroundColor: "rgb(19,25,227)",
                                pointBorderColor: "#ff0e00",
                                pointHoverBackgroundColor: "#ff0d21",
                                pointHoverBorderColor: "rgb(20,38,227)",
                                data: arrayInfraccionesAnoActual
                            }]
                        }, e = {
                            labels: ["Earnings", "Sales", "Tickets"],
                            datasets: [{
                                data: [48, 26, 26],
                                backgroundColor: ["rgba(171, 227, 125, 1)", "rgba(250, 219, 125, 1)", "rgba(117, 176, 235, 1)"],
                                hoverBackgroundColor: ["rgba(171, 227, 125, .75)", "rgba(250, 219, 125, .75)", "rgba(117, 176, 235, .75)"]
                            }]
                        }, t.length && new Chart(t, {type: "line", data: r}), a.length && new Chart(a, {
                            type: "bar",
                            data: r
                        }), o.length && new Chart(o, {
                            type: "radar",
                            data: r
                        }), n.length && new Chart(n, {
                            type: "polarArea",
                            data: e
                        }), l.length && new Chart(l, {
                            type: "pie",
                            data: e
                        }), i.length && new Chart(i, {type: "doughnut", data: e})
                    }
                }, {
                    key: "initRandomEasyPieChart", value: function () {
                        jQuery(".js-pie-randomize").on("click", function (r) {
                            jQuery(r.currentTarget).parents(".block").find(".pie-chart").each(function (r, e) {
                                return jQuery(e).data("easyPieChart").update(Math.floor(100 * Math.random() + 1))
                            })
                        })
                    }
                }, {
                    key: "init", value: function () {
                        this.initChartsChartJS(), this.initRandomEasyPieChart()
                    }
                }], null && t(e.prototype, null), a && t(e, a), r
            }();
            jQuery(function () {
                a.init()
            })
        }]); </script>{{--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--}}
    <script>jQuery(function () {
            One.helpers(['easy-pie-chart', 'sparkline']);
        });</script>
    <script>$(document).ready(function () {
            One.loader('show');
            setTimeout(function () {
                One.loader('hide');
            }, 300);
        }); </script>
    <script>var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"]; /*$$$$$$$$$$$$$$$$$$$$$$$$ RECIBIR DATOS DE CONTROLADOR Y CONVERTIRLO A ARRAY $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/ /*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
        var arraynumincidenciapormes = [];
        var incidencias = @json($incidenciasAnoActual);
        console.log(incidencias);
        var mese = 0;
        for (var f = 1; f <= 12; f++) {
            if (incidencias[mese] !== undefined) {
                if (incidencias[mese].mes == f) {
                    arraynumincidenciapormes.push(incidencias[mese].numero_incidencias);
                    mese++;
                } else {
                    arraynumincidenciapormes.push(0);
                }
            } else {
                arraynumincidenciapormes.push(0);
            }
        }/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
        var arraynumincidenciapormesanoanterior = [];
        var datosincidenciasanoanterior = @json($incidenciasAnoAnterior);
        console.log(datosincidenciasanoanterior);
        var m = 0;
        for (var p = 1; p <= 12; p++) {
            if (datosincidenciasanoanterior[m] !== undefined) {
                if (datosincidenciasanoanterior[m].mes == p) {
                    arraynumincidenciapormesanoanterior.push(datosincidenciasanoanterior[m].numero_incidencias);
                    m++;
                } else {
                    arraynumincidenciapormesanoanterior.push(0);
                }
            } else {
                arraynumincidenciapormesanoanterior.push(0);
            }
        }/*$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$*/
        !function (r) {
            var o = {};

            function e(t) {
                if (o[t]) return o[t].exports;
                var n = o[t] = {i: t, l: !1, exports: {}};
                return r[t].call(n.exports, n, n.exports, e), n.l = !0, n.exports
            }

            e.m = r, e.c = o, e.d = function (r, o, t) {
                e.o(r, o) || Object.defineProperty(r, o, {enumerable: !0, get: t})
            }, e.r = function (r) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(r, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(r, "__esModule", {value: !0})
            }, e.t = function (r, o) {
                if (1 & o && (r = e(r)), 8 & o) return r;
                if (4 & o && "object" == typeof r && r && r.__esModule) return r;
                var t = Object.create(null);
                if (e.r(t), Object.defineProperty(t, "default", {
                    enumerable: !0,
                    value: r
                }), 2 & o && "string" != typeof r) for (var n in r) e.d(t, n, function (o) {
                    return r[o]
                }.bind(null, n));
                return t
            }, e.n = function (r) {
                var o = r && r.__esModule ? function () {
                    return r.default
                } : function () {
                    return r
                };
                return e.d(o, "a", o), o
            }, e.o = function (r, o) {
                return Object.prototype.hasOwnProperty.call(r, o)
            }, e.p = "", e(e.s = 18)
        }({
            18: function (r, o, e) {
                r.exports = e(19)
            }, 19: function (r, o) {
                function e(r, o) {
                    for (var e = 0; e < o.length; e++) {
                        var t = o[e];
                        t.enumerable = t.enumerable || !1, t.configurable = !0, "value" in t && (t.writable = !0), Object.defineProperty(r, t.key, t)
                    }
                }

                var t = function () {
                    function r() {
                        !function (r, o) {
                            if (!(r instanceof o)) throw new TypeError("Cannot call a class as a function")
                        }(this, r)
                    }

                    var o, t;
                    return o = r, t = [{
                        key: "initCharts", value: function () {
                            Chart.defaults.global.defaultFontColor = "#495057",
                                Chart.defaults.scale.gridLines.color = "transparent",
                                Chart.defaults.scale.gridLines.zeroLineColor = "transparent",
                                Chart.defaults.scale.display = !1,
                                Chart.defaults.scale.ticks.beginAtZero = !0,
                                Chart.defaults.global.elements.line.borderWidth = 0,
                                Chart.defaults.global.elements.point.radius = 0,
                                Chart.defaults.global.elements.point.hoverRadius = 0,
                                Chart.defaults.global.tooltips.cornerRadius = 3,
                                Chart.defaults.global.legend.labels.boxWidth = 12;
                            var r, o, e, t, n = jQuery(".js-chartjs-dashboard-incidencia"),
                                a = jQuery(".js-chartjs-dashboard-infraccion");
                            r = {
                                maintainAspectRatio: !1,
                                scales: {yAxes: [{ticks: {suggestedMax: 12}}]},
                                tooltips: {
                                    intersect: !1, callbacks: {
                                        label: function (r, o) {
                                            return r.yLabel
                                        }
                                    }
                                }
                            }, e = {
                                maintainAspectRatio: !1,
                                scales: {yAxes: [{ticks: {suggestedMax: 20}}]},
                                tooltips: {
                                    intersect: !1, callbacks: {
                                        label: function (r, o) {
                                            return " " + r.yLabel + " Sales"
                                        }
                                    }
                                }
                            }, o = {
                                labels: ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"],
                                datasets: [{
                                    label: "Este Año",
                                    fill: !0,
                                    backgroundColor: "rgba(87,137,159,0.86)",
                                    borderColor: "rgba(87,137,159,0.86)",
                                    pointBackgroundColor: "rgba(87,137,159,0.86)",
                                    pointBorderColor: "#fff",
                                    pointHoverBackgroundColor: "#fff",
                                    pointHoverBorderColor: "rgba(87,137,159,0.86)",/*
                                    backgroundColor: "rgba(4,238,5,0.63)",
                                    borderColor: "rgba(23,232,15,0.89)",
                                    pointBackgroundColor: "rgb(55,207,38)",
                                    pointBorderColor: "#fff",
                                    pointHoverBackgroundColor: "#fff",
                                    pointHoverBorderColor: "rgb(67,207,95)",*/
                                    data: arraynumincidenciapormes
                                }, {
                                    label: "Año Anterior",
                                    fill: !0,
                                    backgroundColor: "rgba(233, 236, 239, 1)",
                                    borderColor: "transparent",
                                    pointBackgroundColor: "rgba(233, 236, 239, 1)",
                                    pointBorderColor: "#fff",
                                    pointHoverBackgroundColor: "#fff",
                                    pointHoverBorderColor: "rgba(233, 236, 239, 1)",
                                    data: arraynumincidenciapormesanoanterior
                                }]
                            }, t = {
                                labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
                                datasets: [{
                                    label: "This Year",
                                    fill: !0,
                                    backgroundColor: "rgba(132, 94, 247, .3)",
                                    borderColor: "transparent",
                                    pointBackgroundColor: "rgba(132, 94, 247, 1)",
                                    pointBorderColor: "#fff",
                                    pointHoverBackgroundColor: "#fff",
                                    pointHoverBorderColor: "rgba(132, 94, 247, 1)",
                                    data: [175, 120, 169, 82, 135, 169, 132, 130, 192, 230, 215, 260]
                                }, {
                                    backgroundColor: "rgba(233, 236, 239, 1)",
                                    borderColor: "transparent",
                                    pointBackgroundColor: "rgba(233, 236, 239, 1)",
                                    pointBorderColor: "#fff",
                                    pointHoverBackgroundColor: "#fff",
                                    pointHoverBorderColor: "rgba(233, 236, 239, 1)",
                                    data: [220, 170, 110, 215, 168, 227, 154, 135, 210, 240, 145, 178]
                                }]
                            }, n.length && new Chart(n, {
                                type: "line",
                                data: o,
                                options: r
                            }), a.length && new Chart(a, {type: "line", data: t, options: e})
                        }
                    }, {
                        key: "init", value: function () {
                            this.initCharts()
                        }
                    }], null && e(o.prototype, null), t && e(o, t), r
                }();
                jQuery(function () {
                    t.init()
                })
            }
        }); </script> @endsection

