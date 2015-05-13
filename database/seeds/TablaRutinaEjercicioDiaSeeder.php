<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;

class TablaRutinaEjercicioDiaSeeder extends Seeder{

    public function run(){
        //$faker = Faker::create();
        //for( $i = 0; $i < 22; $i++){ }
        $id_rutina = \DB::table('rutina')
            ->select('id')
            ->where('nombre','=', 'Quemar Grasa')
            ->first();

        $id_ejercicio = \DB::table('ejercicio')
            ->select('id')
            ->where('nombre','=', 'Cardio Nivel I')
            ->first();

        $id_dia = \DB::table('dia')
            ->select('id')
            ->where('dia','=', 'lunes')
            ->first();

        \DB::table('rutinaejerciciodia')->insert(array(
            'id_rutina' => $id_rutina->id,
            'id_ejercicio' => $id_ejercicio->id,
            'id_dia' => $id_dia->id,

            'Created_At' => null,
            'Updated_At' => null
        ));

        $id_ejercicio = \DB::table('ejercicio')
            ->select('id')
            ->where('nombre','=', 'Cardio Extremo Nivel I')
            ->first();

        $id_dia = \DB::table('dia')
            ->select('id')
            ->where('dia','=', 'martes')
            ->first();

        \DB::table('rutinaejerciciodia')->insert(array(
            'id_rutina' => $id_rutina->id,
            'id_ejercicio' => $id_ejercicio->id,
            'id_dia' => $id_dia->id,

            'Created_At' => null,
            'Updated_At' => null
        ));



        $id_ejercicio = \DB::table('ejercicio')
            ->select('id')
            ->where('nombre','=', 'Cardio Nivel I')
            ->first();

        $id_dia = \DB::table('dia')
            ->select('id')
            ->where('dia','=', 'miercoles')
            ->first();

        \DB::table('rutinaejerciciodia')->insert(array(
            'id_rutina' => $id_rutina->id,
            'id_ejercicio' => $id_ejercicio->id,
            'id_dia' => $id_dia->id,

            'Created_At' => null,
            'Updated_At' => null
        ));

        $id_ejercicio = \DB::table('ejercicio')
            ->select('id')
            ->where('nombre','=', 'Biceps Nivel I')
            ->first();

        $id_dia = \DB::table('dia')
            ->select('id')
            ->where('dia','=', 'jueves')
            ->first();

        \DB::table('rutinaejerciciodia')->insert(array(
            'id_rutina' => $id_rutina->id,
            'id_ejercicio' => $id_ejercicio->id,
            'id_dia' => $id_dia->id,

            'Created_At' => null,
            'Updated_At' => null
        ));

        $id_ejercicio = \DB::table('ejercicio')
            ->select('id')
            ->where('nombre','=', 'Biceps Nivel I')
            ->first();

        $id_dia = \DB::table('dia')
            ->select('id')
            ->where('dia','=', 'viernes')
            ->first();

        \DB::table('rutinaejerciciodia')->insert(array(
            'id_rutina' => $id_rutina->id,
            'id_ejercicio' => $id_ejercicio->id,
            'id_dia' => $id_dia->id,

            'Created_At' => null,
            'Updated_At' => null
        ));

    }
}