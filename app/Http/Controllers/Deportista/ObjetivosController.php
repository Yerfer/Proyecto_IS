<?php namespace App\Http\Controllers\Deportista;

use App\Deportista;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Objetivo;
use Illuminate\Http\Request as RequestHttp;
use Illuminate\Routing\Redirector;

use Illuminate\Http\Request;

class ObjetivosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Redirector $redirect)
	{
        //echo "Index de Objetivos";
        return $redirect->route('depor.objetivos.create');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //echo "uadacs";
        $deportista = \DB::table('usuarios')
            ->select('*')
            ->where('id', '=', '1')
            ->get();

        //dd($deportista);

        return view('deportista.objetivos.create',compact('deportista'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RequestHttp $RequestHttp, Redirector $redirect)
	{
        if(""==$RequestHttp->objetivo){
            return $redirect->back();
        }

        $array = [
            "objetivo" => $RequestHttp->objetivo,
            "id_deportista" => $RequestHttp-> id_deportista
        ];

        //dd($array);

        $objetivo = new Objetivo($array);
        $objetivo->save();

        return $redirect->route('depor.objetivos.create');
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
