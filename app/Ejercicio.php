<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Ejercicio extends Model{
	protected $table = 'ejercicio';
	//protected $fillable = ['nombre','tiempo','repeticiones','series','peso','categoria','descripcion'];
    protected $fillable = ['nombre','tiempo','repeticiones','series','peso','descripcion'];
    protected $hidden = [];

    public function rutinaDia(){
        return $this->hasOne('App\RutinaEjercicioDia');
    }
}