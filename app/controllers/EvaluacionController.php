<?php

 
class EvaluacionController extends BaseController 
{
	
	protected $layout = 'layout.evaluacion';

	public function getIndex()
	{
		if (Session::has('nombreuser'))
		{
			$Dpacientes=Paciente::join("promotor","paciente.promotor_id","=","promotor.id_pro") 
				->join("comunidad","promotor.comunidad_id","=","comunidad.id_co")
				->join("medicion","paciente.id_codigo","=","medicion.medida")
				->join("evaluacion","medicion.EVALUACION_ID","=","evaluacion.id_eva")
				->select(DB::raw('evaluacion.ID_EVA, paciente.NACIMIENTO, paciente.SEXO, paciente.ID_CODIGO, paciente.NOMBRE, comunidad.DESCRIPCION, promotor.PRO_NOMBRE, count(*) as CANTIDAD, paciente.CREATE_AT'))
				->where("evaluacion","=","3M")
				->whereOr("evaluacion","=","3A")
    			->groupBy('paciente.ID_CODIGO')
    			->having("CANTIDAD",">","0")
    			->orderBy("paciente.id","ASC")
    			->paginate(16);

    		$ConEvala = Paciente::join("medicion","paciente.id_codigo","=","medicion.medida")
    			->select(DB::raw('paciente.ID_CODIGO, count(*) as CANTIDAD'))
				->groupBy("paciente.ID_CODIGO")
				->havingRaw('count(*) > 0')
				->get();

			return  $this->layout->content = View::make('evaluacionindex', compact("Dpacientes" , "ConEvala"));

		}
		return  Redirect::to('/login');
	}

	public function getInformacion($id=null)
	{
		if (Session::has('nombreuser'))
		{
			$Devala=Paciente::join("promotor","paciente.promotor_id","=","promotor.id_pro") 
				->join("comunidad","promotor.comunidad_id","=","comunidad.id_co")
				->join("celular","promotor.celular_id","=","celular.id_celular")
				->where("paciente.id_codigo","=", $id)
				->get();

			//$Medinfo= DB::select('call medicion_SV(?)',array($id));
			$Medinfo = DB::statement(DB::raw("call medidas_2(".DB::raw($id).")")); 
			
			return  $this->layout->content = View::make('informacion', compact("Devala","Medinfo"));
		}
		return  Redirect::to('/login');
	}
}