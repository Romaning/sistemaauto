<?php

namespace App\Http\Controllers\ControladorVehiculo;

use App\Http\Controllers\Controller;
use App\ModeloVehiculo\Seguro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeguroController extends Controller
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
        $datosseguro = DB::table('seguros')
            ->leftJoin('vehiculos','seguros.placa_id','=','vehiculos.placa_id')
            ->whereNull('vehiculos.deleted_at')
            ->whereNull('seguros.deleted_at')
            ->orderBy('seguros.placa_id')
            ->orderBy('seguros.gestion')
            ->select('seguros.*')
            ->get();
        $datosseguroA = DB::table('seguros')
            ->select('*')
            ->orderBy('seguros.placa_id')
            ->orderBy('seguros.gestion')
            ->get();
        return view('vehiculos.segurosview.indexseguro', compact('datosseguro'));
    }

    public function indexGroup()
    {
        /*SELECT * FROM `seguros` WHERE id = grupo_id*/
        $datosseguro = DB::select('
                                        select grupo_id, gestion, texto, empresa_aseguradora, fecha_vigencia, archivo_subido
                                        from seguros
                                        where deleted_at IS NULl
                                        and grupo_id != "NULL"
                                        GROUP BY grupo_id,gestion, texto, empresa_aseguradora, fecha_vigencia, archivo_subido');
        return view('vehiculos.segurosview.indexseguroGroup', compact('datosseguro'));
    }

    public function previusOfCreate()
    {
        return view('vehiculos.segurosview.previusCreateGroupOROnly');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $placas = DB::table('vehiculos')
            ->select('placa_id')
            ->groupBy('placa_id')
            ->get();
        return view('vehiculos.segurosview.createseguroOther', compact('placas'));
    }

    public function createGroup()
    {
        $placas = DB::table('vehiculos')
            ->select('placa_id')
            ->groupBy('placa_id')
            ->get();
        return view('vehiculos.segurosview.createseguroGroup', compact('placas'));
    }

    public function createSolo($vehiculo_placa_id)
    {
        return view('vehiculos.segurosview.createseguroSolo', compact('vehiculo_placa_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return "AMOR SEGURO STORE";*/
        /*dd($request->all());*/
        $placa_id = $request->placa_id;
        $gestiones = $request->campoa;
        $texto = $request->campob;
        $empresa_aseguradora = $request->campoc;
        $fecha_vigencia = $request->campod;
        $archivo_subido = $request->file('campoe');

        for ($i = 0; $i < count($gestiones); $i++) {
            $seguro = new Seguro();

            $seguro->placa_id = $placa_id[$i];
            $seguro->gestion = $gestiones[$i];
            $seguro->texto = $texto[$i];
            $seguro->empresa_aseguradora = $empresa_aseguradora[$i];
            $seguro->fecha_vigencia = $fecha_vigencia[$i];

            $imageName = $placa_id[$i] . "" . $archivo_subido[$i]->getClientOriginalName();
            $imageName = str_replace(" ", "_", $imageName);
            $archivo_subido[$i]->move(public_path('imagenes_store/seguros'), $imageName);

            $seguro->archivo_subido = $imageName;
            /*$File = file($archivo_subido[$i]);
                    $archivo_subido = $request->file('campoe');
            $imageName = $placa_id[$i].$File->getClientOriginalName();
            $File->move(public_path('imagenes_store/seguros'), $imageName);*/

            $seguro->save();
        }
        return redirect()->back()->with('alert-success', 'Datos guardados correctamente! ')
            ->with('alert-seguro','GUARDADO CORRECTAMENTE');/*route('seguro.index')->with('alert-success', 'Datos guardados correctamente! ');*/
    }
/*
 * id
gestion
texto
empresa_aseguradora
fecha_vigencia
archivo_subido
placa_id
grupo_id
 * */
    public function storeGroup(Request $request)
    {
        /*
          "gestion" => "2019"
          "empresa_aseguradora" => "def"
          "texto" => "der"
          "fecha_vigencia" => "2019-12-24"
          "placas" => [
            0 => "1147DEK"
            1 => "2720RKF"
            2 => "3520TIC"
          ]
         * */
        /*dd($request->all());*/
        $gestion = $request->gestion;
        $texto = $request->texto;
        $empresa_aseguradora = $request->empresa_aseguradora;
        $fecha_vigencia = $request->fecha_vigencia;
        $archivo_subido = $request->file('imagen_seguro');

        $grupoID = 0;
        $placas = $request->placas;
        for($i = 0 ; $i < count($placas); $i++){
            /*echo $placas[$i]." ";*/
            $seguro = new Seguro();

            $seguro->gestion = $gestion;
            $seguro->texto = $texto;
            $seguro->empresa_aseguradora = $empresa_aseguradora;
            $seguro->fecha_vigencia = $fecha_vigencia;
            $seguro->placa_id = $placas[$i];

            $seguro->save();
            $idSeguro = $seguro->id;
            $segur = Seguro::find($idSeguro);
            if ($i==0){
                $grupoID = $idSeguro;
                $imageName = "grupo_".$grupoID."_seguro_".$archivo_subido->getClientOriginalName();
                $imageName = str_replace(" ", "_", $imageName);
                $archivo_subido->move(public_path('imagenes_store/seguros'), $imageName);
            }
            $segur->grupo_id = $grupoID;
            $segur->archivo_subido = $imageName;
            $segur->update();
        }
        return redirect()->back()->with('alert-success', 'Datos guardados correctamente! ');
    }
    /**
     * Display the specified resource.
     *
     * @param \App\ModeloVehiculo\Seguro $seguro
     * @return \Illuminate\Http\Response
     */
    public function show($seguro)
    {
        $placas = DB::table('vehiculos')
            ->select('placa_id')
            ->groupBy('placa_id')
            ->get();
        $seguro = Seguro::find($seguro);
        /*dd($seguro);*/
        return view('vehiculos.segurosview.showseguro', compact('seguro', 'placas'));
    }

    public function showGroup($grupo_id)
    {
        $seguros = DB::table('seguros')
            ->whereNull('deleted_at')
            ->where('grupo_id','=',$grupo_id)
            ->orderBy('placa_id','ASC')
            ->select('*')
            ->get();
        $placas = DB::table('vehiculos')
            ->whereNull('deleted_at')
            ->select('placa_id')
            ->groupBy('placa_id')
            ->orderBy('placa_id','ASC')
            ->get();
        /*dd($seguros);*/
        return view('vehiculos.segurosview.showseguroGroup',compact('seguros', 'placas'));
    }

    public function historialSeguros($vehiculo)
    {
        $datosseguro = DB::table('seguros')
            ->where('placa_id', '=', $vehiculo)
            ->whereNull('deleted_at')
            ->orderBy('placa_id')
            ->orderBy('gestion', 'DESC')
            ->get();
        return view('vehiculos.segurosview.historialplacaseguro', compact('datosseguro','vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\ModeloVehiculo\Seguro $seguro
     * @return \Illuminate\Http\Response
     */
    public function edit($seguro)
    {
        $placas = DB::table('vehiculos')
            ->select('placa_id')
            ->groupBy('placa_id')
            ->get();
        $seguro = Seguro::find($seguro);
        /*dd($seguro);*/
        return view('vehiculos.segurosview.editseguro', compact('seguro', 'placas'));
    }

    public function editGroup($grupo_id)
    {
        $seguros = DB::table('seguros')
            ->whereNull('deleted_at')
            ->where('grupo_id','=',$grupo_id)
            ->orderBy('placa_id','ASC')
            ->select('*')
            ->get();
        $placas = DB::table('vehiculos')
            ->whereNull('deleted_at')
            ->select('placa_id')
            ->groupBy('placa_id')
            ->orderBy('placa_id','ASC')
            ->get();
        /*dd($seguros);*/
        return view('vehiculos.segurosview.editseguroGroup',compact('seguros', 'placas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\ModeloVehiculo\Seguro $seguro
     * @return string
     */
    public function update(Request $request, $seg)
    {

        $seguro = Seguro::find($seg);
        $seguro->gestion = $request->campoa;
        $seguro->texto = $request->campob;
        $seguro->empresa_aseguradora = $request->campoc;
        $seguro->fecha_vigencia = $request->campod;

        if ($request->hasFile('campoe')){ /*EXISTE ALGUN ARCHIVO SUBIDO ? SI*/
            /* GUARDAMOS UN ARCHIVO A LA CARPETA PUBLIC DEL PROYECTO */
            $archivoimag = $request->file('campoe');
            $nombrearchivo = $request->placa_id."".$archivoimag->getClientOriginalName();
            $nombrearchivo =  str_replace(" ", "_", $nombrearchivo);
            $archivoimag->move(public_path('imagenes_store/seguros'),$nombrearchivo);

            /* BUSCAMOS EL ANTIGUO NOMBRE PARA ELIMINAR DE LA BD*/
            $nombreImgParaDarArchivo = DB::table('seguros')
                ->where('seguros.id','=',$seg)
                ->select('seguros.archivo_subido')
                ->get();

            /* ELIMINAMOS LA IMAGEN DE LA CARPETA DE IMAGENES DEL PROYECTO */
            $path = public_path().'/imagenes_store/seguros/'.$nombreImgParaDarArchivo[0]->archivo_subido;
            if (file_exists($path)) {
                unlink($path);
            }

            /* AHORA QUE YA HEMOS OBTENIDO EL NOMBRE PARA OTROS BENEFICIOS AHORA LO REEMPLAZAMOS*/
            $seguro->archivo_subido = $nombrearchivo;
        }
        else{
            /*ENTONCES NO CAMBIAMOS NADA EN ARCHIVOS Y BD ARHIVO_SUBIDO*/
        }
        $seguro->placa_id = $request->placa_id;
        $seguro->update();

        return redirect()->back()->with('alert-success', 'Datos actualizados correctamente! ');
    }

    public function updateClasis(Request $request, $seg)
    {
        $seguro = Seguro::find($seg);
        $seguro->gestion = $request->campoa;
        $seguro->texto = $request->campob;
        $seguro->empresa_aseguradora = $request->campoc;
        $seguro->fecha_vigencia = $request->campod;
        $seguro->archivo_subido = $request->campoe;
        $seguro->placa_id = $request->placa_id;
        $seguro->update();
        return redirect()->back()->with('alert-success', 'Datos actualizados correctamente! ');
    }

    public function updateGroup(Request $request, $grupo_id)
    {
        /*seguros ID en un GRUPO [N]...  muchos ID's en un GRUPO N*/
        $seguros = DB::table('seguros')
            ->where('grupo_id','=',$grupo_id)
            ->orderBy('placa_id','ASC')
            ->select('id')
            ->get();
        $imgSeguroGroup = DB::table('seguros')
            ->whereNotNull('archivo_subido')
            ->where('grupo_id','=',$grupo_id)
            ->groupBy('archivo_subido')
            ->select('archivo_subido')
            ->limit(1)
            ->get();
        if(($request->hasFile('imagen_seguro'))){
            $imageFromFront = $request->file('imagen_seguro');
            $imageName = "grupo_".$grupo_id."_seguro_".$imageFromFront->getClientOriginalName();
            $imageName = str_replace(" ", "_", $imageName);
            $imageFromFront->move(public_path('imagenes_store/seguros'), $imageName);
        }
        /*dd($imgSeguroGroup[0]->archivo_subido);*/
        $v1=[count($seguros)];
        for($i=0; $i< count($seguros);$i++){
            $v1[$i]=$seguros[$i]->id;
        }
        /*dd($v1);*/
        $datosSelect2 = $request->placas;
        $v2=[count($datosSelect2)];
        for($i=0; $i< count($datosSelect2);$i++){
            $v2[$i]=$datosSelect2[$i];
        }
        /*dd($v2);*/
        $contaadorActualizar = 0;
        $contaadorGuardado = 0;
        $contadorno = 0;
        for($j=0;$j<count($v2);$j++){
            $contadorno = 0;
            for($k=0;$k<count($v1);$k++){
                if ($v2[$j]==$v1[$k]){
                    /*echo " \n v1[".$k."] = ".$v1[$k]." a NULL"."<br>";*/
                    $v1[$k]=null;
                    $contaadorActualizar++;
                    /*echo  "\n actualizar ID (seguro)= ".$v1[$k]." las propiedades TEXTO, Fecha Vig, Empresa Aseguradora en SEGUROS EN EL GRUPO"."<br>";*/
                    $seguroUpd = Seguro::find($v2[$j]);
                    $seguroUpd->gestion = $request->gestion;
                    $seguroUpd->texto = $request->texto;
                    $seguroUpd->empresa_aseguradora = $request->empresa_aseguradora;
                    $seguroUpd->fecha_vigencia = $request->fecha_vigencia;
                    $seguroUpd->grupo_id = $grupo_id;
                    if(($request->hasFile('imagen_seguro'))){
                        $seguroUpd->archivo_subido = $imageName;
                    }
                    $seguroUpd->update();
                }
                else{
                    $contadorno++;
                }
                if ($contadorno==count($v1)){
                    $contaadorGuardado++;
                    /*echo " \n ******* guardar Placa = ".$v2[$j]."en SEGUROS EN EL GRUPO "."<br>";*/
                    $seguroSave = new Seguro();
                    $seguroSave->placa_id = $v2[$j];
                    $seguroSave->gestion = $request->gestion;
                    $seguroSave->texto = $request->texto;
                    $seguroSave->empresa_aseguradora = $request->empresa_aseguradora;
                    $seguroSave->fecha_vigencia = $request->fecha_vigencia;
                    $seguroSave->grupo_id = $grupo_id;
                    if(($request->hasFile('imagen_seguro'))){
                        $seguroSave->archivo_subido = $imageName;
                    }
                    else{
                        $seguroSave->archivo_subido = $imgSeguroGroup[0]->archivo_subido;
                    }
                    $seguroSave->save();
                }
            }
        }
        echo " (".$contaadorGuardado.", ".$contadorno.", ".$contaadorActualizar.")";
        for($p=0;$p<count($v1);$p++){
            if($v1[$p]==null){}
            else{
                $seguroDel = Seguro::find($v1[$p]);
                $seguroDel->forceDelete();
            }
        }
        return redirect()->back()->with('alert-success', 'Datos actualizados correctamente! ');
    }

    public function destroy($seguro)
    {
        $archivo_subido = DB::table('seguros')
            ->where('seguros.id', '=', $seguro)
            ->select('seguros.archivo_subido')
            ->get();

        /*$archivo_subido[0]->archivo_subido =  str_replace(" ", "_", $archivo_subido[0]->archivo_subido);
        $path = public_path() . '/imagenes_store/seguros/' . $archivo_subido[0]->archivo_subido;
        if (file_exists($path)) {
            unlink($path);
        }*/

        Seguro::where('id', $seguro)->forceDelete();
        return redirect()->route('seguro.index')->with('alert-success', 'Datos eliminados correctamente! ');
    }

    public function destroyGroup($grupo_id)
    {
        Seguro::where('grupo_id', $grupo_id)->delete();
        return redirect()->back()->with('alert-success', 'Datos eliminados correctamente! ');
    }
}
