<?php
class basic_func 
{
  private $cadena;
  private $cadena2;

  function Limpiar($cadena)
  {
    return (preg_replace('/[^A-Za-z0-9_-ñÑ]/', '', $cadena));
  }

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
}
 ?>
