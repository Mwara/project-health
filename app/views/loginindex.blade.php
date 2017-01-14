 @extends('layout.login')

 @section('css')
      
   @stop 

   @section('js')
     
   @stop

@section ('titulo') 
  SIMSIM-LOGIN </title>
@stop

@section ('encabezado')
  <div class="contenedor">
    <table class="tabla">
      <tr><td class="td-estilo">
        <div class="div-fondo arriba">
          <table class="tabla">
            <tr>
               <td  style="text-align:center; border-style:none;">
                  <label class="sistema">SISTEMA DE MONITOREO DE SIGNOS VITALES</label><br />
                  <label class="sistema" style="padding-bottom:10px;">SIMSIV</label>
               </td>
            </tr>
          </table>
         </div>
      </td></tr>
@stop


@section ('formulario')
<tr><td class="td-estilo">
  {{Form::open(array ('url'=>'/login', 'method'=>'post'))}}
    <div class="formulario-login">
           <table class="tabla">
              <tr>
                <td rowspan="7" class="td-image td-estilo">
                  <div>
                      <img src="{{URL::to('/')}}/imagenes/fondo-login.png" alt="Responsive image">
                  </div>
                </td>
                <td class="td-texto td-estilo">
                  <label class="label-texto">USER: </label>
                </td>
                <td class="td-texbox td-estilo">
                  {{ Form::text('user')}} 
                  
                </td>
              </tr>

              <tr><td colspan="2" class="validacampos td-estilo">{{$errors -> first("user")}}</td></tr>

              <tr>
                <td class="td-estilo td-estilo">                      
                  <label class="label-texto">PASSWORD: </label>
                </td>
                <td class="td-texbox td-estilo">
                  {{ Form::password('pass')}} 
                  
                </td>
              </tr>

              <tr><td colspan="2" class="validacampos td-estilo">{{$errors -> first("pass")}}</td></tr>

              <tr>
                <td class="td-estilo td-estilo">                      
                  <label class="label-texto">PERFIL: </label>
                </td>
                <td class="td-texbox td-estilo">
                  {{Form::select('perfil', array('1' => 'Enfermer@', '2' => 'Doctor','3' => 'Admin'), '1');}}
                </td>
              </tr>

              <tr>
                <td colspan="2" class="td-estilo">
                  <label class="label-texto" style="color: #204a87;">Olvido su contrasena?</label>
                  @if (Session::has('estado')) 
                  <label class="label-error label-texto">  {{Session::get('estado')}}</label> 
                  @endif
                </td>
              </tr>
              
              <tr>
                <td class="td-estilo td-estilo">
                  <label class="label-texto">{{Form::submit('Enviar', array('class'=>'btn btn-primary'))}}</label>
                </td>
              </tr>
              
           </table>
    </div>
  
  {{Form::close()}}
  </td></tr>
@stop

 @section('pie')
 <tr><td class="td-estilo">
      <div class="div-fondo arriba">
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
  </table>
  </div>
@stop

