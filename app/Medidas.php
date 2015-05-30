<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Medidas extends Model {

    protected $table = 'medidas';
    protected $fillable = ['biceps','hombros','pecho','cuadriceps','pantorrilla'];

}
