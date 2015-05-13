<?php

use Illuminate\Database\Seeder;

class TablaDiaSeeder extends Seeder{

    public function run(){
        \DB::table('dia')->insert(array(
            'id'    => '1',
            'dia'   => 'lunes',
            'Created_At' => null,
            'Updated_At' => null
        ));
        \DB::table('dia')->insert(array(
            'id'    => '2',
            'dia'   => 'martes',
            'Created_At' => null,
            'Updated_At' => null
        ));
        \DB::table('dia')->insert(array(
            'id'    => '3',
            'dia'   => 'miercoles',
            'Created_At' => null,
            'Updated_At' => null
        ));
        \DB::table('dia')->insert(array(
            'id'    => '4',
            'dia'   => 'jueves',
            'Created_At' => null,
            'Updated_At' => null
        ));
        \DB::table('dia')->insert(array(
            'id'    => '5',
            'dia'   => 'viernes',
            'Created_At' => null,
            'Updated_At' => null
        ));
    }
}