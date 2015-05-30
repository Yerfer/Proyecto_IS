<?php namespace App\Http\Controllers;

use App\Maquina;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class MaquinaController extends Controller {

	//php artisan make:controller PhotoController
	public function index()
	{
        if(Session::has('usuario')){
            if(Session::get('tipo')=='admin'){
                $maquinas = Maquina::all();
                return view('maquinas.index')->with('maquinas',$maquinas);
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
		return view('maquinas.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$maquina = new Maquina($request->all());
		$maquina->save();
		return redirect('maquinas');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$maquina = Maquina::find($id);
		return view('maquinas.show')->with('maquina',$maquina);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$maquina = Maquina::find($id);
		return view('maquinas.edit')->with('maquina',$maquina);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
		$maquina = Maquina::find($id);
		$maquina->fill($request->all());
		$maquina->save();
		return redirect('maquinas/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$maquina = Maquina::find($id);
		$maquina->delete();
		return redirect('maquinas');

	}

}
