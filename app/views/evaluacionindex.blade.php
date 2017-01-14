@extends('layout.evaluacion')

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
      <?php echo HTML::style('css/login.css'); ?>
   @stop

   @section('js')
      <?php echo HTML::script('js/bootstrap.js'); ?>
      <?php echo HTML::script('js/bootstrap.min.js'); ?>
      <?php echo HTML::script('js/jquery-1.9.1.min.js'); ?>
      <?php echo HTML::script('js/script.js'); ?>
      <?php echo HTML::script('http://code.jquery.com/jquery-latest.min.js'); ?>
   @stop


   @section ('titulo') SIMSIV @stop


      @section ('barra')
         <table class="tabla">
         <tr><td class="td-estilo"> 
            <div class="row set-row fondo-b">

               <div class="col-xs-12">
                  <table class="tabla">

                     <tr>
                        <td class="fila-tabla">                  
                           <img src="imagenes/logo2.png" class="img-responsive ima" alt="Responsive image">
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
                              <img src="imagenes/user1.png" class="img-responsive user-ima" alt="Responsive image">
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

            <div class="fondo-g">
               <label id="poner-i"><h2 class="set-2" id="textb-p">Hispital Waslalita</h2></label>
               <label id="poner-d"><h2 class="set-2" id="textb-c">Waslala</h2></label>
            </div>
         </td></tr>
      @stop

@section('cuerpo')
         <!-- Tabla -->
      <tr><td class="td-estilo"> 
         <section class="tabla">
            <table id="background-image" summary="Meeting Results">
               <thead>
                  <tr class="borde-fila">
                     <th scope="col"></th>
                     <th scope="col">Estado</th>
                     <th scope="col">Paciente</th>
                     <th scope="col">Codigo</th>
                     <th scope="col">Nombre</th>
                     <th scope="col">Comunidad</th>
                     <th scope="col">N° Evala</th>
                     <th scope="col">Promotor</th>
                     <th scope="col">Creado</th>
                  </tr>
               </thead>

               <tfoot>
                  <tr class="borde-fila">
                     <th colspan="8" > {{$Dpacientes -> links()}}</th>
                  </tr>
               </tfoot>

               <tbody>
               <?php $i=0; ?>
                  @foreach($Dpacientes as $Dpaciente)
                   
                     <?php $i=$i+1; ?> 
                           <tr class="borde-fila">
                              <td><labe style="margin-left:20px;">{{$Dpaciente -> ID_EVA}}</labe></td>
                              <td>activo</td>
                              <td><?php echo edad($Dpaciente->NACIMIENTO, $Dpaciente->SEXO); ?></td>
                              <td>{{$Dpaciente -> ID_CODIGO}} </td> <!-- Buenos Aire Kubali-->
                              <td> <?php echo HTML::link('/Evaluacion/informacion/'.$Dpaciente->ID_CODIGO,$Dpaciente ->NOMBRE) ?></td>
                              <td>{{$Dpaciente -> DESCRIPCION}}</td>
                              <td style="padding-left:25px;"> {{$Dpaciente -> CANTIDAD }}</td>
                              <td>{{$Dpaciente -> PRO_NOMBRE}}</td>
                              <td>{{$Dpaciente -> CREATE_AT}}</td>
                           </tr>
                  @endforeach
                  <!--completando filas a 16 -->
                  <?php if ($i<16) { for ($j=$i; $j < 16; $j++) { ?>

                           <tr class="borde-fila">
                              <td class="td_vacio"></td>
                              <td class="td_vacio"></td>
                              <td class="td_vacio"> </td> <!-- Buenos Aire Kubali-->
                              <td class="td_vacio"> </td>
                              <td class="td_vacio"></td>
                              <td class="td_vacio"> </td>
                              <td class="td_vacio"></td>
                              <td class="td_vacio"></td>
                           </tr>
                  <?php } }?>
               </tbody>
            </table>
         </section>
      </td></tr>
 @stop

  @section('pie')
      <tr><td class="td-estilo"> 
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
      </td></tr>
  @stop

<?php
function edad($fecha, $sexo){
    $fecha = str_replace("/","-",$fecha);
    $fecha = date('Y/m/d',strtotime($fecha));
    $hoy = date('Y/m/d');
    $edad = $hoy - $fecha;

    if ($sexo='M' and $edad>20)
    {
      return 'Adulto';
    }

    if ($edad>18)
      return 'Adulto';

   if ($edad>12)
      return 'Adolecente';

   if ($edad>1)
      return 'Nino';

    return 'Neonato';
}
?>

