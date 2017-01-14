@extends('layout.evaluacion')


<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="Shortcut Icon" href="imagenes/logo.ico" type="image/x-icon" />
   <!-- Menu Maker -->
 
  @section('css')
  <?php echo HTML::style('css/styles.css');?>

   <?php echo HTML::style('css/bootstrap-theme.css'); ?>
   <?php echo HTML::style('css/bootstrap-theme.css.map'); ?>
   <?php echo HTML::style('css/bootstrap-theme.min.css'); ?>
   <?php echo HTML::style('css/bootstrap.css'); ?>
   <?php echo HTML::style('css/bootstrap.css.map'); ?>
   <?php echo HTML::style('css/bootstrap.min.css'); ?>

   <!-- propias-->
   <?php echo HTML::style('css/modificador.css'); ?>
   <?php echo HTML::style('css/stilo.css'); ?>
   <?php echo HTML::style('css/tablas.css'); ?>
   @show

   @section('js')
   <?php echo HTML::script('js/bootstrap.js'); ?>
   <?php echo HTML::script('js/bootstrap.min.js'); ?>
   <?php echo HTML::script('js/jquery-1.9.1.min.js'); ?>
   <?php echo HTML::script('js/script.js'); ?>
   <?php echo HTML::script('http://code.jquery.com/jquery-latest.min.js'); ?>
   @stop

   <title>SIMSIV</title>
</head>

@section('cuerpo')

<!-- VARIABLES -->
<?php 
   $imcA=0; $tempA=0; $respA=0; $ccA=0;
   $imcB=0; $tempB=0; $respB=0; $ccB=0;  
   $imcN=0; $tempN=0; $respN=0; $ccN=0;
   valores_medidas($Medinfo);?>
