<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class animal extends Model
{     
	  protected $table="animal";
      protected $fillable=['nombre_animal','descripcion_animal',
                           'tipo_animal_id','pais_origen','imagen_url'];


      
      public function tipo_animal(){

      	return $this->belongsTo('App\tipo_animal','tipo_animal_id');
      }

}
