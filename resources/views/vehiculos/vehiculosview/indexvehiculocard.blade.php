@extends('layouts.layoutmaster')
@section('title')
    VEHÍCULOS
@endsection
@section('styles')
    <style>
        *{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .fondo{
            /*background: url({{asset('image_proyect/fondo.jpg')}});*/
            background-size: 100%;
            box-shadow:
                0 110px 500px 100px rgb(0, 0, 5) /* rgb(245, 5, 5) */,       /* sombra debajo de la tarjeta */
                inset 0 0 0 1000px rgba(45, 45, 50); /* fondo ensima de fondo de color VERDE*/
            transition: all .4s cubic-bezier(.37,.26,.109,.2);  /* TRANSICION PARA EL HOVER */
        }
        body::after{
            /*content: "";
            width: 100vw;
            height: 100vh;
            position: absolute;
            display: inline-block;
            top: 0;
            left: 0;
            z-index: -1;*/
            /* background-image: url('../../tarjetasVehi/ROJO/rojo 1.jpg'); */
            /*background-size: cover no-repeat;*/
              /*overflow: hidden;*/
            /*background: black;
            opacity: 0.9;*/
        }
        .fila{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
            /* grid-auto-columns: 260px;
            grid-auto-flow: row dense; */
        }
        .centrar_conte{
            display:flex;
            justify-content: center;
            /* display: flex; */
            /* float: right;
            background: red !important; */
        }
        .card_c{
            width: 250px;               /* tamaño en X width: 220px;*/
            height: 205px;              /* tamaño en Y height: 205px;*/ /* 535px */
            /*background-image: url('../../tarjetasVehi/ROJO/rojo 1.jpg');*/ /* fondo de imagen de CARD */ /*#####EN CÓDIGO ABAJO####*/
            /*background-size: cover;*/     /* ajusta el tamaño y en la tarjeta EN Y */                     /*#####EN CÓDIGO ABAJO####*/
            /*background-position: center center;*/ /* ajusta el fondo al cetro en eje Y y X */             /*#####EN CÓDIGO ABAJO####*/
            overflow: hidden;           /* corta lo que esta fuera de 320px x 535px */
            text-align: center;         /* texto al centro */
            position: relative;         /* posicion absoluta o relativa para que no se salga el texto */
            /* right: 0; */
            left: 0;
            top: 0;
            /* bottom: 0; */
            margin-top: 11%;
            border-radius: 10px;
        }
        .colordeondasCardVerde{
            box-shadow:
                10px 30px 30px -10px rgb(4, 4, 233)/* rgb(245, 5, 5) */,       /* sombra debajo de la tarjeta */
                inset 0 0 0 1000px rgb(81, 255, 0, .6); /* fondo ensima de fondo de color VERDE*/
            transition: all .4s cubic-bezier(.37,.26,.109,.2);  /* TRANSICION PARA EL HOVER */
        }
        .colordeondasCardRojo{
            box-shadow:
                10px 30px 30px -10px rgb(4, 4, 233)/* rgb(245, 5, 5) */,       /* sombra debajo de la tarjeta */
                inset 0 0 0 1000px rgba(255, 27, 16, 0.6); /* fondo ensima de fondo de color VERDE*/
            transition: all .4s cubic-bezier(.37,.26,.109,.2);  /* TRANSICION PARA EL HOVER */
        }
        .card_c:hover{
            box-shadow:
                0px 50px 50px 10px rgba(0, 17, 199, 0.6)/* rgba(0, 0, 0, .9) */,   /* sombra debajo de la tarjeta EN HOVER */
                inset 0 0 0 1000px rgba(54, 11, 175, 0.2); /* fondo ensima de fondo de color morado */
            width: 250px;
            height: 400px;
            z-index: 100;
        }
        .avatar{
            width: 150px;
            height: 150px;
            /*background: url('../../tarjetasVehi/ROJO/rojo 1.jpg');*/  /*#####EN CÓDIGO ABAJO####*/
            /*background-size: cover;*/                                 /*#####EN CÓDIGO ABAJO####*/
            /*background-position: center center;*/                         /*#####EN CÓDIGO ABAJO####*/
            overflow: hidden;
            position: absolute; /* en ABSOLUTO PARA MANDARLO A UNA ESQUINA */
            /* start para mandarlo al centro */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* end para mandarlo al centro */
            border-radius: 100%;
            margin: auto;
            box-shadow: 10px 30px 30px -10px rgb(1, 1, 90),
            inset 0 0 0 1000px rgba(81, 255, 1, 0.6);
            /* box-shadow: 0px 30px 30px -25px rgba(226, 217, 217, 0.6); */
        }
        .colordeondasAvatarVerde{
            animation: circleAna 4s infinite;
            transition: all .4s cubic-bezier(.37,.26,.35,1);
        }
        .colordeondasAvatarRojo{
            animation: circleAn 4s infinite;
            transition: all .4s cubic-bezier(.37,.26,.35,1);
        }
        .avatar::after{
            content: "";
            width: 150px;
            height: 150px;
            top: 0;
            left: 0;
            top: 0;
            bottom: 0;
            background: rgb(20, 18, 18);
            position: absolute;
            display: inline-block;
            border-radius: 100%;
            opacity: 0.5;
            transition: all .8s;
        }
        .card_c:hover .avatar{
            /* animation: none; */
            /* box-shadow: 0; */
            width: 200px;
            height: 200px;
            transform: translateY(-90px);
        }
        .colordeondasAvatarVerde:hover .avatar{
            animation: circleAna 4s infinite;
            transition: all .2s cubic-bezier(.37,.26,.35,1);
        }
        .colordeondasAvatarRojo:hover .avatar{
            animation: circleAn 4s infinite;
            transition: all .2s cubic-bezier(.37,.26,.35,1);
        }
        @keyframes circleAna{

            0%{
                box-shadow:
                    0px 30px 30px -25px rgba(0, 0, 0, .6),
                    0px 0px 0px 0px rgb(81, 241, 6, 1),
                    0px 0px 0px 0px rgba(81, 241, 6, 0.7),
                    0px 0px 0px 0px rgba(81, 241, 6, 0.5);
                /* 0px 0px 0px 0px rgb(236, 60, 7, 1),
                0px 0px 0px 0px rgba(255, 51, 0, 0.7),
                0px 0px 0px 0px rgba(241, 35, 8, 0.5); */
            }
            100%{
                box-shadow:
                    0px 30px 30px -25px rgba(0, 0, 0, .6),
                    0px 0px 0px 70px rgba(81, 241, 6, 0),
                    0px 0px 0px 200px rgba(81, 241, 6, 0),
                    0px 0px 0px 300px rgba(81, 241, 6, 0);
                /* 0px 0px 0px 70px rgba(230, 10, 10, 0),
                0px 0px 0px 200px rgba(243, 15, 15, 0),
                0px 0px 0px 300px rgba(241, 9, 9, 0); */
            }
        }
        @keyframes circleAn{
            0%{
                box-shadow:
                    0px 30px 30px -25px rgba(49, 43, 43, 0.6),
                    0px 0px 0px 0px rgba(255, 13, 8, 0.89),
                    0px 0px 0px 0px rgba(255, 13, 8, 0.7),
                    0px 0px 0px 0px rgba(255, 13, 8, 0.5);
                /*  0px 0px 0px 0px rgb(126, 56, 129,1),
                 0px 0px 0px 0px rgba(102, 52, 105, .7),
                 0px 0px 0px 0px rgba(102, 52, 105, .5); */
            }
            100%{
                box-shadow:
                    0px 30px 30px -25px rgba(0, 0, 0, .6),
                    0px 0px 0px 70px rgba(16, 136, 5, 0),
                    0px 0px 0px 200px rgba(16, 136, 5, 0),
                    0px 0px 0px 300px rgba(16, 136, 5, 0);
                /* 0px 0px 0px 70px rgba(102, 53, 105, 0),
                0px 0px 0px 200px rgba(102, 52, 105, 0),
                0px 0px 0px 300px rgba(102, 52, 105, 0); */
            }
        }
        .card_c:hover .avatar::after{
            /* animation: none; */
            /* box-shadow: 0; */
            width: 0;
            height: 0;
        }

        .profile{
            opacity: 1;
            position: absolute;
            bottom: -30px;
            width: 100%;
            transition: all 0.5s cubic-bezier(.37,.26,.35,1);
        }
        .card_c:hover .profile{
            opacity: 1;
            bottom: 50%;
        }
        .profile h1{
            color: white;
            padding: 0;
            margin: 0;
        }
        .profile h3{
            color: rgb(170, 170, 170);
            padding: 0;
            margin: 5px 0 100px 0;
            font-size: 1em;
        }




        .c-content{
            position: absolute;
            width: 100%;
            height: 70%;
            bottom: -100%;
            padding: 20px;
            box-sizing: border-box;
            transition: 0.5s;
            background: linear-gradient(0deg,#8012a5,transparent);
            color: #fff;
        }
        .card_c:hover .c-content{
            bottom: -16%;
        }
    </style>
@endsection
{{--start hero--}}
{{--@section('imagen_fondo', asset('image_proyect/fondo_hero2.jpg'))--}}
@section('div_content_css','d-none')
@section('nuevo_contenido_hero')
    @component('components.Hero.herotexto')
        @slot('titulo1','Card Vehiculo')
    @endcomponent
@endsection

{{--end hero--}}
@section('hero_cuadro_bienvenida')
@endsection

@section('content')
    @include('components.alerts.alerttre')
    @csrf
    {{--colordeondasCardRojo
    colordeondasAvatarRojo--}}
    <div class="container">
        <div class="fondo">
            <div class="fila">
            @foreach($datosvehiculos as $datovehiculo)
                @if ($datovehiculo->est_descripcion =="EN SERVICIO")
                    <div class="col-md-12 centrar_conte">
                        <div class="card_c colordeondasCardVerde"
                             style="
                                 background: url({{asset('imagenes_store/vehiculos/'.$datovehiculo->archivo)}});
                                 background-size: cover;
                                 background-position: center center;">
                            <div class="avatar colordeondasAvatarVerde" style="background: url({{asset('imagenes_store/vehiculos/'.$datovehiculo->archivo)}});
                                background-size: cover;
                                background-position: center center;"></div>
                @else
                    <div class="col-md-12 centrar_conte">
                        <div class="card_c colordeondasCardRojo"
                             style="
                                 background: url({{asset('imagenes_store/vehiculos/'.$datovehiculo->archivo)}});
                                 background-size: cover;
                                 background-position: center center;">
                            <div class="avatar colordeondasAvatarRojo" style="background: url({{asset('imagenes_store/vehiculos/'.$datovehiculo->archivo)}});
                                background-size: cover;
                                background-position: center center;"></div>
                 @endif

                        <div class="profile">
                            <a href="{{route('vehiculo.show', $datovehiculo->placa_id)}}"><h1>{{$datovehiculo->placa_id}}</h1></a>
                            <h3>{{$datovehiculo->marca_descripcion}}</h3>
                        </div>
                        <div class="c-content">
                            <p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-2 col-md-2 col-sm-2">
                                        <label>Clase: </label>
                                    </div>
                                    <div class="col-xl-9 col-md-9 col-sm-4 ml-2">
                                        <div class="" style="background-color: rgba(7, 1, 10, 0.973);">{{$datovehiculo->clase_descripcion}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-2 col-md-2 col-sm-2">
                                        <label>Tipo: </label>
                                    </div>
                                    <div class="col-xl-9 col-md-9 col-sm-9 ml-2">
                                        <div class="" style="background-color: rgba(7, 1, 10, 0.973);">{{$datovehiculo->tipo_descripcion}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-2 col-md-2 col-sm-2">
                                        <label><small>Combustible: </small></label>
                                    </div>
                                    <div class="col-xl-9 col-md-9 col-sm-9 ml-2">
                                        <div class="" style="background-color:rgba(7, 1, 10, 0.973);">{{$datovehiculo->tipo_combustible_descripcion}}</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-2 col-md-2 col-sm-2">
                                        <label>Uso: </label>
                                    </div>
                                    <div class="col-xl-9 col-md-9 col-sm-9 ml-2">
                                        <div class="" style="background-color:rgba(7, 1, 10, 0.973);">{{$datovehiculo->tipo_uso_descripcion}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-2 col-md-2 col-sm-2">
                                        <label>Asign: </label>
                                    </div>
                                    <div class="col-xl-9 col-md-9 col-sm-9">
                                        @if ($datovehiculo->ci!=null)
                                            <a href="{{route('funcionario.show',$datovehiculo->ci)}}" class="form-control">{{$datovehiculo->ci}}</a>
                                        @else
                                            s
                                        @endif
                                    </div>
                                </div>
                            </div>
                            </p>

                        </div>
                    </div>
                </div>
            @endforeach

            {{--<div class="col-md-12 centrar_conte">
                <div class="card_c colordeondasCardRojo" style="
                    background: url({{asset('imagenes_store/vehiculos/1147DEKnegro_1.jpg')}});
                    background-size: cover;
                    background-position: center center;">
                    <div class="avatar colordeondasAvatarRojo" style="background: url({{asset('imagenes_store/vehiculos/1147DEKnegro_1.jpg')}});
                        background-size: cover;
                        background-position: center center;"></div>
                    <div class="profile">
                        <h1>2720RKF</h1>
                        <h3>TOYOTA</h3>
                    </div>
                    <div class="c-content">
                        <p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xl-2 col-md-2 col-sm-2">
                                    <label>Clase: </label>
                                </div>
                                <div class="col-xl-9 col-md-9 col-sm-9 ml-2">
                                    <div class="" style="background-color: rgba(7, 1, 10, 0.973);">VAGONETA</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 col-md-2 col-sm-2">
                                    <label>Tipo: </label>
                                </div>
                                <div class="col-xl-9 col-md-9 col-sm-9 ml-2">
                                    <div class="" style="background-color: rgba(7, 1, 10, 0.973);">LAND CRUISER</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 col-md-2 col-sm-2">
                                    <label><small>Combustible: </small></label>
                                </div>
                                <div class="col-xl-9 col-md-9 col-sm-9 ml-2">
                                    <div class="" style="background-color:rgba(7, 1, 10, 0.973);">GASOLINA</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-2 col-md-2 col-sm-2">
                                    <label>Uso: </label>
                                </div>
                                <div class="col-xl-9 col-md-9 col-sm-9 ml-2">
                                    <div class="" style="background-color:rgba(7, 1, 10, 0.973);">OFICIAL</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-2 col-md-2 col-sm-2">
                                    <label>Asign: </label>
                                </div>
                                <div class="col-xl-9 col-md-9 col-sm-9">
                                    <a href="#" class="form-control">10037191 LP</a>
                                </div>
                            </div>
                        </div>
                        </p>

                    </div>
                </div>
            </div>--}}
            </div>
        </div>
    </div>

{{--    <div class="block">
        <div class="block-content block-content-full block invisible shadow rounded" data-toggle="appear"
             data-class="animated bounceIn">
            <div>
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons"
                       id="table_vehiculo_print">
                    <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">N° PLACA</th>
                        <th class="d-none d-sm-table-cell">N° CRPVA</th>
                        <th class="d-none d-sm-table-cell">N° CHASIS</th>
                        <th class="d-none d-sm-table-cell">N° MOTOR</th>
                        <th class="d-none d-sm-table-cell">Marca</th>
                        <th class="d-none d-sm-table-cell">Estado Serv</th>
                        <th style="width:10%;" class="text-sm-center font-size-sm">
                            <a href="{{route('vehiculo.create')}}"
                               class="btn-sm btn-primary shadow rounded">
                                <i class="fa fa-plus-circle"></i> Añadir
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datosvehiculos as $filavehiculos)
                        <tr>
                            <td class="text-center font-size-sm">
                                {{$filavehiculos->placa_id}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filavehiculos->numero_crpva}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filavehiculos->numero_chasis}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filavehiculos->numero_motor}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$filavehiculos->marca_descripcion}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                @if($filavehiculos->est_descripcion == "EN SERVICIO")
                                    <div class="d-none d-sm-table-cell">
                                        <span class="badge badge-success ">{{$filavehiculos->est_descripcion}}</span>
                                    </div>
                                @else
                                    <div class="d-none d-sm-table-cell">
                                        <span class="badge badge-danger ">{{$filavehiculos->est_descripcion}}</span>
                                    </div>
                                @endif
                            </td>

                            <td class="justify-content-center">
                                <div class="row text-sm-center">
                                    <div class="col-sm-1">
                                        <a href="{{route('vehiculo.show',$filavehiculos->placa_id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="VER INFORMACION COMPLETA">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="{{route('vehiculo.editsolo',$filavehiculos->placa_id)}}"
                                           class="btn btn-sm btn-light push mb-md-0"
                                           data-toggle="tooltip"
                                           title="EDITAR">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                    <div class="col-sm-1">
                                        <form action="{{route('vehiculo.destroy',$filavehiculos->placa_id)}}"
                                              method="post" onsubmit="return confirmation()">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-light push mb-md-0"
                                                    data-toggle="tooltip"
                                                    title="ELIMINAR">
                                                <i class="fas fa-trash"></i>
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
    </div>--}}


@endsection

@section('js_script_import')

    {{-- ################ START CONFIRMAR ELIMINACION FORM ###############--}}
    @include('components.confirmation.confirmationdelete_js')
    {{-- ################# END CONFIRMAR ELIMINACION FORM ###############--}}
@endsection

