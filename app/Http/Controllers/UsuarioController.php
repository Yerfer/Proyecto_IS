<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Usuario;
use App\Perfil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class UsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Session::has('usuario')){
            if(Session::get('tipo')=='admin'){
                $usuarios = Usuario::all();
                return view('Usuarios.show')-> with('usuarios', $usuarios);
            }elseif(Session::get('tipo')=='deportista'){
                return redirect('login');
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
        return view('Usuarios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        if($request->tipo == '1'){
            $usuario = new Usuario($request->all());
            $usuario->save();
            $perfil = new Perfil(array('id_deportista' => $usuario->id));
            $perfil->save();
        }else{
            $usuario = new Usuario($request->all());
            $usuario->save();
        }

        return redirect('usuario');

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
        if(Session::has('usuario')){
            if(Session::get('tipo')=='admin'){
                $usuario = Usuario::find($id);
                return view('Usuarios.config')->with('usuario',$usuario);
            }elseif(Session::get('tipo')=='deportista'){
                return redirect('login');
            }else{
                return redirect('login');
            }
        }else{
            return redirect('login');
        }

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
        $usuario = Usuario::find($id);
        return view('Usuarios.edit')->with('usuario',$usuario);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		//
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();
        return redirect('usuario/');
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
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('usuario');

	}

}

