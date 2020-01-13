@extends('layouts.layoutmaster')
@section('title')
    REGISTRAR SEGURO GRUPO
@endsection
@section('styles')
    @include('components.links_css_js.pluginsform.plugin_form_css')
    @include('components.links_css_js.carousel.carousel_css')

    <!-- Stylesheets -->
    <!-- Page CSS DIRECTO PARA SHOW VEHÍCULO -->
@endsection

@section('div_content_css','d-none')
@section('nuevo_contenido_hero')
    @component('components.Hero.herotexto')
        @slot('titulo1','Registrar Seguros INDIVIDUAL O PARA GRUPO DE VEHÍCULOS')
    @endcomponent
@endsection

@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    @include('components.alerts.alerttre')

    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                OPCIONES
            </h3>
        </div>

        <div class="block-content">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-3">
                    <a href="{{route('seguro.create.group')}}" class="btn btn-primary"> SUBIR SEGURO PARA UN LOTE DE VEHÍCULOS
                    <i class="fa fa-car"></i><i class="fa fa-car"></i><i class="fa fa-car"></i></a>
                </div>
                <div class="col-lg-3">
                    <a href="{{route('seguro.create')}}" class="btn btn-primary"> SUBIR SEGURO INDIVIDUAL PARA VEHÍCULO <i class="fa fa-car"></i></a>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
    <!-- END Flatpickr Datetimepicker -->


@endsection
@section('js_script_import')
    @include('components.links_css_js.pluginsform.plugin_form_js')
    @include('components.links_css_js.carousel.carousel_js')

@endsection

