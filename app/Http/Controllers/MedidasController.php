<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Medidas;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;

class MedidasController extends Controller {

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
                return redirect('login');
            }elseif(Session::get('tipo')=='deportista'){
                return view('Deportista.medidas');
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
        $medidas = new Medidas();
        $medidas->id_deportista= Session::get('id');
        $medidas->ultima_modificacion = date('Y-m-d',time());
        $medidas->biceps =$request->biceps;
        $medidas->hombros =$request->hombros;
        $medidas->pecho =$request->pecho;
        $medidas->cuadriceps =$request->cuadriceps;
        $medidas->pantorrilla =$request->pantorrilla;
        $medidas->save();

        return redirect('/medidas');
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
