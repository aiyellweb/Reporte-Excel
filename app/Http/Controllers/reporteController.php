<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// modelo
use App\animal;
// llamada del paquete 
use Maatwebsite\Excel\Facades\Excel;


class reporteController extends Controller
{
      

      public function animal($id){
        
         $animal= animal::with('tipo_animal')->where('id',$id);

         $nombreArchivo=  date('Y-m-d')."Reporte";

        Excel::create($nombreArchivo, function($excel) use ($nombreArchivo,$animal) {

         	$excel->sheet('New sheet', function($sheet) use ($nombreArchivo,$animal) {
        		 
         		$sheet->loadView('animal.show',['animal'=>$animal]);
                   
         	  })->export('xls');
         });

         

         

      }

   

         

         

     





}
