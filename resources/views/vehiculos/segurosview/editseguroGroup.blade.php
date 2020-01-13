@extends('layouts.layoutmaster')

@section('title')
    ACTUALIZAR SEGURO GRUPO
@endsection

@section('styles')
    @include('components.links_css_js.pluginsform.plugin_form_css')
    @include('components.links_css_js.carousel.carousel_css')
    <!-- Page CSS DIRECTO PARA SHOW VEHÍCULO -->
@endsection

@section('div_content_css','d-none')

@section('nuevo_contenido_hero')
    @component('components.Hero.herotexto')
        @slot('titulo1','Registrar Seguros EN GRUPO')
    @endcomponent
@endsection

@section('hero_cuadro_bienvenida')
@endsection

@section('content')
    @include('components.alerts.alerttre')

    <div class="block shadow p-2 mb-1 rounded" data-toggle="appear" data-class="animated bounceIn">
        <div class="block-header">
            <h3 class="block-title">
                ACTUALIZAR SEGURO
            </h3>
        </div>
        @foreach($seguros as $seguro)
        @endforeach
        <div class="block-content">
            <form action="{{route('seguro.update.group', $seguro->grupo_id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col" data-toggle="appear" data-class="animated zoomIn">
                                <div class="block">
                                    <div class="block-content">
                                        <img src="{{asset('imagenes_store/seguros/'.$seguro->archivo_subido)}}"
                                             width="100%"
                                             height="100%" id="src_imagen_seguro"
                                             class="justify-content-center" alt="imagen de seguro">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" data-toggle="custom-file-input"
                                               id="input_imagen_seguro"
                                               name="imagen_seguro" value="{{$seguro->archivo_subido}}">
                                        <label class="custom-file-label" for="input_imagen_seguro">
                                            Carge Imagen de Seguro...
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-5">
                        <div class="form-group">
                            <label for="gestion">GESTIÓN: </label>
                            <input type='text' value='{{$seguro->gestion}}' class='form-control'
                                   id="gestion" name='gestion' placeholder='20XX...' required>
                        </div>
                        <div class="form-group">
                            <label for="empresa_aseguradora">EMPRESA ASEGURADORA: </label>
                            <input type='text' class='form-control' value="{{$seguro->empresa_aseguradora}}"
                                   id="empresa_aseguradora" name='empresa_aseguradora' placeholder='' required>
                        </div>
                        <div class="form-group">
                            <label for="texto">DESCRIPCIÓN: </label>
                            <input type='text' class='form-control' value="{{$seguro->texto}}"
                                   id="texto" name='texto' placeholder='texto...' required>
                        </div>
                        <div class="form-group">
                            <label for="fecha_vigencia">FECHA VIGENCIA: </label>
                            <input type='text' value='{{$seguro->fecha_vigencia}}'
                                   class='js-flatpickr form-control datepicker' name='fecha_vigencia'
                                   placeholder='Año-mes-dia' required>
                        </div>
                        <div class="form-group">
                            <label for="placas">PLACAS: (multiple) </label>
                            <select class="js-select2 form-control" id="placas"
                                    name="placas[]"
                                    style="width: 100%;"
                                    data-placeholder="Choose many.."
                                    multiple required>
                                <option></option>
                                @php $contador = 0; @endphp
                                @foreach($placas as $placa)
                                        @if (!empty($seguros[$contador]->placa_id) && $placa->placa_id == $seguros[$contador]->placa_id)
                                            <option value="{{$seguros[$contador]->id}}" {{"selected"}}>
                                            @php $contador++ @endphp
                                        @else
                                            <option value="{{$placa->placa_id}}">
                                        @endif
                                        {{$placa->placa_id}}
                                    </option>
                                @endforeach
                                {{--@for($i = 0; $i< count($seguros) ;$i++ )
                                    <option value="{{$seguros[$i]->placa_id}}" selected>
                                        {{$seguros[$i]->placa_id}}
                                    </option>
                                @endfor--}}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary shadow rounded" style="float: right;">
                            GUARDAR
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div id="mensaje_respuesta_form_subir_seguros"></div>
    </div>


@endsection
@section('js_script_import')
    @include('components.links_css_js.pluginsform.plugin_form_js')
    @include('components.links_css_js.carousel.carousel_js')
    <script>
        $('#input_imagen_seguro').change(function (e) {
            var file = e.target.files[0];
            /*$('#nombre_de_archivo_imagen').val(file.name);*/
            var imageType = 'image.*';
            if (!file.type.match(imageType))
                return;
            $reader = "reader";
            $reader = new FileReader();
            $reader.onload = fileOnload;
            $reader.readAsDataURL(file);
        });

        /*esto de aqui previsulaiza la imagen*/
        function fileOnload(e) {
            var result = e.target.result;
            $('#src_imagen_seguro').attr("src", result);
        }

    </script>
@endsection

