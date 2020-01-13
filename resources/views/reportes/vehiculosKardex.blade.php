@foreach($datosvehiculo as $filavehiculo)
@endforeach
    <!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$filavehiculo->placa_id}}</title>
    {{--@include('components.links_css_js.datatable.datatable_css')--}}
<link rel="stylesheet" id="css-main" href="{{asset('assets/css/oneui.css')}}">
    <style>
        #titulo_gobierno {
            font-size: 24px;
        }

        .centrar-vertical {
            display: flex;
            align-items: center;
        }

        .margen_ml2_5_and_2 {
            margin-left: 8rem;
            margin-right: 7.8rem;
        }

        .margen_ml2_5_and_2_all {
            margin-left: 4.5rem;
            margin-right: 4rem;
        }
        .todo{

        }
    </style>
</head>
<body>
@foreach($datosvehiculo as $datovehiculo)
@endforeach
<form action="{{route('reporte.vehiculo.download',$filavehiculo->placa_id)}}" method="post" class="d-none">
    @csrf
    @method('POST')
    <button id="EnvDescarga">
        REPORTE
    </button>
</form>
<table class="js-dataTable-buttons" id="table_vehiculo_print">
    <thead>
    <tr>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>

{{--####################################### CABECERA DE IMPRESION ##############################--}}

<div id="todo" class="todo">
    <div id="cabecera_carta_general">
        <div class="row mb-4">
            <div class="col-md-2 font-size-sm text-sm-center">
                <img src="{{asset('image_proyect/logos/elalto_report.jpg')}}" alt="" width="120px">
            </div>
            <div class="col-md-8 text-center justify-content-center centrar-vertical">
                <h2 class="align-self-center" id="titulo_gobierno"><u>GOBIERNO AUTÓNOMO MUNICIPAL DE EL ALTO</u></h2>
            </div>
            <div class="col-md-2 text-center font-size-sm">
                <img src="{{asset('image_proyect/logos/gamea_report.jpg')}}" alt="" width="120px">
            </div>
        </div>
    </div>
    <div>
        <div class="row margen_ml2_5_and_2_all">
            <h3 class="titulo_1">VEHÍCULO</h3>
        </div>
        <div class="row margen_ml2_5_and_2_all">
            <div class="col-md-12 mb-4">
                <div class="form-group">
                    <label for="" class="h4 titulo_2">{{--I. --}}IDENTIFICACIÓN DEL VEHÍCULO </label>
                </div>
                <div class="form-group">
                    <label for="">PLACA: </label>
                    <label for="" id="placa_id">{{$datovehiculo->placa_id}}</label>
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
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="h4 titulo_2">{{--II. --}}DATOS TÉCNICOS</label>
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
                    <div class="for-group">
                        <label for="">PLAZAS: </label>
                        <label for="">{{$datovehiculo->plazas}}</label>
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
        {{--<div class="row margen_ml2_5_and_2_all">
            <div class="col-lg-5">
                <div class="form-group">
                    <label for="" class="h5">III. DATOS </label>
                </div>
            </div>
        </div>--}}
    </div>
    @foreach($datosdocumentospropiedadvehicular as $filadocpropvehi)
        <div class="row">
            <div class="col-md-12">
                <img src="{{asset('imagenes_store/documentos/'.$filadocpropvehi->archivo_subido.'')}}" width="100%">
                <div class="row margen_ml2_5_and_2_all">
                    <div class="col-12 text-center">
                        @php
                            $name_imag = str_replace(".jpg", "", $filadocpropvehi->nombre_documento_propiedad);
                            $name_imag = str_replace(".png", "", $filadocpropvehi->nombre_documento_propiedad);
                            $name_imag = str_replace(".jpg", "", $filadocpropvehi->nombre_documento_propiedad);
                        @endphp
                        {{$name_imag}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach($datosimagenperfilvehicular as $fileimgperfil)
        <div class="row">
            <div class="col-md-12">
                <img src="{{asset('imagenes_store/vehiculos/'.$fileimgperfil->archivo_subido.'' )}}">
            </div>
        </div>
    @endforeach

    @foreach($asignaciones as $asignacion)
    @endforeach
    @if(empty($asignacion->placa_id))
        <div class="row">
            <div class="col-lg-12 text-center justify-content-center">
                <label for="" class="btn btn-danger">
                    <span class="font-italic">VEHÍCULOS NO ASIGNADO</span>
                </label>
            </div>
        </div>
    @else

    @endif
    <div class="row margen_ml2_5_and_2_all">
        <!-- Company Info -->
        <div class="col-6 font-size-sm">
            <p class="h3">DATOS</p>
            <address>
                Avenida<br>
                Estado, Cuidad<br>
                Region, Codigo Postal<br>
                ltd@example.com
            </address>
        </div>
        <!-- END Company Info -->

        <!-- Client Info -->
        <div class="col-6 text-right font-size-sm">
            <p class="h3">Cliente</p>
            <address>
                Avenida<br>
                Estado, Cuidad<br>
                Region, Codigo Postal<br>
                ltd@example.com
            </address>
        </div>
        <!-- END Client Info -->
    </div>


</div>
<!-- Page Content -->
<div class="content content-boxed">
    <!-- Invoice -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">#INV0625</h3>
            <div class="block-options">
                <!-- Print Page functionality is initialized in Helpers.print() -->
                <button type="button" class="btn-block-option" onclick="One.helpers('print');">
                    <i class="si si-printer mr-1"></i> Print Invoice
                </button>
            </div>
        </div>
        <div class="block-content">
            <div class="p-sm-4 p-xl-7">
                <!-- Invoice Info -->
                <div class="row mb-4">
                    <!-- Company Info -->
                    <div class="col-6 font-size-sm">
                        <p class="h3">Company</p>
                        <address>
                            Street Address<br>
                            State, City<br>
                            Region, Postal Code<br>
                            ltd@example.com
                        </address>
                    </div>
                    <!-- END Company Info -->

                    <!-- Client Info -->
                    <div class="col-6 text-right font-size-sm">
                        <p class="h3">Client</p>
                        <address>
                            Street Address<br>
                            State, City<br>
                            Region, Postal Code<br>
                            ctr@example.com
                        </address>
                    </div>
                    <!-- END Client Info -->
                </div>
                <!-- END Invoice Info -->

                <!-- Table -->
                <div class="table-responsive push">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 60px;"></th>
                            <th>Product</th>
                            <th class="text-center" style="width: 90px;">Qnt</th>
                            <th class="text-right" style="width: 120px;">Unit</th>
                            <th class="text-right" style="width: 120px;">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>
                                <p class="font-w600 mb-1">App Design & Development</p>
                                <div class="text-muted">Design/Development of iOS and Android application</div>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-pill badge-primary">1</span>
                            </td>
                            <td class="text-right">$25.000,00</td>
                            <td class="text-right">$25.000,00</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>
                                <p class="font-w600 mb-1">Icon Pack Design</p>
                                <div class="text-muted">50 uniquely crafted icons for promotion</div>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-pill badge-primary">1</span>
                            </td>
                            <td class="text-right">$900,00</td>
                            <td class="text-right">$$900,00</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>
                                <p class="font-w600 mb-1">Website Design</p>
                                <div class="text-muted">Promotional website for the mobile application</div>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-pill badge-primary">1</span>
                            </td>
                            <td class="text-right">$1.600,00</td>
                            <td class="text-right">$1.600,00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Subtotal</td>
                            <td class="text-right">$27.500,00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Vat Rate</td>
                            <td class="text-right">20%</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w600 text-right">Vat Due</td>
                            <td class="text-right">$5.500,00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="font-w700 text-uppercase text-right bg-body-light">Total Due</td>
                            <td class="font-w700 text-right bg-body-light">$33.000,00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END Table -->

                <!-- Footer -->
                <p class="font-size-sm text-muted text-center py-3 my-3 border-top">
                    Thank you very much for doing business with us. We look forward to working with you again!
                </p>
                <!-- END Footer -->
            </div>
        </div>
    </div>
    <!-- END Invoice -->
</div>
<!-- END Page Content -->

<script src="{{asset('assets/js/oneui.core.min.js')}}"></script>
<script src="{{asset('assets/js/oneui.app.min.js')}}"></script>
<!-- Page JS Plugins -->
<script src="{{asset('jsromsys/datatableExport/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('jsromsys/datatableExport/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('jsromsys/datatableExport/dataTables.buttons.js')}}"></script>
<script src="{{asset('jsromsys/datatableExport/buttonsPrint.js')}}"></script>
{{--<script src="{{asset('assets/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>--}}
<!-- Page JS Code -->
<script src="{{asset('jsromsys/datatableExport/be_tables_datatables.min.js')}}"></script>
<script>
    $(document).ready(function () {
        document.querySelector("#table_vehiculo_print_wrapper > div:nth-child(2)").remove();
        document.querySelector("#table_vehiculo_print_wrapper > div:nth-child(2)").remove();
        document.querySelector("#table_vehiculo_print_wrapper > div:nth-child(2)").remove();

        //*[@id="DataTables_Table_1_wrapper"]/div[1]/div/div/div
        /*document.querySelector("#DataTables_Table_0_wrapper > div:nth-child(1)").remove();
        document.querySelector("#DataTables_Table_1_wrapper > div:nth-child(1)").remove();*/
    });
    /*JQUERY PARA ENVIAR FORM DE DATOS VEHÍCULO*/
    /*$(document).on('click','#table_vehiculo_print_wrapper > div > div > div > div > button',function () {
        $.ajax({
            method: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (data) {
                /!*$('#boton_exito').click();*!/
                alert('si');
            }
        });
        return false;
    });*/
    $(document).on('click', '#table_vehiculo_print_wrapper > div > div > div > div > button', function () {
        $('#EnvDescarga').click();
    });
</script>

</body>
</html>
