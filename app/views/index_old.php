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

      <section>
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
                                 <li class="active"><a href='/'>Evaluacion</a></li>
                                 <li><a href='#'>Atencion</a></li>
                                 <li><a href='#'>Promotores</a></li>
                                 <li><a href='#'>Mensajes</a></li>
                                 <li><a href='#'>Notificacion</a></li>
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
      </section>

         <!-- Tabla -->
      <section class="tabla">
         <table id="background-image" summary="Meeting Results">
            <thead>
               <tr class="borde-fila">
                  <th scope="col"></th>
                  <th scope="col">Paciente</th>
                  <th scope="col">Codigo</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Comunidad</th>
                  <th scope="col">N° Evala</th>
                  <th scope="col">Promotor</th>
                  <th scope="col">Creado</th>
               </tr>
            </thead>

            <tfoot >
               <tr class="borde-fila">
                  <th colspan="5"> empaginado <a id="link" href="#">Reporte</a></th>
               </tr>
            </tfoot>

            <tbody>
               <?php for ($i=1; $i < 14; $i++) { 
               # code...
               ?>
                  <tr class="borde-fila">
                     <td ><?php echo $i; ?></td>
                     <td>Adulto</td>
                     <td>BAK<?php echo $i; ?> </td> <!-- Buenos Aire Kubali-->
                     <td><a href="{{URL::to('/')}}/Pacientes/informacion">Karen Marcela Talavera Membreño</a></td>
                     <td>Buenos Aire Kubali</td>
                     <td style="padding-left:25px;">5</td>
                     <td>Melvin Mendoza</td>
                     <td>10/10/2014</td>
                  </tr>
               <?php }?>
            </tbody>
         </table>
      </section>

   </header>
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


</body>
<html>
