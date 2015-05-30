<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model {

    protected $table = 'perfilDeportista';
    protected $fillable = ['id_deportista'];

}
