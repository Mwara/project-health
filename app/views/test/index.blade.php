@extends('layout.master')

@section('titulo')
	titulo
@stop

@section('barra')
	<h1>hola  desde la vista con blade</h1>

@stop
 
@section('imagen')
 <?php echo HTML::image('imagenes/user2.png','texto') ?>
 @stop

 @section('SIMSIV')
	 <?php echo "ir a".HTML::link('/Pacientes',' SIMSIV') ?>
 @stop
  @foreach($Dpacientes as $Dpaciente)
                  
                        <labe style="margin-left:20px;">{{$Dpaciente -> ID}}</labe>
                       
                       <labe style="margin-left:20px;"><?php echo HTML::link('/Pacientes/detalle/'.$Dpaciente->ID,$Dpaciente ->NOMBRE) ?></labe>
                     
                        <labe style="margin-left:20px;">{{$Dpaciente -> DESCRIPCION}}</labe>
                    <labe style="margin-left:20px;"> {{$Dpaciente -> NOMBRE_TUTO}}</labe>
                      <labe style="margin-left:20px;"> {{$Dpaciente -> CREATE_AT}}</labe>
                   
                  @endforeach