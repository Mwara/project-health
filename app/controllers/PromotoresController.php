<?php

 
class PromotoresController extends BaseController 
{
	
	protected $layout = 'layout.promotor';

	public function getIndex()
	{
		if (Session::has('nombreuser'))
		{
			return  $this->layout->content = View::make('promoindex');
		}
		return  Redirect::to('/login');	
	}

	
}