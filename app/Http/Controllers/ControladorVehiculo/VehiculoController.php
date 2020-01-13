<?php

namespace App\Http\Controllers\ControladorVehiculo;

use App\Http\Controllers\Controller;
use App\ModeloIncidencia\Incidencia;
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
use App\ModeloVehiculo\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class VehiculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*SELECT v.placa_id, v.numero_crpva, v.numero_chasis, v.numero_motor, v.marca_id, m.marca_id, m.marca_descripcion
        FROM vehiculos v, marcas m
        WHERE v.marca_id = m.marca_id*/
        /*$datosvehiculosall= Vehiculo::all();*/
        /**/
        $datosvehiculos = DB::select('SELECT vehi.placa_id,vehi.numero_crpva,vehi.numero_chasis,vehi.numero_motor,
                                        m.marca_descripcion,estservvehi.est_serv_vehiculo_id,est.est_id ,est.est_descripcion
                                        FROM vehiculos vehi 
                                        LEFT JOIN  (SELECT	est.placa_id, MAX(est.est_serv_vehiculo_id) serv_id
                                                    FROM
                                                            (SELECT	vehiculos.placa_id, MAX(estado_servicio_vehiculos.fecha_inicio) fechamax
                                                            FROM	vehiculos,estado_servicio_vehiculos
                                                            WHERE	vehiculos.placa_id = estado_servicio_vehiculos.placa_id
                                                            GROUP BY	vehiculos.placa_id
                                                            ) tb_orange,
                                                    estado_servicio_vehiculos est
                                                    WHERE	 tb_orange.placa_id = est.placa_id AND tb_orange.fechamax = est.fecha_inicio
                                                    GROUP BY est.placa_id) tb_master ON vehi.placa_id=tb_master.placa_id
                                        LEFT JOIN marcas m ON vehi.marca_id = m.marca_id
                                        LEFT JOIN estado_servicio_vehiculos estservvehi ON tb_master.serv_id = estservvehi.est_serv_vehiculo_id
                                        LEFT JOIN estado_services est ON estservvehi.est_id = est.est_id
                                        WHERE vehi.deleted_at IS NULL');/*#################################### AQUI NO MUESTRA EL VEHICULO ELIMINADO ###### PERO NO ESTA ELIMNAOD EL RESTO DE LAS RELACIONESS ASI QUE SE PUEDE RESTAURAR ###############*/

        return view('vehiculos.vehiculosview.indexvehiculo', compact('datosvehiculos'));
        /*dd($datosvehiculos);*/
    }

    public function indexcard()
    {
        $datosvehiculos = DB::select(
            'SELECT
                    vehi.placa_id,
                    m.marca_descripcion,
                    estservvehi.est_serv_vehiculo_id,
                    est.est_id,
                    est.est_descripcion,
                    class.clase_descripcion,
                    ti.tipo_descripcion,
                    tco.tipo_combustible_descripcion,
                    tu.tipo_uso_descripcion,
                    imgs.archivo,
                    asig.ci
                FROM
                    vehiculos vehi 
                    LEFT JOIN
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
                                 ) tb_master ON vehi.placa_id = tb_master.placa_id
                     LEFT JOIN estado_servicio_vehiculos estservvehi ON tb_master.serv_id = estservvehi.est_serv_vehiculo_id
                     LEFT JOIN estado_services est ON estservvehi.est_id = est.est_id
                     LEFT JOIN marcas m ON vehi.marca_id = m.marca_id
                     LEFT JOIN clases class ON vehi.clase_id = class.clase_id
                     LEFT JOIN tipos ti ON vehi.tipo_id = ti.tipo_id
                     LEFT JOIN tipo_usos tu ON vehi.tipo_uso_id = tu.tipo_uso_id
                     LEFT JOIN tipo_combustibles tco ON vehi.tipo_combustible_id = tco.tipo_combustible_id
                     LEFT JOIN (
                                    SELECT
                                        imgsperfil.id id,
                                        imgsperfil.placa_id placa_id,
                                        imgsperfil.archivo_subido archivo,
                                        imgsperfil.nombre_imagen_perfil nombre
                                    FROM
                                        imagenes_perfil_vehiculos imgsperfil,
                                        (
                                            SELECT
                                                placa_id,
                                                MIN(id) id
                                            FROM
                                                imagenes_perfil_vehiculos
                                            GROUP BY
                                                placa_id
                                            ) placasAndIdImg
                                     WHERE
                                        imgsperfil.id = placasAndIdImg.id
                                ) imgs ON vehi.placa_id = imgs.placa_id
                        LEFT JOIN (
                                        SELECT
                                            asignacion_id,
                                            placa_id,
                                            fecha_asignacion,
                                            identificador_memorandum,
                                            ci,
                                            tipo_conductor_chofer
                                        FROM
                                            asignacions
                                        WHERE
                                            deleted_at IS NULL
                                    ) asig ON vehi.placa_id = asig.placa_id 
                        WHERE
                        vehi.deleted_at IS NULL');

        return view('vehiculos.vehiculosview.indexvehiculocard', compact('datosvehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosclase = Clase::all();
        $datosmarca = Marca::all();
        $datostipo = Tipo::all();
        $datostipo_combustible = TipoCombustible::all();
        $datostipo_uso = TipoUso::all();
        $datosestado = EstadoService::all();
        /*$datosvehiculo = Vehiculo::all();*/

        return view('vehiculos.vehiculosview.createvehiculo', compact('datosclase',
            'datosmarca',
            'datostipo',
            'datostipo_combustible',
            'datostipo_uso',
            'datosestado'/*, 'datosvehiculo'*/));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
         * INSERT INTO `vehiculos` (`placa_id`, `numero_crpva`, `numero_chasis`, `numero_motor`, `documento_importacion`,
        `numero_documento_importacion`, `plazas`, `ruedas`, `traccion`, `estado_servicio`, `color`, `clase_id`, `marca_id`,
        `tipo_id`, `tipo_combustible_id`, `tipo_uso_id`, `created_at`, `updated_at`, `deleted_at`)
        VALUES ('asdas', 'asdas', 'asdasd', 'asdasdas', 'asdasdas', '123123', '12321', '12312', 'dasda', 'activo', 'asdsad',
        '1', '2', '3', '2', '1', '2019-10-16 00:00:00', '2019-10-08 00:00:00', NULL);*/
        $vehiculo = new Vehiculo();
        $vehiculo->placa_id = $request->placa_id;
        $vehiculo->numero_crpva = $request->numero_crpva;
        $vehiculo->numero_chasis = $request->numero_chasis;
        $vehiculo->numero_motor = $request->numero_motor;
        $vehiculo->documento_importacion = $request->documento_importacion;
        $vehiculo->numero_documento_importacion = $request->numero_documento_importacion;
        $vehiculo->plazas = $request->plazas;
        $vehiculo->ruedas = $request->ruedas;
        $vehiculo->traccion = $request->traccion;
        $vehiculo->color = $request->color;
        $vehiculo->clase_id = $request->clase_id;
        $vehiculo->marca_id = $request->marca_id;
        $vehiculo->tipo_id = $request->tipo_id;
        $vehiculo->tipo_combustible_id = $request->tipo_combustible_id;
        $vehiculo->tipo_uso_id = $request->tipo_uso_id;
        $vehiculo->fecha_incorporacion_institucion = $request->fecha_incorporacion_institucion;
        /*dd($vehiculo);*/
        $vehiculo->save();
        /*return redirect()->route('vehiculo.index')->with('success','Registro Exitoso');*/
        return "Exito en Subir";
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ModeloVehiculo\Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($vehiculo)
    {
        /*SELECT vehiculos.*, clases.clase_descripcion,marcas.marca_descripcion,tipos.tipo_descripcion,tipo_combustibles.tipo_combustible_descripcion,tipo_usos.tipo_uso_descripcion
        FROM vehiculos
        JOIN clases ON clases.clase_id = vehiculos.clase_id
        JOIN marcas ON marcas.marca_id =  vehiculos.marca_id
        JOIN tipos ON tipos.tipo_id = vehiculos.tipo_id
        JOIN tipo_combustibles ON tipo_combustibles.tipo_combustible_id = vehiculos.tipo_combustible_id
        JOIN tipo_usos ON tipo_usos.tipo_uso_id = vehiculos.tipo_uso_id*/
        $datosvehiculo = DB::table('vehiculos')
            ->leftJoin('clases', 'vehiculos.clase_id', '=', 'clases.clase_id')
            ->leftJoin('marcas', 'vehiculos.marca_id', '=', 'marcas.marca_id')
            ->leftJoin('tipos', 'vehiculos.tipo_id', '=', 'tipos.tipo_id')
            ->leftJoin('tipo_combustibles', 'vehiculos.tipo_combustible_id', '=', 'tipo_combustibles.tipo_combustible_id')
            ->leftJoin('tipo_usos','vehiculos.tipo_uso_id',  '=', 'tipo_usos.tipo_uso_id')
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
        $datosdocumentospropiedadvehicular = DB::table('vehiculos')
            ->leftJoin('documentos_propiedad_vehiculos', 'vehiculos.placa_id','=', 'documentos_propiedad_vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'documentos_propiedad_vehiculos.archivo_subido', 'documentos_propiedad_vehiculos.nombre_documento_propiedad')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosimagenperfilvehicular = DB::table('vehiculos')
            ->leftJoin('imagenes_perfil_vehiculos','vehiculos.placa_id' , '=', 'imagenes_perfil_vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'imagenes_perfil_vehiculos.archivo_subido')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosdocumentosrenovable = DB::table('documentos_ronovable_vehiculos')
            ->where('documentos_ronovable_vehiculos.placa_id', '=', $vehiculo)
            ->where('documentos_ronovable_vehiculos.gestion', '=', date('Y'))
            ->orWhere('documentos_ronovable_vehiculos.gestion', '=', (date('Y') + 1))
            ->whereNull('documentos_ronovable_vehiculos.deleted_at')
            ->select('*')
            ->limit(1)
            ->get();

        $datosseguro = DB::table('seguros')
            ->select('*')
            ->where('seguros.placa_id', '=', $vehiculo)
            ->where('seguros.gestion', '=', date('Y'))
            ->orWhere('seguros.gestion', '=', (date('Y') + 1))
            ->get();
        /*##################### VEHICULOS(placa_id)[placa_id=$vehiculo] -> (placa_id)ASIGNACIONS(ci) -> (ci)FUNCIONARIOS ##############*/
        $asignaciones = DB::table('vehiculos')
            ->leftJoin('asignacions', 'vehiculos.placa_id', '=', 'asignacions.placa_id')
            ->leftJoin('funcionarios', 'asignacions.ci', '=','funcionarios.ci' )
            ->whereNull('asignacions.deleted_at')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)Mantenimientos ##############*/
        $mantenimientos = DB::table('mantenimientos')
            ->leftJoin('vehiculos', 'vehiculos.placa_id', '=', 'mantenimientos.placa_id_mant')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->whereNull('vehiculos.deleted_at')
            ->orderBy('mantenimientos.fecha_inicio_mant', 'DESC')
            ->orderBy('mantenimientos.mantenimiento_id', 'DESC')
            ->limit(1)
            ->get();

        /*dd($mantenimientos);*/
        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)ValesDeConbustibles ##############*/
        /*$valesporplaca = DB::table('vales_de_combustibles')
            ->leftJoin('vehiculos', 'vales_de_combustibles.placa_id', '=', 'vehiculos.placa_id')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->whereNull('vales_de_combustibles.deleted_at')
            ->orderBy('fecha_entrega', 'DESC')
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->get();*/

        $valesporplaca = DB::table('vales_de_combustibles')
            ->leftJoin('tipo_combustibles','vales_de_combustibles.tipo_combustible','=','tipo_combustibles.tipo_combustible_id')
            ->whereNull('vales_de_combustibles.deleted_at')
            ->where('vales_de_combustibles.placa_id','=',$vehiculo)
            ->orderBy('vales_de_combustibles.fecha_entrega','DESC')
            ->orderBy('vales_de_combustibles.id', 'DESC')
            ->limit(1)
            ->get();
        /*dd($valesporplaca);*/
        /*dd($valesporplaca);*/

        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)infracciones ##############*/
        $infracionesInst = DB::table('infraccions')
            ->where('placa_id', '=', $vehiculo)
            ->whereNull('deleted_at')
            ->orderBy('fecha_infraccion', 'DESC')
            ->orderBy('infraccion_id', 'DESC')
            ->limit(1)
            ->get();
        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)incidencias ##############*/
        $datosincidencias = DB::table('incidencias')
            ->where('placa_id', '=', $vehiculo)
            ->whereNull('deleted_at')
            ->orderBy('fecha_incidencia', 'DESC')
            ->orderBy('incidencia_id', 'DESC')
            ->limit(1)
            ->get();
        /*dd($datosincidencias);*/

        return view('vehiculos.vehiculosview.showvehiculo',
            compact('datosvehiculo',
                'estadoservvehi',
                'datosdocumentospropiedadvehicular',
                'datosimagenperfilvehicular',
                'datosdocumentosrenovable',
                'datosseguro', 'asignaciones', 'mantenimientos', 'valesporplaca', 'infracionesInst', 'datosincidencias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ModeloVehiculo\Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function showEdit($vehiculo)
    {
        /*SELECT vehiculos.*, clases.clase_descripcion,marcas.marca_descripcion,tipos.tipo_descripcion,tipo_combustibles.tipo_combustible_descripcion,tipo_usos.tipo_uso_descripcion
                FROM vehiculos
                JOIN clases ON clases.clase_id = vehiculos.clase_id
                JOIN marcas ON marcas.marca_id =  vehiculos.marca_id
                JOIN tipos ON tipos.tipo_id = vehiculos.tipo_id
                JOIN tipo_combustibles ON tipo_combustibles.tipo_combustible_id = vehiculos.tipo_combustible_id
                JOIN tipo_usos ON tipo_usos.tipo_uso_id = vehiculos.tipo_uso_id*/
        $datosvehiculo = DB::table('vehiculos')
            ->leftJoin('clases', 'clases.clase_id', '=', 'vehiculos.clase_id')
            ->leftJoin('marcas', 'marcas.marca_id', '=', 'vehiculos.marca_id')
            ->leftJoin('tipos', 'tipos.tipo_id', '=', 'vehiculos.tipo_id')
            ->leftJoin('tipo_combustibles', 'tipo_combustibles.tipo_combustible_id', '=', 'vehiculos.tipo_combustible_id')
            ->leftJoin('tipo_usos', 'tipo_usos.tipo_uso_id', '=', 'vehiculos.tipo_uso_id')
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
        $datosdocumentospropiedadvehicular = DB::table('vehiculos')
            ->leftJoin('documentos_propiedad_vehiculos', 'vehiculos.placa_id','=', 'documentos_propiedad_vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'documentos_propiedad_vehiculos.archivo_subido', 'documentos_propiedad_vehiculos.nombre_documento_propiedad')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosimagenperfilvehicular = DB::table('vehiculos')
            ->leftJoin('imagenes_perfil_vehiculos', 'vehiculos.placa_id','=','imagenes_perfil_vehiculos.placa_id')
            ->select('vehiculos.placa_id', 'imagenes_perfil_vehiculos.archivo_subido')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosdocumentosrenovable = DB::table('documentos_ronovable_vehiculos')
            ->select('*')
            ->where('documentos_ronovable_vehiculos.placa_id', '=', $vehiculo)
            ->where('documentos_ronovable_vehiculos.gestion', '=', date('Y'))
            ->limit(1)
            ->get();

        $datosseguro = DB::table('seguros')
            ->select('*')
            ->where('seguros.placa_id', '=', $vehiculo)
            ->where('seguros.gestion', '=', date('Y'))
            ->get();
        /*##################### VEHICULOS(placa_id)[placa_id=$vehiculo] -> (placa_id)ASIGNACIONS(ci) -> (ci)FUNCIONARIOS ##############*/
        $asignaciones = DB::table('vehiculos')
            ->leftJoin('asignacions', 'vehiculos.placa_id', '=', 'asignacions.placa_id')
            ->leftJoin('funcionarios', 'funcionarios.ci', '=', 'asignacions.ci')
            ->whereNull('asignacions.deleted_at')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)Mantenimientos ##############*/
        $mantenimientos = DB::table('vehiculos')
            ->leftJoin('mantenimientos', 'vehiculos.placa_id', '=', 'mantenimientos.placa_id_mant')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->whereNull('vehiculos.deleted_at')
            ->orderBy('mantenimientos.fecha_inicio_mant', 'DESC')
            ->limit(1)
            ->get();

        /*dd($mantenimientos);*/
        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)ValesDeConbustibles ##############*/
        $valesporplaca = DB::table('vales_de_combustibles')
            ->leftJoin('vehiculos', 'vales_de_combustibles.placa_id', '=', 'vehiculos.placa_id')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->whereNull('vales_de_combustibles.deleted_at')
            ->orderBy('fecha_entrega', 'DESC')
            ->limit(1)
            ->get();
        /*dd($valesporplaca);*/

        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)infracciones ##############*/
        $infracionesInst = DB::table('infraccions')
            ->where('placa_id', '=', $vehiculo)
            ->whereNull('deleted_at')
            ->orderBy('fecha_infraccion', 'DESC')
            ->limit(1)
            ->get();


        return view('vehiculos.vehiculosview.showvehiculo',
            compact('datosvehiculo',
                'estadoservvehi',
                'datosdocumentospropiedadvehicular',
                'datosimagenperfilvehicular',
                'datosdocumentosrenovable',
                'datosseguro', 'asignaciones', 'mantenimientos', 'valesporplaca', 'infracionesInst'));
    }

    public function editSolo($vehiculo)
    {
        $datosclase = Clase::all();
        $datosmarca = Marca::all();
        $datostipo = Tipo::all();
        $datostipo_combustible = TipoCombustible::all();
        $datostipo_uso = TipoUso::all();
        $datosvehiculo = DB::table('vehiculos')
            ->leftJoin('clases', 'vehiculos.clase_id', '=', 'clases.clase_id')
            ->leftJoin('marcas','vehiculos.marca_id' , '=', 'marcas.marca_id')
            ->leftJoin('tipos','vehiculos.tipo_id','=','tipos.tipo_id' )
            ->leftJoin('tipo_combustibles', 'vehiculos.tipo_combustible_id', '=','tipo_combustibles.tipo_combustible_id')
            ->leftJoin('tipo_usos', 'vehiculos.tipo_uso_id','=', 'tipo_usos.tipo_uso_id')
            ->select('vehiculos.*',
                'clases.clase_id',
                'clases.clase_descripcion',
                'marcas.marca_id',
                'marcas.marca_descripcion',
                'tipos.tipo_id',
                'tipos.tipo_descripcion',
                'tipo_combustibles.tipo_combustible_id',
                'tipo_combustibles.tipo_combustible_descripcion',
                'tipo_usos.tipo_uso_id',
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


        $datosdocumentospropiedadvehicular = DB::table('documentos_propiedad_vehiculos')
            ->leftJoin('vehiculos', 'vehiculos.placa_id', '=', 'documentos_propiedad_vehiculos.placa_id')
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
            ->where('documentos_ronovable_vehiculos.gestion', '=', date('Y'))
            ->orWhere('documentos_ronovable_vehiculos.gestion', '=', (date('Y') + 1))
            ->whereNull('documentos_ronovable_vehiculos.deleted_at')
            ->limit(1)
            ->get();

        $datosseguro = DB::table('seguros')
            ->select('*')
            ->where('seguros.placa_id', '=', $vehiculo)
            ->where('seguros.gestion', '=', date('Y'))
            ->orWhere('seguros.gestion', '=', (date('Y') + 1))
            ->get();
        /*##################### VEHICULOS(placa_id)[placa_id=$vehiculo] -> (placa_id)ASIGNACIONS(ci) -> (ci)FUNCIONARIOS ##############*/
        $asignaciones = DB::table('vehiculos')
            ->leftJoin('asignacions', 'vehiculos.placa_id', '=', 'asignacions.placa_id')
            ->leftJoin('funcionarios', 'asignacions.ci', '=', 'funcionarios.ci')
            ->whereNull('asignacions.deleted_at')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)Mantenimientos ##############*/
        $mantenimientos = DB::table('mantenimientos')
            ->leftJoin('vehiculos', 'vehiculos.placa_id', '=', 'mantenimientos.placa_id_mant')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->whereNull('vehiculos.deleted_at')
            ->whereNull('mantenimientos.deleted_at')
            ->orderBy('mantenimientos.fecha_inicio_mant', 'DESC')
            ->orderBy('mantenimientos.mantenimiento_id', 'DESC')
            ->limit(1)
            ->get();
        /*dd($mantenimientos);*/
        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)ValesDeConbustibles ##############*/
        $valesporplaca = DB::table('vales_de_combustibles')
            ->leftJoin('vehiculos', 'vehiculos.placa_id','=',  'vales_de_combustibles.placa_id')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->whereNull('vales_de_combustibles.deleted_at')
            ->whereNull('vehiculos.deleted_at')
            ->orderBy('fecha_entrega', 'DESC')
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->get();
        /*dd($valesporplaca);*/

        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)infracciones ##############*/
        $infracionesInst = DB::table('infraccions')
            ->where('placa_id', '=', $vehiculo)
            ->whereNull('deleted_at')
            ->orderBy('fecha_infraccion', 'DESC')
            ->orderBy('infraccion_id', 'DESC')
            ->limit(1)
            ->get();
        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)incidencias ##############*/
        $datosincidencias = DB::table('incidencias')
            ->where('placa_id', '=', $vehiculo)
            ->whereNull('deleted_at')
            ->orderBy('fecha_incidencia', 'DESC')
            ->orderBy('incidencia_id', 'DESC')
            ->limit(1)
            ->get();
        /*dd($datosincidencias);*/

        return view('vehiculos.vehiculosview.editvehiculoSolo',
            compact(
                'datosclase',
                'datosmarca',
                'datostipo',
                'datostipo_combustible',
                'datostipo_uso',
                'datosvehiculo',
                'estadoservvehi',
                'datosdocumentospropiedadvehicular',
                'datosimagenperfilvehicular',
                'datosdocumentosrenovable',
                'datosseguro',
                'asignaciones',
                'mantenimientos',
                'valesporplaca',
                'infracionesInst',
                'datosincidencias'));
    }

    public function updateSolo(Request $request, $vehiculo)
    {
        $vehiculo = Vehiculo::find($vehiculo);
        $vehiculo->placa_id = $request->placa_id;
        $vehiculo->numero_crpva = $request->numero_crpva;
        $vehiculo->numero_chasis = $request->numero_chasis;
        $vehiculo->numero_motor = $request->numero_motor;
        $vehiculo->documento_importacion = $request->documento_importacion;
        $vehiculo->numero_documento_importacion = $request->numero_documento_importacion;
        $vehiculo->plazas = $request->plazas;
        $vehiculo->ruedas = $request->ruedas;
        $vehiculo->traccion = $request->traccion;
        $vehiculo->color = $request->color;
        $vehiculo->clase_id = $request->clase_id;
        $vehiculo->marca_id = $request->marca_id;
        $vehiculo->tipo_id = $request->tipo_id;
        $vehiculo->tipo_combustible_id = $request->tipo_combustible_id;
        $vehiculo->tipo_uso_id = $request->tipo_uso_id;
        $vehiculo->fecha_incorporacion_institucion = $request->fecha_incorporacion_institucion;
        /*dd($vehiculo);*/
        $vehiculo->update();
        /*return redirect()->route('vehiculo.index')->with('success','Registro Exitoso');*/
        return redirect()->route('vehiculo.show', $vehiculo)->with('alert-success', 'Datos actualizados correctamente!');
    }

    public function destroySolo($vehiculo)
    {

    }

    public function editVehiculoTodo(Request $request)
    {
        $datosclase = Clase::all();
        $datosmarca = Marca::all();
        $datostipo = Tipo::all();
        $datostipo_combustible = TipoCombustible::all();
        $datostipo_uso = TipoUso::all();

        $datosvehiculo = DB::table('vehiculos')
            ->leftJoin('clases', 'clases.clase_id', '=', 'vehiculos.clase_id')
            ->leftJoin('marcas', 'marcas.marca_id', '=', 'vehiculos.marca_id')
            ->leftJoin('tipos', 'tipos.tipo_id', '=', 'vehiculos.tipo_id')
            ->leftJoin('tipo_combustibles', 'tipo_combustibles.tipo_combustible_id', '=', 'vehiculos.tipo_combustible_id')
            ->leftJoin('tipo_usos', 'tipo_usos.tipo_uso_id', '=', 'vehiculos.tipo_uso_id')
            ->select('vehiculos.*',
                'clases.clase_id',
                'clases.clase_descripcion',
                'marcas.marca_id',
                'marcas.marca_descripcion',
                'tipos.tipo_id',
                'tipos.tipo_descripcion',
                'tipo_combustibles.tipo_combustible_id',
                'tipo_combustibles.tipo_combustible_descripcion',
                'tipo_usos.tipo_uso_id',
                'tipo_usos.tipo_uso_descripcion')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

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

        $datosdocumentospropiedadvehicular = DB::table('vehiculos')
            ->leftJoin('documentos_propiedad_vehiculos', 'vehiculos.placa_id', '=', 'documentos_propiedad_vehiculos.placa_id')
            ->select('documentos_propiedad_vehiculos.id',
                'documentos_propiedad_vehiculos.archivo_subido',
                'documentos_propiedad_vehiculos.nombre_documento_propiedad',
                'vehiculos.placa_id')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosimagenperfilvehicular = DB::table('vehiculos')
            ->leftJoin('imagenes_perfil_vehiculos', 'vehiculos.placa_id', '=','imagenes_perfil_vehiculos.placa_id' )
            ->select('imagenes_perfil_vehiculos.id',
                'imagenes_perfil_vehiculos.archivo_subido',
                'imagenes_perfil_vehiculos.nombre_imagen_perfil',
                'vehiculos.placa_id')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosdocumentosrenovable = DB::table('documentos_ronovable_vehiculos')
            ->select('*')
            ->where('documentos_ronovable_vehiculos.placa_id', '=', $vehiculo)
            ->get();

        $datosseguro = DB::table('seguros')
            ->select('*')
            ->where('seguros.placa_id', '=', $vehiculo)
            ->get();

        return view('vehiculos.vehiculosview.editvehiculo',
            compact('datosclase',
                'datosmarca',
                'datostipo',
                'datostipo_combustible',
                'datostipo_uso',
                'datosvehiculo',
                'estadoservvehi',
                'datosdocumentospropiedadvehicular',
                'datosimagenperfilvehicular',
                'datosdocumentosrenovable',
                'datosseguro'));
    }

    public function edit($vehiculo)
    {
        return view('vehiculos.vehiculosview.editvehiculoS');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ModeloVehiculo\Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vehiculo)
    {

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ModeloVehiculo\Vehiculo $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($vehiculo)
    {

        $asignaciones = DB::table('vehiculos')
            ->leftJoin('asignacions', 'vehiculos.placa_id', '=', 'asignacions.placa_id')
            ->leftJoin('funcionarios', 'asignacions.ci', '=','funcionarios.ci' )
            ->whereNull('asignacions.deleted_at')
            ->where('vehiculos.placa_id', '=', $vehiculo)
            ->get();

        if (empty($asignaciones[0]->asignacion_id)) {
            /*TODO: SOLO SE DEBE HACER ELIMINACION SUAVE, PARA QUE FUNCIONEN LOS HISTORIALES*/
            Vehiculo::find($vehiculo)->delete(); /*ESTO TIENE QUE ELIMINAR EN CADENA PERO NO SE HACE, LO MALO ES QUE NO SE PUEDE REGISTRAR OTRO(SE DEBE RESTAURAR DESDE BD) ################################*/
            return redirect()->route('vehiculo.index')->with('alert-success', 'VEHICULO ELIMINADO CORRECTAMENTE, PUEDE RESTAURAR!');
        } else {
            return redirect()->back()->with('alert-danger', 'EL VEHICULO NO PUEDE SER ELIMINADO, PORQUE TIENE UNA ASIGNACION EN LINEA!');
        }

    }

    public function subirArchivo(Request $request)
    {
        return $request;
        /*return view('vehiculos.vehiculosviews.indexvehiculo');*/
    }

}
