@extends('layouts.layoutmaster')
@section('title')
    HISTORIAL VALES DE COMBUSTIBLE
@endsection
@section('styles')
    {{-- ################ START CSSS SCRIPT PARA DATATABLESS ###############--}}
    @include('components.links_css_js.datatable.datatable_css')
    {{--######################## END CSS SCRIPT DATABLE ####################--}}
@endsection

{{--################### MODIFICACION HERO #################--}}
@section('div_content_css','d-none')
@section('nuevo_contenido_hero')
    @component('components.Hero.herotexto')
        @slot('titulo1','Historial Vales de Combustible')
        {{--<li class="breadcrumb-item">SECCION 3</li>
        <li class="breadcrumb-item">VALES DE COMBUSTIBLE</li>
        <li class="breadcrumb-item">Informacion</li>
        <li class="breadcrumb-item" aria-current="page">
            <a class="link-fx" href="">Tabla Vales De Combustible</a>
        </li>--}}
    @endcomponent
@endsection
{{--################### MODIFICACION HERO #################--}}

@section('hero_cuadro_bienvenida')

@endsection
@section('content')
    {{--####################################### CABECERA DE IMPRESION ##############################--}}
    {{-- @foreach($datosvehiculo as $datovehiculo)
     @endforeach--}}
    {{--<div class="block">--}}
    {{--<div class="block shadow p-2 mb-1 rounded d-none" id="" data-toggle="appear"
         data-class="animated bounceIn">

            <div id="cabecera_carta_general">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="" class="h5">I. IDENTIFICACION DEL VEHÍCULO </label>
                        </div>
                        <address>
                            <div class="form-group">
                                <label for="">PLACA: </label>
                                <label for="">{{$datovehiculo->placa_id}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">CRPVA: </label>
                                <label for="">{{$datovehiculo->numero_crpva}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">NÚMERO CHASIS: </label>
                                <label for="">{{$datovehiculo->numero_chasis}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">NÚMERO MOTOR: </label>
                                <label for="">{{$datovehiculo->numero_motor}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">DOCUMENTO DE IMPORTACIÓN: </label>
                                <label for="">{{$datovehiculo->documento_importacion}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">NÚMERO DOCUMENTO DE IMPORTACIÓN: </label>
                                <label for="">{{$datovehiculo->numero_documento_importacion}}</label>
                            </div>
                        </address>
                    </div>
                --}}{{--</div>
                <div class="row">--}}{{--
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label class="h5">II. DATOS TECNICOS</label>
                        </div>
                        <address>
                            <div class="form-group">
                                <label for="">CLASE: </label>
                                <label for="">{{$datovehiculo->clase_descripcion}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">MARCA: </label>
                                <label for="">{{$datovehiculo->marca_descripcion}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">TIPO: </label>
                                <label for="">{{$datovehiculo->tipo_descripcion}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">TIPO COMBUSTIBLE: </label>
                                <label for="">{{$datovehiculo->tipo_combustible_descripcion}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">RUEDAS: </label>
                                <label for="">{{$datovehiculo->ruedas}}</label>
                            </div>
                            <div class="for-group">
                                <label for="">COLOR: </label>
                                <label for="">{{$datovehiculo->color}}</label>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-lg-12 ">
                        <div class="form-group">
                            <label for="">TIPO USO: </label>
                            <label for="">{{$datovehiculo->tipo_uso_descripcion}}</label>
                        </div>
                        <div class="form-group">
                            <label for="">FECHA DE INCORPORACIÓN A LA INSTITUCIÓN: </label>
                            <label for="">{{$datovehiculo->fecha_incorporacion_institucion}}</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="" class="h5">III. DATOS </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    {{--</div>--}}
    {{--####################################### END CABECERA DE IMPRESION ##############################--}}

    @include('components.alerts.alerttre')

    @csrf
    {{--<div class="block">--}}
    <div class="block">
        <div class="block-content block-content-full block invisible shadow rounded" data-toggle="appear"
             data-class="animated bounceIn">
            <div>
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>

                    <tr>
                        {{--<th class="d-none d-sm-table-cell">ID</th>--}}
                        {{--<th class="d-none d-sm-table-cell">ID</th>--}}
                        <th class="d-none d-sm-table-cell">PLACA VEHÍCULO</th>
                        <th class="d-none d-sm-table-cell">NÚMERO VALE</th>
                        <th class="d-none d-sm-table-cell">FECHA ENTREGA DE VALE</th>
                        <th class="d-none d-sm-table-cell">TIPO DE COMBUSTIBLE</th>
                        <th class="d-none d-sm-table-cell">CANTIDAD (l)</th>
                        <th style="width:10%" class="text-sm-center font-size-sm">
                            <a href="{{route('vale.create')}}"
                               class="btn-sm btn-primary shadow rounded">
                                <i class="fa fa-plus-circle"></i> Añadir
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($valesporplaca as $datovale)
                        <tr>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$datovale->placa_id}}
                            </td>
                            <td class="text-center font-size-sm">
                                {{$datovale->numero_vale}}
                            </td>
                            <td class="text-center">
                                {{$datovale->fecha_entrega}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$datovale->tipo_combustible_descripcion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$datovale->cantidad}}
                            </td>

                            <td class="justify-content-center">
                                <div class="row text-sm-center">
                                    <div class="col-sm-1">
                                        <a href="{{route('vale.show',$datovale->id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="{{route('vale.edit',$datovale->id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <form
                                            action="{{route('vale.destroy',$datovale->id)}}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button href="" type="submit" class="btn btn-sm btn-light push mb-md-0"
                                                    data-toggle="tooltip"
                                                    title="ELIMINAR">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




@endsection

@section('js_script_import')
    {{-- ################ START SCRIPTS PARA DATATABLESS ###############--}}
    @include('components.links_css_js.datatable.datatable_js')
    {{--######################## END SCRIPT DATABLE ####################--}}

    {{-- ################ START CONFIRMAR ELIMINACION FORM ###############--}}
    @include('components.confirmation.confirmationdelete_js')
    {{-- ################# END CONFIRMAR ELIMINACION FORM ###############--}}
@endsection

