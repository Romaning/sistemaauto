<?php

namespace App\Http\Controllers\ControladorMantenimiento;

use App\Http\Controllers\Controller;
use App\ModeloMantenimiento\Mantenimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

class MantenimientoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * mantenimiento_id',
     * 'mant_id_ini_asign',
     * 'fecha_inicio_mant',
     * 'placa_id_mant',
     * 'detalle_mant',
     * 'tipo_mant',
     * 'empresa_encargada_mant',
     * 'mant_id_fin_asign',
     * 'fecha_fin_mant',
     * costo
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosmants = Mantenimiento::all();
        return view('mantenimientos.indexmantenimiento', compact('datosmants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $tiposMant = DB::table('tipo_mantenimientos')
            ->select('*')
            ->whereNull('deleted_at')
            ->get();
        return view('mantenimientos.createmantenimiento', compact('datosvehiculo', 'tiposMant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mant = new Mantenimiento();
        $mant->fecha_inicio_mant = $request->fecha_inicio_mant;
        $mant->placa_id_mant = $request->placa_id_mant;
        $mant->detalle_mant = $request->detalle_mant;
        $mant->tipo_mant = $request->tipo_mant;
        $mant->costo = $request->costo;

        if ($request->hasFile('imagen_antes')) {
            $archivoImagen = $request->file('imagen_antes');
            $nombreImagen = $request->fecha_inicio_mant . "_antes_mant_" . $request->placa_id_mant. "_" . $archivoImagen->getClientOriginalName();
            $nombreImagen = str_replace(" ", "_", $nombreImagen);
            $path = public_path() . '/imagenes_store/mantenimientos/' . $nombreImagen;
            if (file_exists($path)) {
                unlink($path);
            }
            $archivoImagen->move(public_path('imagenes_store/mantenimientos'), $nombreImagen);
            $mant->imagen_antes = $nombreImagen;
        }

        $mant->empresa_encargada_mant = $request->empresa_encargada_mant;
        $mant->save();
        $idInsert = $mant->mantenimiento_id;
        $mant->mant_id_ini_asign = "M".$idInsert;

        $mant->save();
        $newMantInst = Mantenimiento::find($idInsert);
        if(empty($request->has('fecha_fin_mant'))){
            $newMantInst->mant_id_fin_asign = "MF".$idInsert;
            $newMantInst->fecha_fin_mant = $request->fecha_fin_mant;

            if ($request->hasFile('imagen_despues')) {
                $archivoImagen = $request->file('imagen_despues');
                $nombreImagen = $request->fecha_fin_mant . "_despues_mant_" . $request->placa_id_mant. "_" . $archivoImagen->getClientOriginalName();
                $nombreImagen = str_replace(" ", "_", $nombreImagen);
                $path = public_path() . '/imagenes_store/mantenimientos/' . $nombreImagen;
                if (file_exists($path)) {
                    unlink($path);
                }
                $archivoImagen->move(public_path('imagenes_store/mantenimientos'), $nombreImagen);
                $newMantInst->imagen_despues = $nombreImagen;
            }
            $newMantInst->update();
        }


        return redirect()->back()->with('alert-success', 'Datos guardado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\ModeloMantenimiento\Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show( $mantenimiento)
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $tiposMant = DB::table('tipo_mantenimientos')
            ->select('*')
            ->whereNull('deleted_at')
            ->get();
        $datosMantenimientos = Mantenimiento::find($mantenimiento);
        /*dd($datosMantenimientos);*/
        $imagenesPerfilVehiculo = DB::table('mantenimientos')
            ->leftJoin('imagenes_perfil_vehiculos','mantenimientos.placa_id_mant','=','imagenes_perfil_vehiculos.placa_id')
            ->where('mantenimientos.mantenimiento_id','=',$mantenimiento)
            ->whereNull('mantenimientos.deleted_at')
            ->whereNull('imagenes_perfil_vehiculos.deleted_at')
            ->select('imagenes_perfil_vehiculos.archivo_subido')
            ->get();
        return view('mantenimientos.showmantenimiento',compact('datosMantenimientos','tiposMant','datosvehiculo','imagenesPerfilVehiculo'));
    }

    public function historial($placa_id){
        /*##################### Vehiculos(placa_id)[placa_id] ->(placa_id)Mantenimientos ##############*/
        $mantenimientos = DB::table('mantenimientos')
            ->where('mantenimientos.placa_id_mant','=',$placa_id)
            ->whereNull('mantenimientos.deleted_at')
            ->orderBy('mantenimientos.fecha_inicio_mant','DESC')
            ->get();
        /*dd($mantenimientos);*/
        return view('mantenimientos.historialmantenimiento',compact('mantenimientos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ModeloMantenimiento\Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit( $mantenimiento)
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $tiposMant = DB::table('tipo_mantenimientos')
            ->select('*')
            ->whereNull('deleted_at')
            ->get();
        $datosMantenimientos = Mantenimiento::find($mantenimiento);

        /*dd($datosMantenimientos);*/
        return view('mantenimientos.editmantenimiento',compact('datosMantenimientos','tiposMant','datosvehiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ModeloMantenimiento\Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $mantenimiento)
    {

        $mant = Mantenimiento::find($mantenimiento);

        $mant->fecha_inicio_mant = $request->fecha_inicio_mant;
        $mant->placa_id_mant = $request->placa_id_mant;
        $mant->detalle_mant = $request->detalle_mant;
        $mant->tipo_mant = $request->tipo_mant;
        $mant->empresa_encargada_mant = $request->empresa_encargada_mant;
        $mant->costo = $request->costo;
        if ($request->hasFile('imagen_antes')) {
            $archivoImagen = $request->file('imagen_antes');
            $nombreImagen = $request->fecha_inicio_mant . "_antes_mant_" . $request->placa_id_mant. "_" . $archivoImagen->getClientOriginalName();
            $nombreImagen = str_replace(" ", "_", $nombreImagen);
            $path = public_path() . '/imagenes_store/mantenimientos/' . $nombreImagen;
            if (file_exists($path)) {
                unlink($path);
            }
            $archivoImagen->move(public_path('imagenes_store/mantenimientos'), $nombreImagen);
            $mant->imagen_antes = $nombreImagen;
        }
        if($request->has('fecha_fin_mant') and $request->fecha_fin_mant!="" and $request->fecha_fin_mant!=NULL){
            $mant->mant_id_fin_asign = "MF".$mantenimiento;
            $mant->fecha_fin_mant = $request->fecha_fin_mant;

            if ($request->hasFile('imagen_despues')) {
                $archivoImagen = $request->file('imagen_despues');
                $nombreImagen = $request->fecha_fin_mant . "_despues_mant_" . $request->placa_id_mant. "_" . $archivoImagen->getClientOriginalName();
                $nombreImagen = str_replace(" ", "_", $nombreImagen);
                $path = public_path() . '/imagenes_store/mantenimientos/' . $nombreImagen;
                if (file_exists($path)) {
                    unlink($path);
                }
                $archivoImagen->move(public_path('imagenes_store/mantenimientos'), $nombreImagen);
                $mant->imagen_despues = $nombreImagen;
            }
        }
        $mant->update();
        return redirect()->back()->with('alert-success', 'Datos actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ModeloMantenimiento\Mantenimiento $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy( $mantenimiento)
    {
        Mantenimiento::find($mantenimiento)->delete();
        return redirect()->back()->with('alert-success', 'Datos eliminados correctamente!');
    }
}
