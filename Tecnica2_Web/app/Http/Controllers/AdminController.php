<?php

namespace App\Http\Controllers;
use App\Alumno;
use App\Establecimiento_procedencia;
use App\Responsable;
use App\InfoSalud;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function pre_alfabetico($anio = NULL){
        $responsables = Responsable::all('id_alumno');
        $info_salud = InfoSalud::all('id_alumno');


        if(!$anio){
            $collection = Alumno::all();
            $alumnos = $collection->sortBy('apell_e');
            return view('admin.listado_alf', compact('alumnos', 'responsables', 'info_salud'));
        }else{
            $collection = Alumno::all()->where('anio_insc', $anio);
            $alumnos = $collection->sortBy('apell_e');
            return view('admin.listado_alf', compact('alumnos', 'responsables', 'info_salud')); 
        }

    }

        

    public function preinscriptos(){
        $responsables = Responsable::all('id_alumno');
        $info_salud = InfoSalud::all('id_alumno');
        $alumnos = Alumno::all();
        $cont = 0;

        return view('admin.listado_preinscriptos', compact('alumnos', 'responsables', 'info_salud'));
    }

    public function preinscriptos_completo($id_alumno){
        $alumno = Alumno::where('id_alumno', $id_alumno)->firstOrFail();
        $responsables = Responsable::all()->where('id_alumno', $id_alumno);
        $info_salud = InfoSalud::all()->where('id_alumno', $id_alumno);
        $establecimiento_procedencia = Establecimiento_procedencia::all()->where('id_establecimiento', $alumno->id_establecimiento);
        

        return view('admin.listadocompleto', compact('alumno', 'responsables', 'info_salud', 'establecimiento_procedencia'));
    }

    public function preinscriptos_adicional($id_alumno){ 
        $alumno = Alumno::where('id_alumno', $id_alumno)->firstOrFail();
        $responsables = Responsable::where('id_alumno', $id_alumno)->firstOrFail();
        $info_salud = InfoSalud::where('id_alumno', $id_alumno)->firstOrFail();
        $establecimiento_procedencia = Establecimiento_procedencia::where('id_establecimiento', $alumno->id_establecimiento)->first();
        
            
        
        $inscripcion_completa = Array($alumno, $responsables, $info_salud, $establecimiento_procedencia);


        
        return view('admin.listadoadicional', compact('inscripcion_completa'));
    }
}
