<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;

class TablaDeportistaRutinaSeeder extends Seeder{

    public function run(){

        //$faker = Faker::create();
        //for( $i = 0; $i < 22; $i++){ }

        $id_deportista = \DB::table('deportista')
            ->select('id')
            ->where('cedula','=', '123456789')
            ->first();

        $id_rutina = \DB::table('rutina')
            ->select('id')
            ->where('nombre','=', 'Quemar Grasa')
            ->first();

        \DB::table('deportistarutina')->insert(array(
            'id_deportista' => $id_deportista->id,
            'id_rutina' => $id_rutina->id,

            'Created_At' => null,
            'Updated_At' => null
        ));

    }
}