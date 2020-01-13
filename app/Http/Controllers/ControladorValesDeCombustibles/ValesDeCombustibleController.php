<?php

namespace App\Http\Controllers\ControladorValesDeCombustibles;

use App\Http\Controllers\Controller;
use App\ModeloValesDeCombustible\ValesDeCombustible;
use App\ModeloVehiculo\TipoCombustible;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ValesDeCombustibleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosvales = DB::table('vales_de_combustibles')
            ->leftJoin('tipo_combustibles','vales_de_combustibles.tipo_combustible','=','tipo_combustibles.tipo_combustible_id')
            ->whereNull('vales_de_combustibles.deleted_at')
            ->get();
        return view('valesdecombustibles.indexvale',compact('datosvales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datostipocombustible = DB::table('tipo_combustibles')
            ->whereNull('deleted_at')
            ->get();

        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        return view('valesdecombustibles.createvale',compact('datosvehiculo','datostipocombustible'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $numero_vale = $request->numero_vale;
        $fecha_entrega = $request->fecha_entrega;
        $placa_id = $request->placa_id;
        $tipo_combustible = $request->tipo_combustible;
        $cantidad = $request->cantidad;

        for ($i = 0; $i < count($placa_id); $i++) {
            $valecombu = new ValesDeCombustible();
            $valecombu->numero_vale=$numero_vale[$i];
            $valecombu->fecha_entrega=$fecha_entrega[$i];
            $valecombu->placa_id=$placa_id[$i];
            $valecombu->tipo_combustible=$tipo_combustible[$i];
            $valecombu->cantidad=$cantidad[$i];
            $valecombu->save();
        }
        return redirect()->back()->with('alert-success','GUARDADO CORRECTAMENTE');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ModeloValesDeCombustible\ValesDeCombustible  $valesDeCombustible
     * @return \Illuminate\Http\Response
     */
    public function show( $valesDeCombustible)
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $datosvales = DB::table('vales_de_combustibles')
            ->leftJoin('tipo_combustibles','vales_de_combustibles.tipo_combustible','=','tipo_combustibles.tipo_combustible_id')
            ->where('vales_de_combustibles.id','=',$valesDeCombustible)
            ->limit(1)
            ->get();
        return view('valesdecombustibles.showvale',compact('datosvehiculo','datosvales'));
    }

    public function historialVale( $placa_id)
    {
        /*
SELECT
    *
FROM
    vehiculos
LEFT JOIN clases ON vehiculos.clase_id = clases.clase_id
LEFT JOIN marcas ON vehiculos.marca_id = marcas.marca_id
LEFT JOIN tipos ON vehiculos.tipo_id = tipos.tipo_id
LEFT JOIN tipo_combustibles ON vehiculos.tipo_combustible_id = tipo_combustibles.tipo_combustible_id
LEFT JOIN tipo_usos ON vehiculos.tipo_uso_id = tipo_usos.tipo_uso_id
         * */
        /*$datosvehiculos = DB::select("
        SELECT
    *
FROM
    vehiculos
LEFT JOIN clases ON vehiculos.clase_id = clases.clase_id
LEFT JOIN marcas ON vehiculos.marca_id = marcas.marca_id
LEFT JOIN tipos ON vehiculos.tipo_id = tipos.tipo_id
LEFT JOIN tipo_combustibles ON vehiculos.tipo_combustible_id = tipo_combustibles.tipo_combustible_id
LEFT JOIN tipo_usos ON vehiculos.tipo_uso_id = tipo_usos.tipo_uso_id
WHERE vehiculos.placa_id ='".$placa_id."'
        ");*/
        $datosvehiculos = DB::table('vehiculos')
            ->leftJoin('clases','vehiculos.clase_id','=','clases.clase_id')
            ->leftJoin('marcas','vehiculos.marca_id','=','marcas.marca_id')
            ->leftJoin('tipos','vehiculos.tipo_id','=','tipos.tipo_id')
            ->leftJoin('tipo_combustibles','vehiculos.tipo_combustible_id','=','tipo_combustibles.tipo_combustible_id')
            ->leftJoin('tipo_usos','vehiculos.tipo_uso_id','=','tipo_usos.tipo_uso_id')
            ->where('vehiculos.placa_id','=', $placa_id)
            ->get();
        /*dd($datosvehiculos);*/
        $valesporplaca = DB::table('vales_de_combustibles')
            ->leftJoin('vehiculos','vehiculos.placa_id','=','vales_de_combustibles.placa_id')
            ->leftJoin('tipo_combustibles','vales_de_combustibles.tipo_combustible','=','tipo_combustibles.tipo_combustible_id')
            ->whereNull('vales_de_combustibles.deleted_at')
            ->where('vehiculos.placa_id','=',$placa_id)
            ->orderBy('vales_de_combustibles.fecha_entrega','DESC')
            ->get();
        return view('valesdecombustibles.historialvale',
            compact('datosvehiculos','valesporplaca'));



        /*return view('valesdecombustibles.historialvale',compact('datosvehiculo','datosvales'));*/
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ModeloValesDeCombustible\ValesDeCombustible  $valesDeCombustible
     * @return \Illuminate\Http\Response
     */
    public function edit( $valesDeCombustible)
    {
        $datosvehiculo = DB::table('vehiculos')
            ->select("placa_id")
            ->whereNull('deleted_at')
            ->groupBy('placa_id')
            ->get();
        $valesDeCombustibles = TipoCombustible::all();
        $datosvales = ValesDeCombustible::find($valesDeCombustible);
        return view('valesdecombustibles.editvale',compact('datosvehiculo','datosvales','valesDeCombustibles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ModeloValesDeCombustible\ValesDeCombustible  $valesDeCombustible
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $valesDeCombustible)
    {
        $valecombu = ValesDeCombustible::find($valesDeCombustible);
        $valecombu->numero_vale=$request->numero_vale;
        $valecombu->fecha_entrega=$request->fecha_entrega;
        $valecombu->placa_id=$request->placa_id;
        $valecombu->tipo_combustible=$request->tipo_combustible;
        $valecombu->cantidad=$request->cantidad;
        $valecombu->update();
        return redirect()->back()->with('alert-success','ACTUALIZADO CORRECTAMENTE ID: '.$valesDeCombustible);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ModeloValesDeCombustible\ValesDeCombustible  $valesDeCombustible
     * @return \Illuminate\Http\Response
     */
    public function destroy( $valesDeCombustible)
    {
        $valedecombustible_id = $valesDeCombustible;
        ValesDeCombustible::find($valesDeCombustible)->delete();
        return  redirect()->back()->with('alert-success','ELIMINADO CORRECTAMENTE ID: '.$valedecombustible_id);
    }
}