<body class="has-primary" style="background-color: #fff;">
   <header>
      <table class="tabla-contenedor">
      <tr>
         <td colspan="2" class="tabla-contenedor">
            <section>
               <div class="row set-row fondo-b">

                  <div class="col-xs-12">
                     <table class="tabla">

                        <tr>
                           <td class="fila-tabla">                  
                              @section('imagen')
                                 <?php echo HTML::image('imagenes/logo2.png','Responsive image', array("class"=>"img-responsive ima")) ?>
                              @show
                           </td><td class="fila-tabla">
                              <div style="aling:left; width:100%;">
                                 <h1 class="set-t">SIMSIV</h1>
                              </div>

                           </td><td class="fila-tabla">
                              <nav id='cssmenu'>
                                 <ul>
                                 <li> <?php echo HTML::link('/Pacientes','Pacientes') ?></li>
                                 <li class="active"><?php echo HTML::link('/Evaluacion','Evaluacion') ?></li>
                                 <li><?php echo HTML::link('/Atenciones','Atencion') ?></li>
                                 <li><?php echo HTML::link('/Promotores','Promotores') ?></li>
                                 <li><?php echo HTML::link('/Mensajes','Mensajes') ?></li>
                                 
                                 <li class='has-sub'><a href='#'>Admin</a>
                                       <ul>
                                          <li><a href='#'>Reporte</a>
                                             <ul>
                                                <li><a href='#'>Niño</a></li>
                                                <li><a href='#'>Adulto</a></li>
                                                <li><a href='#'>General</a></li>
                                             </ul>
                                          </li>
                                          <li><a href='#'>Configuraciones</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </nav> <!-- css menur maker-->
                           </td>
                 
                           <td class="fila-tabla"><!-- User -->
                              <div>
                                  @section('user-ima')
                                    <?php echo HTML::image('imagenes/user1.png','Responsive user', array("class"=>"img-responsive user-ima")) ?>
                                 @show
                              </div>
                           </td><td class="fila-tabla">
                              <div>
                                 <label id="user"><?php echo 'Melvin'?> | </label><a href="#" style="color:#fff; margin-left:10px;">Configurar | </a><a href="#" style="color:#fff; margin-left:10px;">Salir</a>
                              </div>
                           </td>
                        </tr>
                     </table>
                  </div> <!-- fin de las columnas -->
               </div> <!--fin de la primera fila -->
            </section>
         </td>
      </tr>

      <tr>
         <td colspan="2" class="tabla-contenedor">
            <seccion>
               <div class="fondo-g">
                  <label id="poner-i"><h2 class="set-2" id="textb-p">Pacientes</h2></label>
                  <label id="poner-d"><h2 class="set-2" id="textb-c">Waslala</h2></label>
               </div>
            </section>
         </td>
      </tr>
      <tr>
         <td rowspan="2" class="fila-tabla">
            <section>
            <?php $j=0; $tipa='';?>
            @foreach($Devala as $Devalas)
               <div class="informacion">
                  <table id="background-image" summary="Meeting Results">
                     <thead>
                        <tr class="borde-fila">
                           <th scope="col" colspan="2" style="text-align:center;"><label style="text-align:center;">INFORMACION</label></th>
                        </tr>
                     </thead>

                     <tfoot >
                        <tr class="borde-fila">
                           <th colspan="2"><p style="text-align:center; color:#204a87;">Paciente Adulto ingreso el <?php echo "10 de Octubre de 2014"; ?></p></th>
                        </tr>
                     </tfoot>
                     
                     <tbody>
                        <tr class="borde-fila">
                           <td class="info-c"><label>ID</label></td>
                           <td class="info"><label>{{$Devalas->ID_CODIGO}}</label></td>
                        </tr>
                        <tr class="borde-fila">
                           <td class="info-c"><label>Nombre</label></td>
                           <td class="info"><label>{{$Devalas->NOMBRE}}</label></td>
                        </tr >
                        <tr class="borde-fila">
                           <td class="info-c"><label>Fecha de Nacimiento</label></td>
                           <td class="info"><label>{{$Devalas->NACIMIENTO}}</label></td>
                        </tr>
                        <tr class="borde-fila">
                           <td class="info-c"><label>Sexo</label></td>
                           <td class="info"><label><?php if($Devalas->SEXO=='F') echo 'FEMENINA'; else echo 'MASCULINO';?></label></td>
                        </tr>
                        <tr class="borde-fila">
                           <td class="info-c"><label>Madurez</label></td>
                           <td class="info"><label><?php $tipa=edad($Devalas->NACIMIENTO, $Devalas->SEXO); echo $tipa;?></label></td>
                        </tr>
                        <tr class="borde-fila">
                           <td class="info-c"><label>Comunidad</label></td>
                           <td class="info"><label>{{$Devalas -> DESCRIPCION}}</label></td>
                        </tr>
                        <tr class="borde-fila">
                           <td class="info-c"><label>Creado</label></td>
                           <td class="info"><label>{{$Devalas -> CREATE_AT}}</label></td>
                        </tr>
                        <tr class="borde-fila">
                           <td class="info-c"><label style="color: #5cb85c;">Promotor</label></td>
                           <td class="info"><label style="color: #5cb85c;">{{$Devalas -> PRO_NOMBRE}}</label></td>
                        </tr>
                        <tr class="borde-fila">
                           <td class="info-c"><label style="color: #5cb85c;">Celular</label></td>
                           <td class="info"><label style="color: #5cb85c;">{{$Devalas -> NUMERO}}</label></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               @endforeach
            </section>
         </td>
         <!--Tabla de conteo de evaluaciones +++++++++++++++++++++++++++++-->
         <td class="fila-tabla">
         <?php if ($tipa == 'Adulto') $j=5; else $j=4;?>
            <div class="informacion-dato">
               <table id="background-image" class="informacion-dato" summary="Meeting Results">
                  <thead>
                     <tr class="borde-fila">
                        <th colspan="6" style="text-align:center;">
                           <label style="text-align:center;" >NUMERO DE EVALUACIONES DE SIGNOS VITALES</label>
                        </th>
                     </tr>
                     <tr class="borde-fila">
                        <th scope="col" style="text-align:center;">
                           <label style="text-align:center;">Medidas</label>
                        </th>
                        <th style="text-align:center;">
                           <label>IMC</label>
                        </th>
                        <?php if ($j==5) {?>
                           <th style="text-align:center;">
                                 <label>Pulso</label>
                           </th>
                        <?php } ?>
                        <th style="text-align:center;">
                           <label>Respiracion</label>
                        </th>
                        <th style="text-align:center;">
                           <label>Temperatura</label>
                        </th>
                        <th style="text-align:center;">
                           <?php if ($j==5) {?>
                              <label>Presion Sanguinia</label>
                           <?php }else{ ?>
                              <label>Circunferencia C</label>
                           <?php }?>
                        </th>
                     </tr>
                  </thead>

                  <tbody>
                     <tr class="borde-fila">
                           <td class="info-c">
                              <label style="text-align:center;">Alta</label>
                           </td>

                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $imcA; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $respA; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $tempA; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $ccA; ?> </label>
                           </td>
                         
                     </tr>
                     <tr class="borde-fila">
                        <td class="info-c">
                           <label class="label-control datoe">Baja</label>
                        </td>

                        <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $imcB; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $respB; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $tempB; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $ccB; ?> </label>
                           </td>
                     </tr>
                     <tr class="borde-fila">
                        <td class="info-c">
                           <label class="label-control datoe">Normal</label>
                        </td>

                        <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $imcN; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $respN; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $tempN; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php  echo $ccN; ?> </label>
                           </td>
                     </tr>
                  </tbody>

                  <tfoot>
                     <tr class="borde-fila">
                        <th class="info-c">
                           <label>Total</label>
                        </th>
                        <?php for ($i=0; $i < $j; $i++) { ?>
                           <th class="info" style="text-align:center;">
                              <label class="label-control total">12</label>
                           </th>
                        <?php } ?>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </td>
      </tr>
      <tr>
         <td class="fila-tabla">
            <p class="reporte-p">
               Puede generar un Reporte en formato PDF de este paciente en el cual se especifican
               <br /> Datos Personales, Numero de Evaluaciones de los Signos vitales y las evaluaciones
               <br /> que le ha realizado el Lider de Salud para mejor distribucion de Informacion.
               <br /> <button type="submit" class="btn btn-primary">Generar Reporte</button> </p>
         </td>
      </tr>
      <!-- evaluaciones ++++++++++++++++++++++++++++++++++++++++++++ -->
      <tr>
         <td colspan="2">
            <div class="informacion-dato">
               <table id="background-image" class="informacion-dato" summary="Meeting Results">
                  <thead>
                     <tr class="borde-fila">
                        <th colspan="9" style="text-align:center;">
                           <label style="text-align:center;" >EVALUACIONES DE ADULTO REALIZADAS POR EL LIDER DE SALUD</label>
                        </th>
                     </tr>
                     <tr class="borde-fila">
                        <th style="text-align:center;">
                           <label>Fecha</label>
                        </th>
                        <th style="text-align:center;">
                           <label>Altura (cm)</label>
                        </th>
                        <th style="text-align:center;">
                           <label>Peso (kg)</label>
                        </th>
                        <th style="text-align:center;">
                           <label>Pulso</label>
                        </th>
                        <th style="text-align:center;">
                           <label>Presion Sanguinia</label>
                        </th>
                        <th style="text-align:center;">
                           <label>Respiracion</label>
                        </th>
                        <th style="text-align:center;">
                           <label>Temperatura</label>
                        </th>
                        <th style="text-align:center;">
                           <label>Motivo de la Visita</label>
                        </th>
                     </tr>
                  </thead>

                  <tbody>
                     <?php for ($i=0; $i < 5; $i++) { ?>
                        <tr class="borde-fila">
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php echo "10/04/2014"; ?> </label>
                           </td>
                         
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php echo "150"; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php echo "60"; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php echo "70"; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php echo "90/60"; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php echo "20"; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php echo "35"; ?> </label>
                           </td>
                           <td class="info" style="text-align:center;">
                              <label style="text-align:center;"> <?php echo "Demasiada linda y Tos"; ?> </label>
                           </td>

                        </tr>
                     <?php } ?>
                  </tbody>
