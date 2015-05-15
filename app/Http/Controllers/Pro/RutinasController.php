<?php namespace App\Http\Controllers\Pro;

use App\Dia;
use App\Ejercicio;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Rutina;
use App\RutinaEjercicioDia;
use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request as RequestHttp;
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
	public function store(RequestHttp $RequestHttp, Redirector $redirect)
	{
        //dd($request->all());
        $rutina = new Rutina($RequestHttp->all());
        $rutina->save();

        if($RequestHttp->Dia_1<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $RequestHttp->Dia_1,
                "id_dia"        => 1,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($RequestHttp->Dia_2<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $RequestHttp->Dia_2,
                "id_dia"        => 2,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($RequestHttp->Dia_3<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $RequestHttp->Dia_3,
                "id_dia"        => 3,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($RequestHttp->Dia_4<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $RequestHttp->Dia_4,
                "id_dia"        => 4,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($RequestHttp->Dia_5<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $RequestHttp->Dia_5,
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
		$rutinas = Rutina::findOrFail($id);

        $ejercicios = Ejercicio::paginate();

        return view('pro.rutinas.edit',compact('rutinas','ejercicios'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, RequestHttp $RequestHttp, Redirector $redirect)
	{
        $rutina = Rutina::findOrFail($id);
        $rutina->fill(Request::all());
        //$rutina = new Rutina(Request::all());
        $rutina->save();

        if($RequestHttp->Dia_1<>null){
            $ejercicio = Ejercicio::findOrFail($RequestHttp->Dia_1);
            $dia = Dia::findOrFail(1);

            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $ejercicio->id,
                "id_dia"        => $dia->id,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }



        if($RequestHttp->Dia_2<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $RequestHttp->Dia_2,
                "id_dia"        => 2,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($RequestHttp->Dia_3<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $RequestHttp->Dia_3,
                "id_dia"        => 3,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($RequestHttp->Dia_4<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $RequestHttp->Dia_4,
                "id_dia"        => 4,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        if($RequestHttp->Dia_5<>null){
            $array = [
                "id_rutina"     => $rutina->id,
                "id_ejercicio"  => $RequestHttp->Dia_5,
                "id_dia"        => 5,
            ];
            $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            $rutinaEjercicioDia->save();
        }

        

        $redirect->route('pro.rutinas.index');
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
