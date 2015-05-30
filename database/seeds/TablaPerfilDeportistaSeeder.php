<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TablaPerfilDeportistaSeeder extends Seeder{

    public function run(){

        $faker = Faker::create();

        $id_deportista = \DB::table('usuarios')
            ->select('id','telefono')
            ->where('tipo','=', 'deportista')
            ->first();

        \DB::table('perfilDeportista')->insert(array(
            'id_deportista' =>  $id_deportista->id,
            'telefono'      =>  $id_deportista->telefono,
            'direccion'     =>  'Universidad de los Llanos',
            'peso'          =>  77,
            'altura'        =>  180,
            'presion'       =>  124,
            'genero'        => 'masculino',

            'Created_At' => null,
            'Updated_At' => null
        ));



    }
}