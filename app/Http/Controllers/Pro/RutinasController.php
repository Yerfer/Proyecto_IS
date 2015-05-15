<?php namespace App\Http\Controllers\Pro;

use App\Ejercicio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rutina;
use App\RutinaEjercicioDia;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class RutinasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$rutinas = Rutina::paginate();

        return view('pro.rutinas.index',compact('rutinas'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $ejercicios = Ejercicio::paginate();
		return view('pro.rutinas.create',compact('ejercicios'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Redirector $redirect)
	{
        //dd($request->all());
        $rutina = new Rutina($request->all());
        $rutina->save();

        if($request->Dia_1<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $request->Dia_1,
                "id_dia"        => 1,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($request->Dia_2<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $request->Dia_2,
                "id_dia"        => 2,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($request->Dia_3<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $request->Dia_3,
                "id_dia"        => 3,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($request->Dia_4<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $request->Dia_4,
                "id_dia"        => 4,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($request->Dia_5<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $request->Dia_5,
                "id_dia"        => 5,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        $redirect->route('pro.rutinas.index');

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
