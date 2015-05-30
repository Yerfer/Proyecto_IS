<?php namespace App\Http\Controllers;

use App\Ejercicio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class EjercicioController extends Controller {

	public function index()
	{
        if(Session::has('usuario')){
            if(Session::get('tipo')=='admin'){
                return redirect('login');
            }elseif(Session::get('tipo')=='deportista'){
                return redirect('login');
            }else{
                $ejercicios = Ejercicio::all();
                return view('ejercicios.index')->with('ejercicios',$ejercicios);
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
		return view('ejercicios.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$ejercicio = new Ejercicio($request->all());
		$ejercicio->save();
		return redirect('ejercicios');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ejercicio = Ejercicio::find($id);
		return view('ejercicios.show')->with('ejercicio',$ejercicio);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ejercicio = Ejercicio::find($id);
		return view('ejercicios.edit')->with('ejercicio',$ejercicio);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$ejercicio = Ejercicio::find($id);
		$ejercicio->fill($request->all());
		$ejercicio->save();
		return redirect('ejercicios/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ejercicio = Ejercicio::find($id);
		$ejercicio->delete();
		return redirect('ejercicios');

	}

}
