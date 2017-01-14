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