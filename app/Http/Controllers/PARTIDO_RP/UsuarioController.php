<?php

namespace App\Http\Controllers\PARTIDO_RP;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Rol;
use App\Models\Usuario;
use App\Models\Genero;
use App\Http\Requests\UserValidate;
use App\Http\Requests\UserEditValidate;
use App\Http\Requests\passValidate;
use Illuminate\Support\Facades\Hash;
use Alert;

class UsuarioController extends Controller
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
        $users = Usuario::with('roles')->orderBy('id')->get();
        return view('pages.maintenance.usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users['roles'] = Rol::all();
        $users['geberos_list'] = Genero::all();
        return view('pages.maintenance.usuarios.create', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(passValidate $request)
    {
        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);

        $users = new Usuario();
        $users->id_rol = $request->id_rol;
        $users->nombre = $request->nombre;
        $users->apellido = $request->apellido;
        $users->usuario = $request->usuario;
        $users->id_genero = $request->id_genero;
        $users->password = $request->password;
        $users->save();
        toast('Usuario : '.$users->nombre. ' '. 'creado con éxito','info')->timerProgressBar()->autoClose(4000);
        return redirect()->action([UsuarioController::class, 'create']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['registro'] = Usuario::findOrFail($id);
        $data['roles_r'] = Rol::all();
        $data['generos_r'] = Genero::all();
        return view('pages.maintenance.usuarios.edit',$data);
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

        $registro = Usuario::findOrFail($id);
        $registro->id_rol = $request->id_rol;
        $registro->nombre = $request->nombre;
        $registro->apellido = $request->apellido;
        $registro->usuario = $request->usuario;
        $registro->id_genero = $request->id_genero;
        $registro->save();
        toast('Usuario : '.$registro->nombre.' '. 'Actualizado con éxito','info')->timerProgressBar()->autoClose(4500);
        return redirect()->action([UsuarioController::class, 'index']);
    }

    public function update_pass(passValidate $request, $id)
    {
        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);

        $registro = Usuario::findOrFail($id);
        $registro->password = $request->password;
        $registro->save();
        toast('Contraseña de : '.$registro->nombre.' '.$registro->apellido.' '. 'Actualizado con éxito','info')->timerProgressBar()->autoClose(4500);
        return redirect()->action([UsuarioController::class, 'index']);
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
            if ($users = Usuario::findOrFail($id)) {
                $users->estado = $users->estado ? '0' : '1';
                $users->update();
                toast('Estado de : '.$users->nombre.' '.$users->apellido.' '. 'cambiada con éxito','info')->timerProgressBar()->autoClose(4800);
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
