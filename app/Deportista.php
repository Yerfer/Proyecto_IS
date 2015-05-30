<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Deportista extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'usuarios';
    //protected $table = 'deportista';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula', 'nombre','apellido','usuario','email','telefono','password','tipo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password','remember_token'];

    public function rutina(){
        return $this->hasOne('App\DeportistaRutina');
    }

    public function objetivo(){
        return $this->hasOne('App\Objetivo');
    }

    public function perfil(){
        return $this->hasOne('App\Perfil');
    }


}
