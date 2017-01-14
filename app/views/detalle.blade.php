@extends('layout.inicio')

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
                                    <li class="active"> <?php echo HTML::link('/Pacientes','Pacientes') ?></li>
                                    <li><?php echo HTML::link('/Evaluacion','Evaluacion') ?></li>
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
                                    <label id="user"> @if(Session::has('nombreuser')) {{Session::get('nombreuser')}}@endif | </label>
                                    <label style="color:#fff; margin-left:10px;">Configurar | </label>
                                    <label><?php echo HTML::link('/login','SALIR', array('class'=>'texto-link')) ?></label>
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
               <!--informacion del paciente -->
               <section>
                  @foreach($Dpaciente as $Dpacientes)
                  <div class="informacion">
                     <table id="background-image" summary="Meeting Results">
                        <thead>
                           <tr class="borde-fila">
                              <th scope="col" colspan="2" style="text-align:center;"><label style="text-align:center;">INFORMACION DEL PACIENTE</label></th>
                           </tr>
                        </thead>

                        <tfoot >
                           <tr class="borde-fila">
                              <th colspan="2"><p style="text-align:center; color:#204a87;">Paciente Adulto ingreso el {{$Dpacientes -> CREATE_AT}}</p></th>
                           </tr>
                        </tfoot>

                        <tbody>
                           <tr class="borde-fila">
                              <td class="info-c"><label>ID</label></td>
                              <td class="info"><label>{{$Dpacientes->ID_CODIGO}}</label></td>
                           </tr>
                           <tr class="borde-fila">
                              <td class="info-c"><label>Nombre</label></td>
                              <td class="info"><label>{{$Dpacientes->NOMBRE}}</label></td>
                           </tr >
                           
                            <tr class="borde-fila">
                              <td class="info-c">
                                 <label style="text-align:left;">Fecha de Nacimiento</label>
                              </td>
                              <td class="info">
                                    <label class="label-control datoe"> {{$Dpacientes->NACIMIENTO}} </label>
                              </td>
                           </tr>
                           

                           <tr class="borde-fila">
                              <td class="info-c"><label>Sexo</label></td>
                              <td class="info"><label><?php if (($Dpacientes -> SEXO)=='M') echo 'Masculino'; else echo 'Femenina'?></label></td>
                           </tr>
                           <tr class="borde-fila">
                              <td class="info-c"><label>Comunidad</label></td>
                              <td class="info"><label>{{$Dpacientes -> DESCRIPCION}}</label></td>
                           </tr>
                           <tr class="borde-fila">
                              <td class="info-c"><label>Creado</label></td>
                              <td class="info"><label>{{$Dpacientes -> CREATE_AT}}</label></td>
                           </tr>
                           <tr class="borde-fila">
                              <td class="info-c"><label style="color: #5cb85c;">Promotor</label></td>
                              <td class="info"><label style="color: #5cb85c;">{{$Dpacientes -> PRO_NOMBRE}}</label></td>
                           </tr>
                           <tr class="borde-fila">
                              <td class="info-c"><label style="color: #5cb85c;">Celular</label></td>
                              <td class="info"><label style="color: #5cb85c;">{{$Dpacientes -> NUMERO}}</label></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </section> <!--Fin de informacion del paciente -->
            </td>
            <!--Tabla de conteo de evaluaciones +++++++++++++++++++++++++++++-->
            <td class="fila-tabla">
               <div class="informacion">
                  <table id="background-image" summary="Meeting Results">
                     <thead>
                        <tr class="borde-fila">
                           <th colspan="2" style="text-align:center;">
                              <label>INFORMACION DEL TUTOR</label>
                           </th>
                        </tr>
                     </thead>

                     <tbody>
                        <tr class="borde-fila">
                           <td class="info-c">
                              <label>Nombre</label>
                           </td>
                           <td class="info">
                              <label class="label-control datoe"> {{$Dpacientes -> NOMBRE_TUTO}}</label>
                           </td>
                           
                        </tr>

                        <tr class="borde-fila">
                           <td class="info-c">
                              <label>Parentezco</label>
                           </td>

                           <td class="info">
                              <label class="label-control datoe"> {{$Dpacientes -> PARENTESCO}} </label>
                           </td>
                        </tr>

                        <tr class="borde-fila">
                           <td class="info-c">
                              <label>Fecha de Nacimiento</label>
                           </td>
                           <td class="info">
                                 <label class="label-control datoe"> {{$Dpacientes -> Fecha_Nac}} </label>
                           </td>
                        </tr>

                         <tr class="borde-fila">
                           <td class="info-c">
                              <label>Fecha de Registro</label>
                           </td>
                              <td class="info">
                                 <label class="label-control datoe"> 'hnbb' </label>
                           </td>
                        </tr>

                     </tbody>

                     <tfoot>
                        <tr class="borde-fila">
                           <th colspan="2">
                           <p style="text-align:center; color:#204a87;">No padece de ninguna enfermedad y trabaja en agricultura</p>
                           </th>
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
     
      </thead>

      @endforeach

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
<html>