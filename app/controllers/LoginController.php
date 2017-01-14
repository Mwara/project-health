<?php

 
class LoginController extends BaseController 
{
	
	protected $layout = 'layout.login';

	public function getIndex()
	{
		Session::forget('nombreuser');
		return  $this->layout->content = View::make('loginindex');
		//return View::make('loginindex');
	}


	public function postIndex()
	{
		$inputs=Input::All();
		$regla = array 
		(
			'user' => 'required|min:3',
			'pass' => 'required|min:3'
		);

		$mensaje=array 
		(
			"required" => "Este campo es Obligatorio",
			"min" => "Este campo debe ser mayor a 3 caracteres"
		);

		$valida=Validator::make($inputs, $regla, $mensaje);

		if ($valida -> fails())
		{
			return Redirect::back()->withErrors($valida);
		}
		else
		{
			$user=Usuarios::where('USUARIO','=',$inputs["user"])->first();

			if (!is_null($user))
			{
				if ($inputs["pass"]==$user->CLAVE and $inputs["perfil"]==$user->PERFIL)
				{
					if ($user->ESTADO==1)
					{
						Session::put('nombreuser',$user->NOMBRE);
						return Redirect::to('/Evaluacion');
					}
					else
					{
						Session::flash('estado','USUARIO '.$inputs["user"].' BLOQUEADO.');
						return Redirect::back();
					}
				}
				else
				{
					Session::flash('estado','CLAVE O PERFIL INCORRECTO.');
					return Redirect::back();
				}
			}

			else
			{
        		Session::flash('estado','USUARIO INCORRECTO');
				return Redirect::back();
			}
		}
	}
}
