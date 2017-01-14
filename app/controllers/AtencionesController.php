<?php

 
class AtencionesController extends BaseController 
{
	
	protected $layout = 'layout.atencionp';

	public function getIndex()
	{
		if (Session::has('nombreuser'))
		{
			return  $this->layout->content = View::make('atencion');
		}
		return  Redirect::to('/login');
	}

	public function getInformacion()
	{
		if (Session::has('nombreuser'))
		{
			return  View::make('informacion');
		}
		return  Redirect::to('/login');	
	}
}