<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TablaDeportistaSeeder extends Seeder{

    public function run(){

        $faker = Faker::create();

        \DB::table('deportista')->insert(array(
            'cedula' => '123456789',
            'nombre' => 'Yérfer',
            'apellido' => 'Kage',
            'telefono' => '6000000',
            'email' => 'yerfer@gmail.com',
            'password' => \Hash::make('yerfer'),

            'Created_At' => null,
            'Updated_At' => null
        ));

        for( $i = 0; $i < 21; $i++){

            \DB::table('deportista')->insert(array(
                'cedula' => $faker->unique()->randomNumber(8),
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                'telefono' => $faker->numberBetween(6000000,7000000),
                'email' => $faker->unique()->freeEmail,
                'password' => \Hash::make('deportista'),

                'Created_At' => null,
                'Updated_At' => null
            ));
        }
    }
}