@stop
@section('pie')
                  <tfoot >
                     <tr class="borde-fila">
                        <th colspan="9"><p style="text-align:center; color:#204a87;">Paciente Adulto ingreso el <?php echo "10 de Octubre de 2014"; ?></p></th>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </td>
      </tr>
      <tr>
         <td colspan="2" class="tabla-contenedor">
            <section>
               <div class="row set-row fondo-b" style="margin-top:2px;">
                  <table class="tabla">
                     <tr >
                        <td class="fila-tabla" style="text-align:center;">
                           <label class="pie" style="padding-top:10px;">Todos los Derechos Reservados</label><br />
                           <label class="pie" style="padding-bottom:10px;">Desarrollo y Diseño, Melvin Mendoza y Karen Talavera</label>
                        </td>
                     </tr>
                  </table>
               </div>
            </section>
         </td>
      </tr>
      </table>
   </header>
</body>

<?php 
 function valores_medidas($info)
  {
   print_r($info);
      foreach ($info as $key => $value) {
         //if ($value->parametro_id == 20)
            $tempA=$value->cantidad;
      }
  }
?>

<html>
@stop
<?php
  function edad($fecha, $sexo){
      $fecha = str_replace("/","-",$fecha);
      $fecha = date('Y/m/d',strtotime($fecha));
      $hoy = date('Y/m/d');
      $edad = $hoy - $fecha;

      if ($sexo='M' and $edad>20)
        return 'Adulto';
      if ($edad>18)
        return 'Adulto';
     if ($edad>12)
        return 'Adolecente';

     if ($edad>1)
        return 'Nino';

      $tpa=2;
      $j=4;
      return 'Neonato';
  }

?>