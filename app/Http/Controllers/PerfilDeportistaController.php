<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Usuario;
use App\Perfil;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class PerfilDeportistaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Session::has('usuario')){
            if(Session::get('tipo')=='admin'){
                return redirect('login');
            }elseif(Session::get('tipo')=='deportista'){
                $usuario = array ( Usuario::find(Session::get('id')));
                $idperfil=\DB::table('perfilDeportista')
                    ->select('id')
                    ->where('id_deportista','=', ($usuario[0]->id))
                    ->get();
                array_push($usuario, Perfil::find($idperfil[0]->id));
                return view('Deportista.perfil')->with('usuario',$usuario);
            }else{
                return redirect('login');
            }
        }else{
            return redirect('login');
        }
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
        $cedula=$request->cedula;

        $usuario = \DB::table('usuarios')
            ->select('id')
            ->where('cedula','=', $cedula)
            ->get();
        $array = [
            "nombre" => $request->nombre,
            "apellido"=>$request->apellido,
            "cedula"=>$cedula
        ];

        $user = Usuario::find($usuario[0]->id);
        $user->fill($array);
        $user->save();

        $idperfil=\DB::table('perfilDeportista')
            ->select('id')
            ->where('id_deportista','=', ($usuario[0]->id))
            ->get();
        $perf = Perfil::find($idperfil[0]->id);
        $perf->direccion= $request->direccion;
        $perf->telefono= $request->telefono;
        $perf->peso= $request->peso;
        $perf->presion= $request->presion;
        $perf->altura= $request->altura;
        $perf->genero= $request->genero;
        $perf->save();

        return redirect('perfil');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
