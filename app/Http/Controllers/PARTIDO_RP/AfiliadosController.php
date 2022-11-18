<?php

namespace App\Http\Controllers\PARTIDO_RP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Departamentos;
use App\Models\Municipios;
use App\Models\Afiliados;
use App\Models\Puestos;
use DB;
use Alert;

class AfiliadosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getAfiliados()
    {

        $sql = '
            SELECT
                a.id,
                a.nombre1, 
                a.nombre2, 
                a.nombre3, 
                a.apellido1,
                a.apellido2,
                a.dpi,
                pue.puesto,
                dep.departamento,
                mun.municipio,
                a.telefono1,
                a.telefono2,
                a.email,
                a.direccion,
                a.estado,
                a.esafiliado
            FROM afiliados a
            INNER JOIN puestos pue ON (a.id_puesto = pue.id)
            INNER JOIN departamentos dep ON (a.id_departamento = dep.id)
            INNER JOIN municipios mun ON (a.id_municipio = mun.id)
            WHERE a.estado = 1 ';
        $afiliados = DB::select($sql);
        return view('pages.maintenance.afiliados.index', compact('afiliados'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $d = Departamentos::all();
        $m = Municipios::all();
        $a = Afiliados::all();
        $p = Puestos::all();
        return view('pages.maintenance.afiliados.create', compact('d', 'm', 'a', 'p'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registro = new Afiliados();
        $registro->dpi = $request->dpi; 
        $registro->nombre1 = $request->nombre1; 
        $registro->nombre2 = $request->nombre2; 
        $registro->nombre3 = $request->nombre3; 
        $registro->apellido1 = $request->apellido1; 
        $registro->apellido2 = $request->apellido2; 
        $registro->apellido3 = $request->apellido3; 
        $registro->id_puesto = $request->id_puesto; 
        $registro->id_departamento = $request->id_departamento; 
        $registro->id_municipio = $request->id_municipio; 
        $registro->telefono1 = $request->telefono1; 
        $registro->telefono2 = $request->telefono2; 
        $registro->email = $request->email; 
        $registro->direccion = $request->direccion;
        $registro->esafiliado = $request->esafiliado ? '1' : '0';
        $registro->id_responsable = Auth::user()->id;
        $registro->save();
        toast('Afiliado : '.$registro->nombre1.' '. 'creada con éxito','success')->timerProgressBar();
        return redirect()->action([AfiliadosController::class, 'getAfiliados']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['registro'] = Afiliados::findOrFail($id);
        $data['depto'] = Departamentos::all();
        $data['muni'] = Municipios::all();
        $data['pue'] = Puestos::all();
        return view('pages.maintenance.afiliados.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registro = Afiliados::findOrFail($id);
        $registro->dpi = $request->dpi; 
        $registro->nombre1 = $request->nombre1; 
        $registro->nombre2 = $request->nombre2; 
        $registro->nombre3 = $request->nombre3; 
        $registro->apellido1 = $request->apellido1; 
        $registro->apellido2 = $request->apellido2; 
        $registro->apellido3 = $request->apellido3; 
        $registro->id_puesto = $request->id_puesto; 
        $registro->id_departamento = $request->id_departamento; 
        $registro->id_municipio = $request->id_municipio; 
        $registro->telefono1 = $request->telefono1; 
        $registro->telefono2 = $request->telefono2; 
        $registro->email = $request->email; 
        $registro->direccion = $request->direccion;
        $registro->save();
        toast('Afiliado : '.$registro->nombre1.' '. 'Actualizado con éxito','info')->timerProgressBar()->autoClose(4500);
        return redirect()->action([AfiliadosController::class, 'getAfiliados']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            if ($a = Afiliados::findOrFail($id)) {
                $a->estado = $a->estado ? '0' : '1';
                $a->update();
                toast('Registro de : '.$a->nombre1.' '. 'eliminado con éxito','info')->timerProgressBar()->autoClose(4800);
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
