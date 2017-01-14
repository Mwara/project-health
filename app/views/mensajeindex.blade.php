@extends('layout.mensaje')

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
   @stop

   @section('js')
      <?php echo HTML::script('js/bootstrap.js'); ?>
      <?php echo HTML::script('js/bootstrap.min.js'); ?>
      <?php echo HTML::script('js/jquery-1.9.1.min.js'); ?>
      <?php echo HTML::script('js/script.js'); ?>
      <?php echo HTML::script('http://code.jquery.com/jquery-latest.min.js'); ?>
   @stop

@section ('titulo') SIMSIV-MENSAJES @stop

 @section ('barra')
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
                                 <li><?php echo HTML::link('/Evaluacion','Evaluacion') ?></li>
                                 <li><?php echo HTML::link('/Atenciones','Atencion') ?></li>
                                 <li><?php echo HTML::link('/Promotores','Promotores') ?></li>
                                 <li class="active"><?php echo HTML::link('/Mensajes','Mensajes') ?></li>
                                 
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
                              <label id="user"><?php echo 'Melvin'?> | </label><a href="#" style="color:#fff; margin-left:10px;">Configurar | </a><a href="#" style="color:#fff; margin-left:10px;">Salir</a>
                           </div>
                        </td>
                     </tr>
                  </table>
               </div> <!-- fin de las columnas -->
            </div> <!--fin de la primera fila -->

            <div class="fondo-g">
               <label id="poner-i"><h2 class="set-2" id="textb-p">Pacientes</h2></label>
               <label id="poner-d"><h2 class="set-2" id="textb-c">Waslala</h2></label>
            </div>
      @stop

