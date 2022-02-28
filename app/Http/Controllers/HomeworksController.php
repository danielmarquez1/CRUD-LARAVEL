<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework;

class HomeworksController extends Controller
{
    
    /**
     * index para mostrar todos los homework
     * store para guardar un homework
     * update para actualizar un homework
     * edit para mostar el formulario de edicion
     */

     //Request sirve para obtener la informacion del formulario
     public function store(Request $request){
        
        //Validar los campos que esta recibiendo
        $request->validate([
            'title' => 'required|min:3'
        ]);

        //Insercion hacia la base de datos
        $homework = new Homework;
        $homework->title = $request->title; //Request->title es lo que obtiene del formulario
        $homework->save(); //Guardamos los datos hacia la base de datos.
        return redirect()->route('addtask')->with('success' , 'Tarea craada correctamente');
        //Debemos crear la ruta en web una vez terminado. para ver la accion

     }


     public function index()
    {
        $homeworks = Homework::all();
        return view('layout.index' ,  ['homeworks' => $homeworks]);
    }


}
