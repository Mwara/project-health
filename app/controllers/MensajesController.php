<?php

 
class MensajesController extends BaseController 
{
	
	protected $layout = 'layout.mensaje';

	public function getIndex()
	{
		if (Session::has('nombreuser'))
		{
			return  $this->layout->content = View::make('mensajeindex');
		}
		return  Redirect::to('/login');	
	}

	
}