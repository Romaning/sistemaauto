<?php

namespace App\Http\Controllers\ControladorTablero;

use App\Http\Controllers\Controller;
use App\ModeloIncidencia\Incidencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableroPrincipalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $anoActual=0;
        $anoAnterior=0;
        $semaanas=0;
        $numeroVehiculosSinAsignaciones=0;
        $numeroDeVehiculosFueraServicio=0;
        $numeroSinBsisaPorGesion=0;
        $numeroSinInspeccionPorGestion=0;
    $incidenciasAnoActual=null;
    $incidenciasAnoAnterior=null;
    $contValesPorPlacaSemanaActual=null;
    $numeroVehiculos=null;
    $numeroDepartamentos=null;
    $numeroFuncionarios=null;
    $numeroAsigancionesActiva=null;

    $numeroDeVehiculosEnServicio=null;

    $numeroInfraccionesPorMes=null;
    $numeroInfraccionesPorMesAnoAnterior=null;
    $numeroBsisaPorGesion=null;

    $numeroInspeccionPorGestion=null;

    $numeroSoatPorGestionActivo=null;
    $numeroSoatVencido=null;
        /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& INCIDENCIAS ####################################*/
        $incidenciasAnoActual = DB::select("SELECT
                                                        MONTH(fecha_incidencia) mes,
                                                        COUNT(incidencia_id) numero_incidencias
                                                    FROM
                                                        incidencias
                                                    WHERE
                                                        YEAR(fecha_incidencia) = '" . date('Y') . "'
                                                    GROUP BY
                                                        MONTH(fecha_incidencia)");
        $anoActual = date('Y');
        /*dd($incidenciasAnoActual);*/
        $incidenciasAnoAnterior = DB::select("SELECT
                                                        MONTH(fecha_incidencia) mes,
                                                        COUNT(incidencia_id) numero_incidencias
                                                    FROM
                                                        incidencias
                                                    WHERE
                                                        YEAR(fecha_incidencia) = '" . (date('Y') - 1) . "'
                                                    GROUP BY
                                                        MONTH(fecha_incidencia)");
        $anoAnterior = date('Y') - 1;
        /*dd($incidenciasAnoAnterior);*/

        /* dd(date('m'));*/
        $messs = date('m');
        $anooo = date('Y');
        /*dd($messs);*/
        /*############ obtener semana actual*/
        /*$fecha=date('Y-m-d');
        $dia   = substr($fecha,8,2);
        $mes = substr($fecha,5,2);
        $anio = substr($fecha,0,4);
        $semana = date('W',  mktime(0,0,0,$mes,$dia,$anio));*/
        /*########################################################*/
        $semaanas = date('W');   /*PRIMER DIA DE LA SEMANA ES EL LUNES (L M MI J V S D)*/
        /*/*SELECT WEEK('2020-01-06',3) EN LA BASE DE DATOS TIENE EL FORMATO PRIMER DIA DE LA SEMANA ES EL LUNES (L M MI J V S D)*/
        /*dd($semaanas);*/
        /*########################################################*/
       /* $semaanas = date('W',strtotime('2020-01-06'));  ==== SELECT WEEK('2020-01-06',3)
        dd($semaanas);*/
        /*########################################################*/

        /*$fechaI = new DateTime('2019-12-30');
        $semanainicio = (int) $fechaI->format("W");*/
        /*dd($semanainicio);*/
        /*########################################################*/
        /*$date_string = "2019-12-30";
        $date_int = strtotime($date_string);
        $date_date = date($date_int);
        $week_number = date('W', $date_date);
        dd($week_number);*/
        /* echo "Weeknumber: {$week_number}.";*/

        /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& VALES DE CO|NBUSTIBLES &&&&&&&&& '" . (date('M')) . "'  &&&&&&&&&&&&&&&*/
        $contValesPorPlacaSemanaActual = DB::select("SELECT WEEK(fecha_entrega,3) semana, COUNT(DISTINCT(placa_id)) numero_vehiculos
                                                        FROM vales_de_combustibles
                                                        WHERE WEEK(fecha_entrega,3) = '" . $semaanas . "'
                                                        AND deleted_at IS NULL
                                                        GROUP BY WEEK(fecha_entrega,3)");
        /*dd($contValesPorPlacaSemanaActual);*/

        /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& NUMERO DE VEHICULOS REGITRADOS ###################### */
        $numeroVehiculos = DB::select('SELECT COUNT(DISTINCT(placa_id)) total_vehiculos
                                                    FROM vehiculos
                                                    WHERE vehiculos.deleted_at IS NULL');
        /*dd($numeroVehiculos);*/
        /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& NUMERO DE DEPARTAMENTOS REGITRADOS ###################### */
        $numeroDepartamentos = DB::select('SELECT COUNT(DISTINCT(departamentos.departamento_nombre)) numero_departamentos
                                                    FROM
                                                        departamentos 
                                                        WHERE departamentos.deleted_at IS NULL');
        /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& NUMERO DE FUNCIONARIOS REGITRADOS ###################### */
        $numeroFuncionarios = DB::select('SELECT COUNT(DISTINCT(ci)) numero_funcionarios
                                                    FROM funcionarios
                                                    WHERE funcionarios.deleted_at IS NULL');
        /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& NUMERO DE ASIGANCIONES REGITRADOS ###################### */
        $numeroAsigancionesActiva = DB::select('SELECT COUNT(asignacions.asignacion_id) numero_asignaciones
                                                FROM asignacions 
                                                WHERE asignacions.deleted_at IS NULL');
        /*dd($numeroAsigancionesActiva);*/

        /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& NUMERO DE VEHICUCLOS ACTIVOS ###################### */
        $numeroDeVehiculosEnServicio = DB::select("SELECT COUNT(tabla_final_estado_servicios.placa_servicio_actual) numero_vehiculo_en_servicio
                FROM
                    (SELECT
                        vehi.placa_id placa_servicio_actual,
                        vehi.numero_crpva,
                        vehi.numero_chasis,
                        vehi.numero_motor,
                        m.marca_descripcion,
                        estservvehi.est_serv_vehiculo_id,
                        est.est_id,
                        est.est_descripcion estado_servicio_actual
                    FROM
                        (
                        SELECT
                            est.placa_id,
                            MAX(est.est_serv_vehiculo_id) serv_id
                        FROM
                            (
                            SELECT
                                vehiculos.placa_id,
                                MAX(
                                    estado_servicio_vehiculos.fecha_inicio
                                ) fechamax
                            FROM
                                vehiculos,
                                estado_servicio_vehiculos
                            WHERE
                                vehiculos.placa_id = estado_servicio_vehiculos.placa_id
                            GROUP BY
                                vehiculos.placa_id
                        ) tb_orange,
                        estado_servicio_vehiculos est
                    WHERE
                        tb_orange.placa_id = est.placa_id AND tb_orange.fechamax = est.fecha_inicio
                    GROUP BY
                        est.placa_id
                    ) tb_master,
                    vehiculos vehi,
                    marcas m,
                    estado_servicio_vehiculos estservvehi,
                    estado_services est
                    WHERE
                        vehi.placa_id = tb_master.placa_id AND vehi.marca_id = m.marca_id AND tb_master.serv_id = estservvehi.est_serv_vehiculo_id AND estservvehi.est_id = est.est_id AND vehi.deleted_at IS NULL) tabla_final_estado_servicios
                WHERE tabla_final_estado_servicios.estado_servicio_actual ='EN SERVICIO'");

        /* ############################ VEHICULOS FUERA DE SERIVICIO #####################*/
        $numeroInfraccionesPorMes = DB::select("SELECT
                                                        MONTH(fecha_infraccion) mes,
                                                        COUNT(infraccion_id) numero_infracciones
                                                        FROM
                                                            infraccions
                                                        WHERE
                                                            YEAR(fecha_infraccion) = " . date('Y') . "
                                                        AND deleted_at IS NULL 
                                                        GROUP BY
                                                            MONTH(fecha_infraccion)");
        $numeroInfraccionesPorMesAnoAnterior = DB::select("SELECT
                                                        MONTH(fecha_infraccion) mes,
                                                        COUNT(infraccion_id) numero_infracciones
                                                        FROM
                                                            infraccions
                                                        WHERE
                                                            YEAR(fecha_infraccion) = " . (date('Y') - 1) . "
                                                        AND deleted_at IS NULL 
                                                        GROUP BY
                                                            MONTH(fecha_infraccion)");

        $numeroBsisaPorGesion = DB::select("SELECT documentos_ronovable_vehiculos.gestion, 
                                                        COUNT(documentos_ronovable_vehiculos.bsisa) numero_total_bsisa
                                                    FROM documentos_ronovable_vehiculos 
                                                    JOIN vehiculos ON vehiculos.placa_id=documentos_ronovable_vehiculos.placa_id
                                                    WHERE documentos_ronovable_vehiculos.gestion = " . date('Y') . " 
                                                    AND documentos_ronovable_vehiculos.bsisa = '1'
                                                    AND documentos_ronovable_vehiculos.deleted_at IS NULL 
                                                    AND vehiculos.deleted_at IS NULL
                                                    GROUP BY documentos_ronovable_vehiculos.gestion");


        $numeroInspeccionPorGestion = DB::select("SELECT documentos_ronovable_vehiculos.gestion,
                                                            COUNT(documentos_ronovable_vehiculos.inspeccion_vehicular) numero_total_inspeccion
                                                    FROM documentos_ronovable_vehiculos 
                                                    JOIN vehiculos ON vehiculos.placa_id = documentos_ronovable_vehiculos.placa_id
                                                    AND documentos_ronovable_vehiculos.inspeccion_vehicular = '1'
                                                    WHERE documentos_ronovable_vehiculos.gestion = " . date('Y') . " 
                                                    AND documentos_ronovable_vehiculos.deleted_at IS NULL 
                                                    AND vehiculos.deleted_at IS NULL
                                                    GROUP BY documentos_ronovable_vehiculos.gestion");

        $numeroSoatPorGestionActivo = DB::select("SELECT COUNT(soatV.placa) numero_total_soat_activos
                                                    FROM
                                                     (SELECT documentos_ronovable_vehiculos.placa_id placa, 
                                                        MAX(documentos_ronovable_vehiculos.fecha_fin_cobertura_soat)
                                                        FROM documentos_ronovable_vehiculos
                                                            LEFT JOIN vehiculos ON vehiculos.placa_id = documentos_ronovable_vehiculos.placa_id
                                                        WHERE vehiculos.deleted_at IS NULL
                                                        AND documentos_ronovable_vehiculos.deleted_at IS NULL
                                                        GROUP BY documentos_ronovable_vehiculos.placa_id
                                                        HAVING MAX(documentos_ronovable_vehiculos.fecha_fin_cobertura_soat) > " . date('Y-m-d') . ") soatV");

        $numeroSoatVencido = DB::select("SELECT COUNT(soatV.placa) numero_total_soat_vencidos
                                                FROM
                                                 (SELECT documentos_ronovable_vehiculos.placa_id placa, 
                                                        MAX(documentos_ronovable_vehiculos.fecha_fin_cobertura_soat)
                                                        FROM documentos_ronovable_vehiculos
                                                            LEFT JOIN vehiculos ON vehiculos.placa_id = documentos_ronovable_vehiculos.placa_id
                                                        WHERE vehiculos.deleted_at IS NULL
                                                        AND documentos_ronovable_vehiculos.deleted_at IS NULL
                                                        GROUP BY documentos_ronovable_vehiculos.placa_id
                                                        HAVING MAX(documentos_ronovable_vehiculos.fecha_fin_cobertura_soat) <= " . date('Y-m-d') . ") soatV");
        if (!isset($numeroVehiculos)){
            /* &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& NUMERO DE VEHICULOS SIN ASIGNAR ###################### */
            $numeroVehiculosSinAsignaciones = $numeroVehiculos[0]->total_vehiculos - $numeroAsigancionesActiva[0]->numero_asignaciones;
            /* ############################ VEHICULOS FUERA DE SERIVICIO #####################*/
            $numeroDeVehiculosFueraServicio = $numeroVehiculos[0]->total_vehiculos - $numeroDeVehiculosEnServicio[0]->numero_vehiculo_en_servicio;
            /*dd($numeroDeVehiculosFueraServicio);*/
            $numeroSinBsisaPorGesion = $numeroVehiculos[0]->total_vehiculos - $numeroBsisaPorGesion[0]->numero_total_bsisa;
            $numeroSinInspeccionPorGestion = $numeroVehiculos[0]->total_vehiculos - $numeroInspeccionPorGestion[0]->numero_total_inspeccion;
        }
        return view('CONTROL_PANEL.tablero',
            compact('incidenciasAnoActual',
                'anoActual',
                'incidenciasAnoAnterior',
                'anoAnterior',
                'contValesPorPlacaSemanaActual',
                'numeroVehiculos',
                'numeroDepartamentos',
                'numeroFuncionarios',
                'numeroAsigancionesActiva',
                'numeroVehiculosSinAsignaciones',
                'numeroDeVehiculosEnServicio',
                'numeroDeVehiculosFueraServicio',
                'numeroInfraccionesPorMes',
                'numeroInfraccionesPorMesAnoAnterior',
                'numeroBsisaPorGesion',
                'numeroSinBsisaPorGesion',
                'numeroInspeccionPorGestion',
                'numeroSinInspeccionPorGestion',
                'numeroSoatPorGestionActivo',
                'numeroSoatVencido'));
    }
}









