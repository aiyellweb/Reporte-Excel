<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_animal extends Model
{
    
    protected $table="tipo_animal";
    protected $fillable=['nombre','descripcion'];



    public function animal(){
    	return $this->hasMany('App\animal');
    }

    
}
