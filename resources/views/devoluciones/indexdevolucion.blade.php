@extends('layouts.layoutmaster')
@section('title')
    DEVOLUCIONES
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
        @slot('titulo1','Tabla Devoluciones')
        <li class="breadcrumb-item">SECCION 3</li>
        <li class="breadcrumb-item">DEVOLUCIONES</li>
        <li class="breadcrumb-item">Informacion</li>
        <li class="breadcrumb-item" aria-current="page">
            <a class="link-fx" href="">Tabla Devoluciones</a>
        </li>
    @endcomponent
@endsection
{{--################### MODIFICACION HERO #################--}}

@section('hero_cuadro_bienvenida')
    <!-- Hero -->

    <!-- END Hero -->
    {{--@include('componentes.4_A_Hero(otrabienvenida)')--}}
@endsection
@section('content')
   @include('components.alerts.alerttre')
    @csrf
    <div class="block">
        <div class="block-content block-content-full block invisible shadow rounded" data-toggle="appear"
             data-class="animated bounceIn">
            <div>
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">ID</th>
                        <th class="d-none d-sm-table-cell">COOR D</th>
                        <th class="d-none d-sm-table-cell">NÚMERO ACTA DE TRANSFERENCIA</th>
                        <th class="d-none d-sm-table-cell">FECHA DEVOLUCIÓN</th>
                        <th class="d-none d-sm-table-cell">CI</th>
                        <th class="d-none d-sm-table-cell">PLACA</th>
                        <th class="d-none d-sm-table-cell">MOTIVO DEVOLUCIÓN</th>
                        <th class="d-none d-sm-table-cell">ARCHIVO ACTA</th>
                        <th style="width:10%" class="text-sm-center font-size-sm">
                            <a href="{{route('devolucion.create')}}"
                               class="btn-sm btn-primary shadow rounded">
                                <i class="fa fa-plus-circle"></i> Añadir
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datosdevoluciones as $filadevolucion)
                        <tr>
                            <td class="text-center font-size-sm">
                                {{$filadevolucion->devolucion_id}}
                            </td>
                            <td class="text-center">
                                {{$filadevolucion->coord_devo}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filadevolucion->identificador_acta_devolucion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filadevolucion->fecha_devolucion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filadevolucion->ci}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filadevolucion->placa_id}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filadevolucion->motivo_devolucion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                <img class="img-avatar img-avatar48"
                                     src="{{asset('imagenes_store/asignaciones/'./*$filaasigancion->ci."_".$filaasigancion->placa_id."_".*/$filadevolucion->archivo_acta_devolucion)}}"
                                     alt="">
                            </td>
                            <td class="justify-content-center">
                                <div class="row text-sm-center">
                                    <div class="col-sm-1">
                                        <a href="{{route('devolucion.show',$filadevolucion->devolucion_id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    {{--<div class="col-sm-1">
                                        <a href="{{route('devolucion.edit',$filadevolucion->devolucion_id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <form
                                            action="{{route('devolucion.destroy',$filadevolucion->devolucion_id)}}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button href="" type="submit" class="btn btn-sm btn-light push mb-md-0"
                                                    data-toggle="tooltip"
                                                    title="ELIMINAR">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>--}}
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

