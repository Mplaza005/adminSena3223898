<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
     public function pruebas(){

        // $aprendice = Apprentice::find(1);
        // return $aprendice->course;


        $teacher = Teacher::find(1);
        return $teacher->courses;


     }


}
