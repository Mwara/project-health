<?php

class PacientesController extends BaseController 
{
	
	protected $layout = 'layout.inicio';

	public function getIndex()
	{
		if (Session::has('nombreuser'))
		{
			$Dpacientes=Paciente::join("promotor","paciente.promotor_id","=","promotor.id_pro") 
				->join("comunidad","promotor.comunidad_id","=","comunidad.id_co")
				->join("parentesco","parentesco.paciente_id","=","paciente.id")
				->join("tutor","tutor.id_tuto","=","parentesco.tutor_id")
    			->orderBy("paciente.id","ASC")
    			->paginate(16);

			return  $this->layout->content = View::make('index', compact("Dpacientes"));
		}
		return  Redirect::to('/login');	
	}

	public function getDetalle($id=null)
	{
		if (Session::has('nombreuser'))
		{
			//$Dpacientes=Paciente::find($id);
			$Dpaciente=Paciente::join("parentesco","parentesco.paciente_id","=","paciente.id")
				->join("tutor","tutor.id_tuto","=","parentesco.tutor_id")
				->join("promotor","paciente.promotor_id","=","promotor.id_pro") 
				->join("comunidad","promotor.comunidad_id","=","comunidad.id_co")
				->join("celular", "promotor.celular_id","=", "celular.id_celular")
				->where("paciente.id","=",$id)
				->get();
			return  $this->layout->content = View::make('detalle', compact("Dpaciente"));
		}
		return  Redirect::to('/login');
	}

}
