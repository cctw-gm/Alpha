<?php

class gethtml extends principal
{

//              propiedades

  private $query;
  private $resultado;
  var $style;
  public $htmlphat;
  public $html

//              constructores

  function  getstyle($html) 
  {
    $this->htmlphat= ROOT_PHAT.'estilos/'.self::htmlstyle();
    include_once($);
  }
  public function htmlstyle()
  {
    $database = new db();
    $this->query = 'SELECT nombre,activo FROM style WHERE activo ="true"';
    $this->resultado = $database->get_results( $this->query );
    foreach($this->resultado as $row )
    {
      $this->style= $row['nombre'];
    }
    return $this->style;
  }
}

 ?>
