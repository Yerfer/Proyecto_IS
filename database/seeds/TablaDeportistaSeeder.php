<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TablaDeportistaSeeder extends Seeder{

    public function run(){

        $faker = Faker::create();

        \DB::table('usuarios')->insert(array(
            'cedula'    =>  '123456789',
            'nombre'    =>  'Pepito',
            'apellido'  =>  'Perez',
            'usuario'   =>  'Pepe',
            'telefono'  =>  '6000000',
            'email'     =>  'pp@gmail.com',
            'password'  =>  \Hash::make('admin9090'),
            'tipo'      =>  'admin',

            'Created_At' => null,
            'Updated_At' => null
        ));

        for( $i = 0; $i <15; $i++){

            \DB::table('usuarios')->insert(array(
                'cedula'    =>  $faker->unique()->randomNumber(8),
                'nombre'    =>  $faker->firstName,
                'apellido'  =>  $faker->lastName,
                'usuario'   =>  $faker->unique()->userName,
                'telefono'  =>  $faker->numberBetween(6000000,7000000),
                'email'     =>  $faker->unique()->freeEmail,
                'password'  =>  \Hash::make('user1234'),
                'tipo'      =>  'deportista',

                'Created_At' => null,
                'Updated_At' => null
            ));
        }

        for( $i = 0; $i < 4; $i++){

            \DB::table('usuarios')->insert(array(
                'cedula'    =>  $faker->unique()->randomNumber(8),
                'nombre'    =>  $faker->firstName,
                'apellido'  =>  $faker->lastName,
                'usuario'   =>  $faker->unique()->userName,
                'telefono'  =>  $faker->numberBetween(6000000,7000000),
                'email'     =>  $faker->unique()->freeEmail,
                'password'  =>  \Hash::make('pro246'),
                'tipo'      =>  'entrenador',

                'Created_At' => null,
                'Updated_At' => null
            ));
        }
    }
}