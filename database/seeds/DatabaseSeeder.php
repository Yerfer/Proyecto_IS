<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->call('TablaDeportistaSeeder');
		$this->call('TablaEjercicioSeeder');
        $this->call('TablaRutinaSeeder');
        $this->call('TablaDiaSeeder');
        $this->call('TablaDeportistaRutinaSeeder');
        $this->call('TablaRutinaEjercicioDiaSeeder');
        $this->call('TablaPerfilDeportistaSeeder');
        $this->call('TablaObjetivoSeeder');
	}

}
