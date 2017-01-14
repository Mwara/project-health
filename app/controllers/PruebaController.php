<?php
 
class PruebaController extends BaseController 
{
	protected $layout = 'layout.master';

	public function getIndex()
	{
		$nombre="melvin mendoza";
		return $this->layout->content = View::make('test.index', compact("nombre"));
	}


}
