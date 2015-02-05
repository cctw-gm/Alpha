<?php
class basic_func 
{
  private $cadena;
  private $cadena2;
  private $resultado;

  function Limpiar($cadena)
  {
    return (preg_replace('/[^A-Za-z0-9_-ñÑ]/', '', $cadena));
  }

 /* 
  * obsoleta
  * 
  */
  function FormaUrl($cadena2,$cadena){
    if($this->cadena2 =='entrante'){
      return (str_replace('_', ' ', selft::Limpiar($this->cadena)));
    }else if($this->cadena2 =='saliente'){
      $con_acento = "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ";
      $sin_acento = "AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn";
      $cadena= strtr($this->cadena, $con_acento, $sin_acento);
      return (str_replace(' ', '_', $cadena));
    }
  }

 /*
  * captura y limpia variaiables tipo get y post
  *
  * ejemplo de uso:
  *   $get = $this->Capturar('post','usuario');
  * lo cual devuelve
  *   "usuario"
  *
  * @access public
  *
  */
  function Capturar($cadena,$cadena2){
    if ($cadena=='get'){
      if (isset($_GET[$cadena2])){
        $resultado = self::limpiar($_GET[$cadena2]);
      }else{
        $resultado = 'get no encontrado';
      }
    }else if($cadena=='post'){
      if (isset($_POST[$cadena2])){
        $resultado = self::limpiar($_POST[$cadena2]);
      }else{
        $resultado = 'post no encontrado';
      }
    }else{
      $resultado = 'Error condicion 1 no valido';
    }
    return $resultado;
  }
}
 ?>
