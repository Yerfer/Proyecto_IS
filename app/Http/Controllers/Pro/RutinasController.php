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

class RutinasController extends Controller {

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
                return redirect('login');
            }else{
                $rutinas = Rutina::paginate();
                return view('pro.rutinas.index',compact('rutinas'));
            }
        }else{
            return redirect('login');
        }

		//$rutinas = Rutina::paginate();
        //return view('pro.rutinas.index',compact('rutinas'));

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

        if(""==$RequestHttp->nombre){
            return $redirect->back();
        }

        else {

            $rutina = new Rutina($RequestHttp->all());
            $rutina->save();

            if ($RequestHttp->Dia_1 <> null) {
                $array = [
                    "id_rutina" => $rutina->id,
                    "id_ejercicio" => $RequestHttp->Dia_1,
                    "id_dia" => 1,
                ];
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
                $rutinaEjercicioDia->save();
            }

            if ($RequestHttp->Dia_2 <> null) {
                $array = [
                    "id_rutina" => $rutina->id,
                    "id_ejercicio" => $RequestHttp->Dia_2,
                    "id_dia" => 2,
                ];
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
                $rutinaEjercicioDia->save();
            }

            if ($RequestHttp->Dia_3 <> null) {
                $array = [
                    "id_rutina" => $rutina->id,
                    "id_ejercicio" => $RequestHttp->Dia_3,
                    "id_dia" => 3,
                ];
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
                $rutinaEjercicioDia->save();
            }

            if ($RequestHttp->Dia_4 <> null) {
                $array = [
                    "id_rutina" => $rutina->id,
                    "id_ejercicio" => $RequestHttp->Dia_4,
                    "id_dia" => 4,
                ];
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
                $rutinaEjercicioDia->save();
            }

            if ($RequestHttp->Dia_5 <> null) {
                $array = [
                    "id_rutina" => $rutina->id,
                    "id_ejercicio" => $RequestHttp->Dia_5,
                    "id_dia" => 5,
                ];
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
                $rutinaEjercicioDia->save();
            }
        }

        return $redirect->route('pro.rutinas.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $rutina = Rutina::findOrFail($id);
        $id_rutina = $id;
        //$rutinaejerciciodia = RutinaEjercicioDia::findOrFail($id_rutina);

        $rutinaejerciciodia = \DB::table('rutinaejerciciodia')
            ->select('*')
            ->where('id_rutina', '=', $id_rutina)
            ->get();

        $ejercicios = Ejercicio::paginate();

        return view('pro.rutinas.show',compact('rutina','rutinaejerciciodia','ejercicios'));
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

        if(""==$RequestHttp->nombre){
            return $redirect->back();
        }

        $rutina = Rutina::findOrFail($id);
        $rutina->fill(Request::all());
        //$rutina = new Rutina(Request::all());
        $rutina->save();

        if ($RequestHttp->Dia_1 <> null) {

            $id_rutina = $rutina->id;
            $id_ejercicio = $RequestHttp->Dia_1;
            $id_dia = 1;

            $rutinasejercicio = \DB::table('rutinaejerciciodia')
                ->select('id')
                ->where('id_rutina', '=', $id_rutina)
                ->where('id_dia', '=', $id_dia)
                ->get();

            $array = [
                "id_rutina" => $id_rutina,
                "id_ejercicio" => $id_ejercicio,
                "id_dia" => $id_dia
            ];

            if(!empty($rutinasejercicio)){
                $rutinaEjercicioDia = RutinaEjercicioDia::findOrFail($rutinasejercicio[0]->id);
                $rutinaEjercicioDia -> fill($array);
            }
            else{
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            }
            $rutinaEjercicioDia->save();

        }

        if ($RequestHttp->Dia_2 <> null) {

            $id_rutina = $rutina->id;
            $id_ejercicio = $RequestHttp->Dia_2;
            $id_dia = 2;

            $rutinasejercicio = \DB::table('rutinaejerciciodia')
                ->select('id')
                ->where('id_rutina', '=', $id_rutina)
                ->where('id_dia', '=', $id_dia)
                ->get();

            $array = [
                "id_rutina" => $id_rutina,
                "id_ejercicio" => $id_ejercicio,
                "id_dia" => $id_dia
            ];

            if(!empty($rutinasejercicio)){
                $rutinaEjercicioDia = RutinaEjercicioDia::findOrFail($rutinasejercicio[0]->id);
                $rutinaEjercicioDia -> fill($array);
            }
            else{
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            }
            $rutinaEjercicioDia->save();

        }

        if ($RequestHttp->Dia_3 <> null) {

            $id_rutina = $rutina->id;
            $id_ejercicio = $RequestHttp->Dia_3;
            $id_dia = 3;

            $rutinasejercicio = \DB::table('rutinaejerciciodia')
                ->select('id')
                ->where('id_rutina', '=', $id_rutina)
                ->where('id_dia', '=', $id_dia)
                ->get();

            $array = [
                "id_rutina" => $id_rutina,
                "id_ejercicio" => $id_ejercicio,
                "id_dia" => $id_dia
            ];

            if(!empty($rutinasejercicio)){
                $rutinaEjercicioDia = RutinaEjercicioDia::findOrFail($rutinasejercicio[0]->id);
                $rutinaEjercicioDia -> fill($array);
            }
            else{
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            }
            $rutinaEjercicioDia->save();

        }

        if ($RequestHttp->Dia_4 <> null) {

            $id_rutina = $rutina->id;
            $id_ejercicio = $RequestHttp->Dia_4;
            $id_dia = 4;

            $rutinasejercicio = \DB::table('rutinaejerciciodia')
                ->select('id')
                ->where('id_rutina', '=', $id_rutina)
                ->where('id_dia', '=', $id_dia)
                ->get();

            $array = [
                "id_rutina" => $id_rutina,
                "id_ejercicio" => $id_ejercicio,
                "id_dia" => $id_dia
            ];

            if(!empty($rutinasejercicio)){
                $rutinaEjercicioDia = RutinaEjercicioDia::findOrFail($rutinasejercicio[0]->id);
                $rutinaEjercicioDia -> fill($array);
            }
            else{
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            }
            $rutinaEjercicioDia->save();

        }

        if ($RequestHttp->Dia_5 <> null) {

            $id_rutina = $rutina->id;
            $id_ejercicio = $RequestHttp->Dia_5;
            $id_dia = 5;

            $rutinasejercicio = \DB::table('rutinaejerciciodia')
                ->select('id')
                ->where('id_rutina', '=', $id_rutina)
                ->where('id_dia', '=', $id_dia)
                ->get();

            $array = [
                "id_rutina" => $id_rutina,
                "id_ejercicio" => $id_ejercicio,
                "id_dia" => $id_dia
            ];

            if(!empty($rutinasejercicio)){
                $rutinaEjercicioDia = RutinaEjercicioDia::findOrFail($rutinasejercicio[0]->id);
                $rutinaEjercicioDia -> fill($array);
            }
            else{
                $rutinaEjercicioDia = new RutinaEjercicioDia($array);
            }
            $rutinaEjercicioDia->save();

        }

        return $redirect->route('pro.rutinas.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        //dd($id);
        Rutina::destroy($id);

        return redirect()->route('pro.rutinas.index');
	}

}
