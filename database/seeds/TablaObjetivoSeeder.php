<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;

class TablaObjetivoSeeder extends Seeder{

    public function run(){

        //$faker = Faker::create();
        //for( $i = 0; $i < 22; $i++){ }

        $id_deportista = \DB::table('deportista')
            ->select('id')
            ->where('cedula','=', '123456789')
            ->first();

        \DB::table('objetivo')->insert(array(
            'objetivo' => 'Quemar toda la grasa corporal y poder tonificarlo almismo tiempo',
            'id_deportista' => $id_deportista->id,

            'Created_At' => null,
            'Updated_At' => null
        ));


    }
}