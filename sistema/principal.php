//
//  libreria principal cctw_gm
//  http://wwww.cctw-gm.org
//  Autor: el antiguo
//  vercion de la libreria: alpha 0.0.8
//

//                       Definiciones

define('INSTALL', true);
define('ROOT_PHAT', $_SERVER['DOCUMENT_ROOT'].'/cctw-gm/');                     // Define la ruta raiz del cervidor 
define('SISTEMA_PHAT', $_SERVER['DOCUMENT_ROOT'].'/cctw-gm/sistema/');          // Define la ruta raiz del sistema
define('INDEX', 'index');                                                       // Define el modulo de la portada
define('DB_HOST', 'localhost');                                                 // Define la ip de la BD
define('DB_USER', 'root');                                                      // Define el usuario de la BD
define('DB_PASS', 'n4u8qibw');                                                  // Define la contraseña de la BD
define('DB_NAME', 'cctw_gm');                                                   // Define la BD
define('SEND_ERRORS_TO', 'you@yourwebsite.com');                                // en caso de error de la DB envia un correo a...
define('DISPLAY_DEBUG', true);                                                  // Muestrar los erroes de DB (solo activar para pollectos en desarrollo)
// directorios (TO DO #2)
define('PHAT_LIBRERIAS', 'lib');
define('PHAT_MODULOS', 'mod');

//                      Buscador de clases

spl_autoload_register(function ($class) {
  $className = strtolower($class);
  $paths = array(
    PHAT_LIBRERIAS,
    PHAT_MODULOS,
  );
  foreach($paths as $path)
  if(is_readable(SISTEMA_PHAT.$path.'/'.$className.'.'.$path.'.php'))require_once(SISTEMA_PHAT.$path.'/'.$className.'.'.$path.'.php');
}); 

//                      Clases  (TO DO #1)
class principal extends basic_func
{

//                     Propiedades

  public $seccion;

//                     Armadores

  function __construct() 
  {
    if (isset($_GET['seccion'])) $this->seccion = basic_func::limpiar($_GET['seccion']);
    else $this->seccion = INDEX;
    if ($this->seccion == array(spl_classes()))    $print = new $this->seccion();
    else  $print = new printtemas();

  }
} 
