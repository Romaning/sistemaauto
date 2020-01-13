<?php

namespace App\Http\Controllers\ControladorReporte;

/*use App\ModeloIncidencia\Incidencia;
use App\ModeloVehiculo\Clase;
use App\ModeloVehiculo\DocumentosPropiedadVehiculo;
use App\ModeloVehiculo\DocumentosRonovableVehiculo;
use App\ModeloVehiculo\EstadoService;
use App\ModeloVehiculo\ImagenesPerfilVehiculo;
use App\ModeloVehiculo\Marca;
use App\ModeloVehiculo\Seguro;
use App\ModeloVehiculo\Tipo;
use App\ModeloVehiculo\TipoCombustible;
use App\ModeloVehiculo\TipoUso;
use App\ModeloVehiculo\Vehiculo;*/

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehiculoReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($vehiculo)
    {
        /*SELECT v.placa_id, v.numero_crpva, v.numero_chasis, v.numero_motor, v.marca_id, m.marca_id, m.marca_descripcion
        FROM vehiculos v, marcas m
        WHERE v.marca_id = m.marca_id*/
        /*$datosvehiculosall= Vehiculo::all();*/
        /**/
        $datosvehiculos = DB::select('SELECT vehi.placa_id,vehi.numero_crpva,vehi.numero_chasis,vehi.numero_motor,
                                        m.marca_descripcion,estservvehi.est_serv_vehiculo_id,est.est_id ,est.est_descripcion
                                        FROM
                                                (SELECT	est.placa_id, MAX(est.est_serv_vehiculo_id) serv_id
                                                FROM
                                                        (SELECT	vehiculos.placa_id, MAX(estado_servicio_vehiculos.fecha_inicio) fechamax
                                                        FROM	vehiculos,estado_servicio_vehiculos
                                                        WHERE	vehiculos.placa_id = estado_servicio_vehiculos.placa_id
                                                        GROUP BY	vehiculos.placa_id
                                                        ) tb_orange,
                                                estado_servicio_vehiculos est
                                                WHERE	 tb_orange.placa_id = est.placa_id AND tb_orange.fechamax = est.fecha_inicio
                                                GROUP BY est.placa_id) tb_master,
                                        vehiculos vehi,
                                        marcas m,
                                        estado_servicio_vehiculos estservvehi,
                                        estado_services est
                                        WHERE vehi.placa_id=tb_master.placa_id AND
                                            vehi.marca_id = m.marca_id AND
                                            tb_master.serv_id = estservvehi.est_serv_vehiculo_id AND estservvehi.est_id = est.est_id
                                            AND vehi.deleted_at IS NULL');/*#################################### AQUI NO MUESTRA EL VEHICULO ELIMINADO ###### PERO NO ESTA ELIMNAOD EL RESTO DE LAS RELACIONESS ASI QUE SE PUEDE RESTAURAR ###############*/

        /*SELECT vehiculos.*, clases.clase_descripcion,marcas.marca_descripcion,tipos.tipo_descripcion,tipo_combustibles.tipo_combustible_descripcion,tipo_usos.tipo_uso_descripcion
        FROM vehiculos
        JOIN clases ON clases.clase_id = vehiculos.clase_id
        JOIN marcas ON marcas.marca_id =  vehiculos.marca_id
        JOIN tipos ON tipos.tipo_id = vehiculos.tipo_id
        JOIN tipo_combustibles ON tipo_combustibles.tipo_combustible_id = vehiculos.tipo_combustible_id
        JOIN tipo_usos ON tipo_usos.tipo_uso_id = vehiculos.tipo_uso_id*/
        $datosvehiculo = DB::table('vehiculos')
            ->leftJoin('clases', 'vehiculos.clase_id','=',  'clases.clase_id')
            ->leftJoin('marcas', 'vehiculos.marca_id','=',  'marcas.marca_id')
            ->leftJoin('tipos', 'vehiculos.tipo_id','=',  'tipos.tipo_id')
            ->leftJoin('tipo_combustibles', 'vehiculos.tipo_combustible_id','=',  'tipo_combustibles.tipo_combustible_id')
            ->leftJoin('tipo_usos', 'vehiculos.tipo_uso_id','=',  'tipo_usos.tipo_uso_id')
            ->select('vehiculos.*',
                'clases.clase_descripcion',
                'marcas.marca_descripcion',
                'tipos.tipo_descripcion',
                'tipo_combustibles.tipo_combustible_descripcion',
                'tipo_usos.tipo_uso_descripcion')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();
        /*dd($datosvehiculo);*/
        $estadoservvehi = DB::select("SELECT estado_servicio_vehiculos.*, estado_services.est_descripcion
                                    FROM estado_servicio_vehiculos, estado_services
                                    WHERE est_serv_vehiculo_id=(  SELECT MAX(est_serv_vehiculo_id) 
                                                                  FROM estado_servicio_vehiculos 
                                                                  WHERE fecha_inicio = (  SELECT MAX(fecha_inicio) 
                                                                                          FROM estado_servicio_vehiculos 
                                                                                          WHERE placa_id ='" . $vehiculo . "'
                                                                                        )
                                                                  AND estado_servicio_vehiculos.placa_id = '" . $vehiculo . "'
                                                                )
                                    AND estado_services.est_id = estado_servicio_vehiculos.est_id
                                    AND estado_servicio_vehiculos.placa_id = '" . $vehiculo . "'
                             ");
        $historialEstadoServicioVehiculo = DB::table('estado_servicio_vehiculos')
            ->leftJoin('estado_services','estado_servicio_vehiculos.est_id','=','estado_services.est_id')
            ->where('estado_servicio_vehiculos.placa_id','=',$vehiculo)
            ->whereNull('estado_servicio_vehiculos.deleted_at')
            ->orderBy('estado_servicio_vehiculos.fecha_inicio','DESC')
            ->orderBy('estado_servicio_vehiculos.est_serv_vehiculo_id','DESC')
            ->get();

        $datosdocumentospropiedadvehicular = DB::table('documentos_propiedad_vehiculos')
            ->leftJoin('vehiculos', 'vehiculos.placa_id','=',  'documentos_propiedad_vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'documentos_propiedad_vehiculos.archivo_subido', 'documentos_propiedad_vehiculos.nombre_documento_propiedad')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosimagenperfilvehicular = DB::table('imagenes_perfil_vehiculos')
            ->leftJoin('vehiculos', 'vehiculos.placa_id', '=', 'imagenes_perfil_vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'imagenes_perfil_vehiculos.archivo_subido')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosdocumentosrenovable = DB::table('documentos_ronovable_vehiculos')
            ->select('*')
            ->where('documentos_ronovable_vehiculos.placa_id', '=', $vehiculo)
            /*->where('documentos_ronovable_vehiculos.gestion', '=', date('Y'))*/
            ->whereNull('documentos_ronovable_vehiculos.deleted_at')
            ->orderBy('documentos_ronovable_vehiculos.gestion','DESC')
            ->get();

        $datosseguro = DB::table('seguros')
            ->select('*')
            ->where('seguros.placa_id', '=', $vehiculo)
            /*->where('seguros.gestion', '=', date('Y'))*/
            ->whereNull('seguros.deleted_at')
            ->orderBy('seguros.gestion','DESC')
            ->get();

        /*##################### VEHICULOS(placa_id)[placa_id=$vehiculo] -> (placa_id)ASIGNACIONS(ci) -> (ci)FUNCIONARIOS ##############*/
        $asignaciones = DB::table('vehiculos')
            ->leftJoin('asignacions', 'vehiculos.placa_id', '=', 'asignacions.placa_id')
            ->leftJoin('funcionarios', 'asignacions.ci', '=', 'funcionarios.ci')
            ->whereNull('asignacions.deleted_at')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        if (empty($asignaciones)){
            $datosFuncionario=null;
        }
        else{
            $datosFuncionario = DB::table('funcionarios')
                ->leftJoin('departamentos', 'funcionarios.departamento_id', '=', 'departamentos.departamento_id')
                ->where('funcionarios.ci', '=', $asignaciones[0]->ci)
                ->whereNull('funcionarios.deleted_at')
                ->select('funcionarios.*', 'departamentos.departamento_nombre')
                ->get();
        }

        $historialAsignaciones = DB::table('asignacions')
            ->leftJoin('funcionarios','asignacions.ci','=','funcionarios.ci')
            ->where('asignacions.placa_id','=',$vehiculo)
            ->orderBy('asignacions.fecha_asignacion','DESC')
            ->orderBy('asignacions.asignacion_id','DESC')
            ->get();


        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)Mantenimientos ##############*/
        $mantenimientos = DB::table('vehiculos')
            ->leftJoin('mantenimientos', 'vehiculos.placa_id', '=', 'mantenimientos.placa_id_mant')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->whereNull('vehiculos.deleted_at')
            ->orderBy('mantenimientos.fecha_inicio_mant', 'DESC')
            /*->limit(1)*/
            ->get();

        /*dd($mantenimientos);*/
        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)ValesDeConbustibles ##############*/
        $valesporplaca = DB::table('vales_de_combustibles')
            ->leftJoin('tipo_combustibles','vales_de_combustibles.tipo_combustible','=','tipo_combustibles.tipo_combustible_id')
            ->where('vales_de_combustibles.placa_id', '=', $vehiculo)
            ->whereNull('vales_de_combustibles.deleted_at')
            ->orderBy('vales_de_combustibles.fecha_entrega', 'DESC')
            ->orderBy('vales_de_combustibles.id', 'DESC')
            ->get();
        /*dd($valesporplaca);*/

        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)infracciones ##############*/
        $infracionesInst = DB::table('infraccions')
            ->where('placa_id', '=', $vehiculo)
            ->whereNull('deleted_at')
            ->orderBy('fecha_infraccion', 'DESC')
            ->orderBy('infraccion_id', 'DESC')
            /*->limit(1)*/
            ->get();

        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)incidencias ##############*/
        $datosincidencias = DB::table('incidencias')
            ->leftJoin('funcionarios','incidencias.ci','=','funcionarios.ci')
            ->where('incidencias.placa_id', '=', $vehiculo)
            ->whereNull('incidencias.deleted_at')
            ->orderBy('incidencias.fecha_incidencia', 'DESC')
            ->orderBy('incidencias.incidencia_id', 'DESC')
            /*->limit(1)*/
            ->get();

        $diaInicioActividades = DB::select("SELECT * FROM estado_servicio_vehiculos 
                                                    where placa_id = '".$vehiculo."' and deleted_at IS NULL
                                                    ORDER BY fecha_inicio ASC
                                                    LIMIT 1");
        /*dd($datosincidencias);*/
        /*return response()->download(public_path().'/imagenes_store/documentos/'.$datosdocumentospropiedadvehicular[0]->archivo_subido);*/
        return view('reportes.vehiculoReport',
            compact('datosvehiculo',
                'datosvehiculos',
                'estadoservvehi',
                'historialEstadoServicioVehiculo',
                'diaInicioActividades',
                'datosdocumentospropiedadvehicular',
                'datosimagenperfilvehicular',
                'datosdocumentosrenovable',
                'datosseguro',
                'asignaciones',
                'historialAsignaciones',
                'mantenimientos',
                'valesporplaca',
                'infracionesInst',
                'datosincidencias',
                'datosFuncionario'));
    }

    public function downloadF($vehiculo)
    {
        $datosdocumentospropiedadvehicular = DB::table('vehiculos')
            ->join('documentos_propiedad_vehiculos', 'vehiculos.placa_id', '=', 'documentos_propiedad_vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'documentos_propiedad_vehiculos.archivo_subido', 'documentos_propiedad_vehiculos.nombre_documento_propiedad')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosimagenperfilvehicular = DB::table('vehiculos')
            ->join('imagenes_perfil_vehiculos', '=', 'vehiculos.placa_id', 'imagenes_perfil_vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'imagenes_perfil_vehiculos.archivo_subido')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();
        return response()->download(public_path() . '/imagenes_store/documentos/' . $datosdocumentospropiedadvehicular[0]->archivo_subido);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
