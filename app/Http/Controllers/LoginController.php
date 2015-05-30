<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        if(Session::has('usuario')){
            if(Session::get('tipo')=='admin'){
                return redirect('administrador');
            }elseif(Session::get('tipo')=='deportista'){
                return redirect('deportista');
            }else{
                return redirect('entrenador');
            }
        }else{
            return view('Login.login');
        }

	}
    public function logout(){
        Session::flush();
        return redirect('login');
    }
    public function administrador(){
        return redirect('administrador');
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
        $usuario = Login::select('id','usuario', 'password', 'tipo')
            ->where('usuario','=',$request->usuario)
            ->get();
        if(count($usuario)>0) {
            if ($usuario[0]->password == $request->password) {
                $user=['usuario'=> $usuario[0]->usuario,'tipo'=>$usuario[0]->tipo, 'id'=> $usuario[0]->id];
                Session::put($user);
                if($usuario[0]->tipo=='admin'){
                    return redirect('administrador');
                }elseif($usuario[0]->tipo=='deportista'){
                    return redirect('deportista');
                }else{
                    return redirect('entrenador');
                }
            } else {
                return redirect('login');
            }
        }else{
            return redirect('login');
        }

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
