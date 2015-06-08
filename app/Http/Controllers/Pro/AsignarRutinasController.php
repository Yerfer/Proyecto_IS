<?php namespace App\Http\Controllers\Pro;

use App\Dia;
use Session;
use App\Ejercicio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rutina;
use App\Deportista;
use App\RutinaEjercicioDia;
use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request as RequestHttp;
use Illuminate\Routing\Redirector;
use App\DeportistaRutina;

class AsignarRutinasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Session::has('usuario')){
            if(Session::get('tipo') <> 'entrenador'){
                return redirect('login');
            }else{
                $rutinas = Rutina::paginate();
                $usuarios = Deportista::paginate();
                return view('pro.rutinas.asignarIndex',compact('rutinas','usuarios'));
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

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RequestHttp $RequestHttp, Redirector $redirect)
	{
        for($i = 1; $i <= $RequestHttp->cantidad; $i++){
            if($RequestHttp->$i <> ""){
                $rutina_id = $i;
                $deportista_id = "deportista_".$i;

                $array = [
                    "id_rutina" => $RequestHttp -> $rutina_id,
                    "id_deportista" => $RequestHttp -> $deportista_id
                ];

                $deportistaRutina = new DeportistaRutina($array);
                $deportistaRutina->save();
            }
        }
        return redirect()->route('asignarrutinas.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function update($id)
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

}
