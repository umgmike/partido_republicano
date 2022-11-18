<?php

namespace App\Http\Controllers\PARTIDO_RP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\Usuario;
use App\Models\Afiliados;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function HomeAdmin()
    {
        $datos['RolsUser'] = Rol::orderBy('id', 'DESC')->get();

        $datos['AllUser'] = Usuario::orderBy('id', 'DESC')->get();
        $datos['UserActive'] = Usuario::orderBy('id', 'DESC')->where('estado','!=', 0)->get();
        $datos['UserInactiveAll'] = Usuario::orderBy('id', 'DESC')->where('estado','==',0)->get();

        $datos['TodosLosAfiliados'] = Afiliados::orderBy('id', 'DESC')->where('estado','!=', 0)->get();
        $datos['AfiliadosActivos'] = Afiliados::orderBy('id', 'DESC')->where('esafiliado','!=', 0)
        ->where('estado','!=', 0)->get();
        $datos['AfiliadosEliminados'] = Afiliados::orderBy('id', 'DESC')->where('esafiliado','==',0)
        ->where('estado','!=', 0)->get();

        return view('rols.home', compact('datos'));
    }
}
