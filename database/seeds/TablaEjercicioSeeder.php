<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;

class TablaEjercicioSeeder extends Seeder{

    public function run(){
        //$faker = Faker::create();
        //for( $i = 0; $i < 22; $i++){
        //}
        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Cardio Nivel I',
            'tiempo' => '30 mins',
            'repeticiones' => null,
            'series' => null,
            'peso' => null,

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Cardio Nivel II',
            'tiempo' => '40 mins',
            'repeticiones' => null,
            'series' => null,
            'peso' => null,

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Cardio Nivel III',
            'tiempo' => '60 mins',
            'repeticiones' => null,
            'series' => null,
            'peso' => null,

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Cardio Extremo Nivel I',
            'tiempo' => '30 mins',
            'repeticiones' => null,
            'series' => null,
            'peso' => null,

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Cardio Extremo Nivel II',
            'tiempo' => '40 mins',
            'repeticiones' => null,
            'series' => null,
            'peso' => null,

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Cardio Extremo Nivel III',
            'tiempo' => '60 mins',
            'repeticiones' => null,
            'series' => null,
            'peso' => null,

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Biceps Nivel I',
            'tiempo' => null,
            'repeticiones' => '30',
            'series' => '3',
            'peso' => '25 Kg',

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Biceps Nivel II',
            'tiempo' => null,
            'repeticiones' => '40',
            'series' => '3',
            'peso' => '25 Kg',

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Biceps Nivel III',
            'tiempo' => null,
            'repeticiones' => '60',
            'series' => '3',
            'peso' => '25 Kg',

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Aumento Biceps Nivel I',
            'tiempo' => null,
            'repeticiones' => '30',
            'series' => '3',
            'peso' => '40 Kg',

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Aumento Biceps Nivel II',
            'tiempo' => null,
            'repeticiones' => '40',
            'series' => '3',
            'peso' => '40 Kg',

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Aumento Biceps Nivel III',
            'tiempo' => null,
            'repeticiones' => '60',
            'series' => '3',
            'peso' => '40 Kg',

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Biceps Sobre Naturales Nivel I',
            'tiempo' => null,
            'repeticiones' => '30',
            'series' => '3',
            'peso' => '80 Kg',

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Biceps Sobre Naturales Nivel II',
            'tiempo' => null,
            'repeticiones' => '40',
            'series' => '3',
            'peso' => '80 Kg',

            'Created_At' => null,
            'Updated_At' => null
        ));

        \DB::table('ejercicio')->insert(array(
            'nombre' => 'Biceps Sobre Naturales Nivel III',
            'tiempo' => null,
            'repeticiones' => '60',
            'series' => '3',
            'peso' => '80 Kg',

            'Created_At' => null,
            'Updated_At' => null
        ));
    }

}