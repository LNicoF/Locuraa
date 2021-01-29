<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Alumno;
use App\Establecimiento_procedencia;
use App\Responsable;
use App\InfoSalud;
use App\Mail\EmailPrueba;

class AlumnoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all()->where('id_user', Auth::user()->id);
        
        return view('alumno.index', [
            'alumnos' => $alumnos->sortBy('anio_insc'),
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno/create/alumno');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $exception = 0)
    {
        if($exception){
            // return $request;
            $alumno_id = $request->alumno_id;
            return view('alumno.create.salud', ['alumno_id' => $alumno_id]);
        }

        $create_forms = [
            'alumno.create.responsables',
            'alumno.create.salud',
            'alumno.create.final',
        ];

        $alumno_id;

        /**
        $request->validate([
            # First Form
            'nro_esc' => 'min:0',
            'tec_insc' => 'required',
            'anio_insc' => 'required',
            'tur_insc' => 'required',
            'cond_insc' => 'required',
            'pase_insc' => 'required',
            'inte_insc' => 'required',
            'apell_e' => 'required',
            'nomb_e' => 'required',
            'sexo_e' => 'required',
            'bir_dat_e' => 'required',
            'bir_pla_e' => 'required',
            'nac_e' => 'required',
            'dom_calle_e' => 'required',
            'dom_nro_e' => 'required',
            'dom_entre_e' => 'required',
            'prov_e' => 'required',
            'dist_e' => 'required',
            'loc_e' => 'required',
            'post_e' => 'required',
            'telefocelular_e' => 'required',
            'her_tie_e' => 'required',
            'hog_hab_e' => 'required',
            'hog_can_e' => 'required',
            'ayuda_e' => 'required',
            'obras_e' => 'required',
            'prog_e' => 'required',

            # Second Form
            'tienenenfermedad_est' => 'required',
            'fueinternado_ultimos3años_est' => 'required',
            'tienealguntipo_alergia_est' => 'required',
            'recibe_tratamientopermanente_est' => 'required',
            'recibio_tratamientoquirurgico_est' => 'required',
            'presentalimitacion_fisica_est' => 'required',
            'calendariovacunas_est' => 'required',
            'talla_est' => 'min:0|max:300|required',
            'peso_est' => 'min:0|max:500|required',
            'fechadeterminacion_est' => 'required',
            'familiar_apellido' => 'required',
            'familiar_nombre' => 'required',
            'familiar_domicilio' => 'required',
            'familiar_telefono' => 'required',



            # Third Form
            'apell_mad' => 'required',
            'nomb_mad' => 'required',
            'naciona_mad' => 'required',
            'asistioeducacion_mad' => 'required',
            'nivelaltocursado_mad' => 'required',
            'completoniv_mad' => 'required',
            'vive_mad' => 'required',

            'apell_pad' => 'required',
            'nomb_pad' => 'required',
            'naciona_pad' => 'required',
            'asistioeducacion_pad' => 'required',
            'nivelaltocursado_pad' => 'required',
            'completoniv_pad' => 'required',
            'vive_pad' => 'required'

        ]);
        /**/

        if ($request->form_section == '0') # PRIMER FORM: ALUMNO
        {
            $request->validate([
                'nro_esc' => 'min:0|max:999999',
                'tec_insc' => 'required',
                'anio_insc' => 'required',
                'tur_insc' => 'required',
                'cond_insc' => 'required',
                'pase_insc' => 'required',
                'inte_insc' => 'required',
                'nrodocument_e' => 'min:0|max:999999999999999',
                'apell_e' => 'required',
                'nomb_e' => 'required',
                'sexo_e' => 'required',
                'bir_dat_e' => 'required',
                'bir_pla_e' => 'required',
                'nac_e' => 'required',
                'dom_calle_e' => 'required',
                'dom_nro_e' => 'required|min:0|max:99999',
                'dom_piso_e' => 'min:-200|max:200',
                'dom_entre_e' => 'required',
                'prov_e' => 'required',
                'dist_e' => 'required',
                'loc_e' => 'required',
                'post_e' => 'required|min:-99999|max:99999',
                'telefocelular_fam' => 'required',
                'her_tie_e' => 'required',
                'her_can_e' => 'min:0|max:200',
                'her_este_e' => 'min:0|max:200',
                'hog_can_e' => 'required|min:0|max:200',
                'hog_hab_e' => 'required|min:0|max:500',
                'ayuda_e' => 'required',
                'obras_e' => 'required',
                'prog_e' => 'required',
            ]);

            
            if ($request->claveprovi_esc == NULL && $request->CUE_esc == NULL && $request->nivel_esc == NULL ){
                $est = NULL;
            }
            else{
                $request->validate([
                    'claveprovi_esc' => 'required',
                    'CUE_esc' => 'required',
                    'nivel_esc' => 'required',
                    'nomb_esc' => 'required',
                    'nro_esc' => 'required',
                    'dir_esc' => 'required',
                    'loc_esc' => 'required',
                    'dist_esc' => 'required',
                    'prov_esc' => 'required',
                    'pais_esc' => 'required',
                    'gest_esc' => 'required',
                ]);

                $est = Establecimiento_procedencia::create([
                    'claveprovi_esc' => $request->claveprovi_esc,
                    'CUE_esc' => $request->CUE_esc,
                    'nivel_esc' => $request->nivel_esc,
                    'nomb_esc' => $request->nomb_esc,
                    'nro_esc' => $request->nro_esc,
                    'dir_esc' => $request->dir_esc,
                    'loc_esc' => $request->loc_esc,
                    'dist_esc' => $request->dist_esc,
                    'prov_esc' => $request->prov_esc,
                    'pais_esc' => $request->pais_esc,
                    'gest_esc' => $request->gest_esc,
                ]);
            }

            $alumno = Alumno::create([
                'id_user' => Auth::user()->id,
                'tec_insc' => $request->tec_insc,
                'anio_insc' => $request->anio_insc,
                'especialidad_insc' => $request->especialidad_insc,
                'tur_insc' => $request->tur_insc,
                'cond_insc' => $request->cond_insc,
                'pase_insc' => $request->pase_insc,
                'inte_insc' => $request->inte_insc,
                'id_establecimiento' => ($est == NULL) ? NULL : $est->id,
                'tipdocument_e' => $request->tipdocument_e,
                'nrodocument_e' => $request->nrodocument_e,
                'estadodocumento_e' => $request->estadodocumento_e,
                'apell_e' => $request->apell_e,
                'nomb_e' => $request->nomb_e,
                'sexo_e' => $request->sexo_e,
                'bir_dat_e' => $request->bir_dat_e,
                'bir_pla_e' => $request->bir_pla_e,
                'nac_e' => $request->nac_e,
                'dom_calle_e' => $request->dom_calle_e,
                'dom_nro_e' => $request->dom_nro_e,
                'dom_piso_e' => $request->dom_piso_e,
                'dom_torre_e' => $request->dom_torre_e,
                'dom_dept_e' => $request->dom_dept_e,
                'dom_entre_e' => $request->dom_entre_e,
                'dom_otro_e' => $request->dom_otro_e,
                'prov_e' => $request->prov_e,
                'dist_e' => $request->dist_e,
                'loc_e' => $request->loc_e,
                'codpost_e' => $request->post_e,
                'telefo_fam' => $request->telefo_fam,
                'telefocelular_fam' => $request->telefocelular_fam,
                'her_tie_e' => $request->her_tie_e,
                'her_can_e' => $request->her_can_e,
                'her_este_e' => $request->her_este_e,
                'hog_can_e' => $request->hog_can_e,
                'hog_hab_e' => $request->hog_hab_e,
                'hog_leng_e' => $request->hog_leng_e,
                'ayuda_e' => $request->ayuda_e,
                'obras_e' => $request->obras_e,
                'prog_e' => $request->prog_e,
                'prog_auh_e' => $request->prog_auh_e,
                'prog_beca_ex_e' => $request->prog_beca_ex_e,
                'prog_progr_e' => $request->prog_progr_e,
                'prog_otros_e' => $request->prog_otros_e,
                'prog_beca_jud_e' => $request->prog_beca_jud_e,
                'trans_pie_e' => $request->trans_pie_e,
                'trans_omni_e' => $request->trans_omni_e,
                'trans_auto_e' => $request->trans_auto_e,
                'trans_taxi_e' => $request->trans_taxi_e,
                'trans_otro_e' => $request->trans_otro_e,
                'hijo_e' => $request->hijo_e,
                'hijo_proy_e' => $request->hijo_proy_e,
                
            ]);

            $alumno_id = $alumno->id;
        }
        else if ($request->form_section == '1') # SEGUNDO FORM: RESPONSABLES
        { 
            $request->validate([
                //Mom
                'apell_mad' => 'required',
                'nomb_mad' => 'required',
                'naciona_mad' => 'required',
                'asistioeducacion_mad' => 'required',
                'nivelaltocursado_mad' => 'required',
                'completoniv_mad' => 'required',
                'vive_mad' => 'required',
                'nrodocument_mad' => 'min:0|max:999999999999999',
                'callenro_mad' => 'min:0|max:99999',
                'piso_mad' => 'min:-200|max:200',
                'codpostal_mad' => 'min:-99999|max:99999',
                
                //Dad
                'apell_pad' => 'required',
                'nomb_pad' => 'required',
                'naciona_pad' => 'required',
                'asistioeducacion_pad' => 'required',
                'nivelaltocursado_pad' => 'required',
                'completoniv_pad' => 'required',
                'vive_pad' => 'required',
                'nrodocument_pad' => 'min:0|max:999999999999999',
                'callenro_pad' => 'min:0|max:99999',
                'piso_pad' => 'min:-200|max:200',
                'codpostal_pad' => 'min:-99999|max:99999',

                //Tut
                'nrodocument_tut' => 'min:0|max:999999999999999',
                'callenro_tut' => 'min:0|max:99999',
                'piso_tut' => 'min:-200|max:200',
                'codpostal_tut' => 'min:-99999|max:99999',

                //------------------------------------------------
                'nro_document_ret' => 'min:0|max:999999999999999',
                'B_nro_document_ret' => 'min:0|max:999999999999999',

                'nro_document_restricionjudicial' => 'min:0|max:999999999999999',
            ]);

            $alumno_id = $request->alumno_id;
            $nombrealumno_relacionado = $request->alumno_id;

            $data = $request->all();

            $data['nombrealumno_relacionado'] = 'uncomplete'; // Completar

            Responsable::create([
                //$data
                'id_alumno' => $alumno_id,
                'apell_mad' => $request->apell_mad,
                'nomb_mad' => $request->nomb_mad,
                'naciona_mad' => $request->naciona_mad,
                'asistioeducacion_mad' => $request->asistioeducacion_mad,
                'nivelaltocursado_mad' => $request->nivelaltocursado_mad,
                'completoniv_mad' => $request->completoniv_mad,
                'vive_mad' => $request->vive_mad,
                'tipdocument_mad' => $request->tipdocument_mad,
                'nrodocument_mad' => $request->nrodocument_mad,
                'estadodocumento_mad' => $request->estadodocumento_mad,
                'callenombre_mad' => $request->callenombre_mad,
                'callenro_mad' => $request->callenro_mad,
                'piso_mad' => $request->piso_mad,
                'torre_mad' => $request->torre_mad,
                'dpto_mad' => $request->dpto_mad,
                'provincia_mad' => $request->provincia_mad,
                'distrito_mad' => $request->distrito_mad,
                'localidad_mad' => $request->localidad_mad,
                'codpostal_mad' => $request->codpostal_mad,
                'telefono_mad' => $request->telefono_mad,
                'telefonocelular_mad' => $request->telefonocelular_mad,
                'email_mad' => $request->email_mad,
                'jefehogar_mad' => $request->jefehogar_mad,
                'profesion_mad' => $request->profesion_mad,
                'condicionactividad_mad' => $request->condicionactividad_mad,

                'apell_pad' => $request->apell_pad,
                'nomb_pad' => $request->nomb_pad,
                'naciona_pad' => $request->naciona_pad,
                'asistioeducacion_pad' => $request->asistioeducacion_pad,
                'nivelaltocursado_pad' => $request->nivelaltocursado_pad,
                'completoniv_pad' => $request->completoniv_pad,
                'vive_pad' => $request->vive_pad,
                'tipdocument_pad' => $request->tipdocument_pad,
                'nrodocument_pad' => $request->nrodocument_pad,
                'estadodocumento_pad' => $request->estadodocumento_pad,
                'callenombre_pad' => $request->callenombre_pad,
                'callenro_pad' => $request->callenro_pad,
                'piso_pad' => $request->piso_pad,
                'torre_pad' => $request->torre_pad,
                'dpto_pad' => $request->dpto_pad,
                'provincia_pad' => $request->provincia_pad,
                'distrito_pad' => $request->distrito_pad,
                'localidad_pad' => $request->localidad_pad,
                'codpostal_pad' => $request->codpostal_pad,
                'telefono_pad' => $request->telefono_pad,
                'telefonocelular_pad' => $request->telefonocelular_pad,
                'email_pad' => $request->email_pad,
                'jefehogar_pad' => $request->jefehogar_pad,
                'profesion_pad' => $request->profesion_pad,
                'condicionactividad_pad' => $request->condicionactividad_pad,

                'apell_tut' => $request->apell_tut,
                'nomb_tut' => $request->nomb_tut,
                'naciona_tut' => $request->naciona_tut,
                'asistioeducacion_tut' => $request->asistioeducacion_tut,
                'nivelaltocursado_tut' => $request->nivelaltocursado_tut,
                'completoniv_tut' => $request->completoniv_tut,
                'tipdocument_tut' => $request->tipdocument_tut,
                'nrodocument_tut' => $request->nrodocument_tut,
                'estadodocumento_tut' => $request->estadodocumento_tut,
                'callenombre_tut' => $request->callenombre_tut,
                'callenro_tut' => $request->callenro_tut,
                'piso_tut' => $request->piso_tut,
                'torre_tut' => $request->torre_tut,
                'dpto_tut' => $request->dpto_tut,
                'provincia_tut' => $request->provincia_tut,
                'distrito_tut' => $request->distrito_tut,
                'localidad_tut' => $request->localidad_tut,
                'codpostal_tut' => $request->codpostal_tut,
                'telefono_tut' => $request->telefono_tut,
                'telefonocelular_tut' => $request->telefonocelular_tut,
                'email_tut' => $request->email_tut,
                'jefehogar_tut' => $request->jefehogar_tut,
                'profesion_tut' => $request->profesion_tut,
                'condicionactividad_tut' => $request->condicionactividad_tut,

                'apelli_ret' => $request->apelli_ret,
                'nombre_ret' => $request->nombre_ret,
                'tip_document_ret' => $request->tip_document_ret,
                'nro_document_ret' => $request->nro_document_ret,
                'vinculo_alumno' => $request->vinculo_alumno,

                'B_apelli_ret' => $request->B_apelli_ret,
                'B_nombre_ret' => $request->B_nombre_ret,
                'B_tip_document_ret' => $request->B_tip_document_ret,
                'B_nro_document_ret' => $request->B_nro_document_ret,
                'B_vinculo_alumno' => $request->B_vinculo_alumno,

                'apellido_restricionjudicial' => $request->apellido_restricionjudicial,
                'nombre_restricionjudicial' => $request->nombre_restricionjudicial,
                'tip_document_restricionjudicial' => $request->tip_document_restricionjudicial,
                'nro_document_restricionjudicial' => $request->nro_document_restricionjudicial,
                'restriccion' => $request->restriccion,


            ]);
        }

        else # TERCER FORM: SALUD
        {
            $request->validate([
                'N_afiliado_est' => 'min:-999999999999999|max:999999999999999',
                'tienenenfermedad_est' => 'required',
                'fueinternado_ultimos3años_est' => 'required',
                'tienealguntipo_alergia_est' => 'required',
                'recibe_tratamientopermanente_est' => 'required',
                'recibe_tratamientomedico_est' => 'required',
                'recibio_tratamientoquirurgico_est' => 'required',
                'edad_tratamientoquirurgico' => 'min:0|max:99',
                'presentalimitacion_fisica_est' => 'required',
                'calendariovacunas_est' => 'required',
                'talla_est' => 'required|min:0|max:500',
                'peso_est' => 'required|min:0|max:500',
                'fechadeterminacion_est' => 'required',
                'familiar_apellido' => 'required',
                'familiar_nombre' => 'required',
                'familiar_domicilio' => 'required',
                'familiar_telefono' => 'required',

            ]);

            $alumno_id = $request->alumno_id;
            
            InfoSalud::create([
                'id_alumno' =>  $alumno_id,
                'obrasocial_est' => $request->obrasocial_est,
    			'N_afiliado_est' => $request->N_afiliado_est,
    			'tienenenfermedad_est' => $request->tienenenfermedad_est,
    			'cualenfermedad_est' => $request->cualenfermedad_est,
    			'fueinternado_ultimos3años_est' => $request->fueinternado_ultimos3años_est,
    			'porquefueinternado_est' => $request->porquefueinternado_est,
	    		'tienealguntipo_alergia_est' => $request->tienealguntipo_alergia_est,
		    	'manifestacionesalergia_est' => $request->manifestacionesalergia_est,
                'alergia_sedebe_est' => $request->alergia_sedebe_est,
                'alergia_nosabe_est' => $request->alergia_nosabe_est,
    			'recibe_tratamientopermanente_est' => $request->recibe_tratamientopermanente_est,
	    		'recibe_tratamientomedico_est' => $request->recibe_tratamientomedico_est,
	    		'especifique_tratamiento_est' => $request->especifique_tratamiento_est,
	    		'recibio_tratamientoquirurgico_est' => $request->recibio_tratamientoquirurgico_est,
	    		'edad_tratamientoquirurgico' => $request->edad_tratamientoquirurgico,
	    		'tipocirugia_est' => $request->tipocirugia_est,
	    		'presentalimitacion_fisica_est' => $request->presentalimitacion_fisica_est,
	    		'aclaralimitación_fisica_est' => $request->aclaralimitación_fisica_est,
	    		'otroproblemad_salud_est' => $request->otroproblemad_salud_est,
	    		'calendariovacunas_est' => $request->calendariovacunas_est,
	    		'talla_est' => $request->talla_est,
	    		'peso_est' => $request->peso_est,
	    		'fechadeterminacion_est' => $request->fechadeterminacion_est,
	    		'recurrir_institucion_est' => $request->recurrir_institucion_est,
	    		'recurrir_domicilio_est' => $request->recurrir_domicilio_est,
	    		'recurrir_telefono_est' => $request->recurrir_telefono_est,
	    		'medico_apellido' => $request->medico_apellido,
	    		'medico_nombre' => $request->medico_nombre,
	    		'medico_domicilio' => $request->medico_domicilio,
	    		'medico_telefono' => $request->medico_telefono,
	    		'familiar_apellido' => $request->familiar_apellido,
	    		'familiar_nombre' => $request->familiar_nombre,
	    		'familiar_domicilio' => $request->familiar_domicilio,
	    		'familiar_telefono' => $request->familiar_telefono,
	    		'fecha_actualizacion_est' => $request->fecha_actualizacion_est,
	    		'actualizacion_anual_est' => $request->actualizacion_anual_est,
	    		'actualizacion_cambios_est' => $request->actualizacion_cambios_est,
	    		'actualizacioncambios_describa_est' => $request->actualizacioncambios_describa_est,
	    		'B_fecha_actualizacion_est' => $request->B_fecha_actualizacion_est,
	    		'B_actualizacion_anual_est' => $request->B_actualizacion_anual_est,
	    		'B_actualizacion_cambios_est' => $request->B_actualizacion_cambios_est,
	    		'B_actualizacioncambios_describa_est' => $request->B_actualizacioncambios_describa_est,
	    		'C_fecha_actualizacion_est' => $request->C_fecha_actualizacion_est,
	    		'C_actualizacion_anual_est' => $request->C_actualizacion_anual_est,
	    		'C_actualizacion_cambios_est' => $request->C_actualizacion_cambios_est,
	    		'C_actualizacioncambios_describa_est' => $request->C_actualizacioncambios_describa_est,
            ]);
        }

        return view($create_forms[(int)$request->form_section], ['alumno_id' => $alumno_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::where('id_alumno', $id)->firstOrFail();
        // $est_proc = NULL;
        $est_proc = Establecimiento_procedencia::where('id_establecimiento', $alumno->id_establecimiento)->first();

        return view('alumno.edit', [
            'alumno' => $alumno,
            'establecimiento_procedencia' => $est_proc,
            'responsables' => Responsable::where('id_alumno', $id)->firstOrFail(),
            'info_salud' => InfoSalud::where('id_alumno', $id)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno = Alumno::where('id_alumno', $id)->firstOrFail();
        $establecimiento_procedencia = Establecimiento_procedencia::where('id_establecimiento', $alumno->id_establecimiento)->first();
        $responsables = Responsable::where('id_alumno', $id)->firstOrFail();
        $info_salud = InfoSalud::where('id_alumno', $id)->firstOrFail();

        $alumno->update($request->all());
        $responsables->update($request->all());
        $info_salud->update($request->all());

        if ( !($request->claveprovi_esc == NULL && $request->CUE_esc == NULL && $request->nivel_esc == NULL) )
        {
            $request->validate([
                'claveprovi_esc' => 'required',
                'CUE_esc' => 'required',
                'nivel_esc' => 'required',
                'nomb_esc' => 'required',
                'nro_esc' => 'required',
                'dir_esc' => 'required',
                'loc_esc' => 'required',
                'dist_esc' => 'required',
                'prov_esc' => 'required',
                'pais_esc' => 'required',
                'gest_esc' => 'required',
            ]);

            $establecimiento_procedencia->update([
                'claveprovi_esc' => $request->claveprovi_esc,
                'CUE_esc' => $request->CUE_esc,
                'nivel_esc' => $request->nivel_esc,
                'nomb_esc' => $request->nomb_esc,
                'nro_esc' => $request->nro_esc,
                'dir_esc' => $request->dir_esc,
                'loc_esc' => $request->loc_esc,
                'dist_esc' => $request->dist_esc,
                'prov_esc' => $request->prov_esc,
                'pais_esc' => $request->pais_esc,
                'gest_esc' => $request->gest_esc,
            ]);
        }
        $establecimiento_procedencia->update($request->all());

        return redirect()->route('alumno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::where('id_alumno', $id)->firstOrFail();
        $responsables = Responsable::where('id_alumno', $id)->firstOrFail();
        $info_salud = InfoSalud::where('id_alumno', $id)->firstOrFail();


        $info_salud->delete();
        $responsables->delete();
        $alumno->delete();

        return redirect()->route('alumno.index');
    }


    public function pdf($id)
    {

    }
}
