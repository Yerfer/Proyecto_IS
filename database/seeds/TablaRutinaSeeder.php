<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;

class TablaRutinaSeeder extends Seeder{

    public function run(){

        //$faker = Faker::create();

        //for( $i = 0; $i < 22; $i++){

        \DB::table('rutina')->insert(array(
            'nombre' => 'Quemar Grasa',
            'descripcion' => 'Rutina especializada en la quema de la grasa corporal',

            'Created_At' => null,
            'Updated_At' => null
        ));
        //}
    }
}