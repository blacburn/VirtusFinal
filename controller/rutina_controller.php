<?php



require_once('../conf.php');
require_once('../daos/dao.php');
require_once('../daos/daoUsuario.php');
require_once('../daos/daoRutina.php');

session_start();
if ($_GET) {
    $dao = new dao(DB_HOST,DB_USER_CREATOR, DB_PASSWORD_CREATOR, DB_NAME);
    $dao->conectar();
    $daoRutina = new daoRutina($dao);
    $daoUsuario = new daoUsuario($dao);
    $rutinas = Array();
    $tipos = Array();
    
    $validado=0;
    
//    $daoUsuario->crearUsuario('admin',$_GET['1234']);
    
    $usuario=$daoUsuario->buscarFrecUsuario($_SESSION['db_user'], $_SESSION['db_pass']);
    
    /// NIVEL DEL USUARIO
    if(($usuario->frec_actividad)=='baja'){
        $nivel='Principiante';
    }
    if(($usuario->frec_actividad)=='media'){
        $nivel='Intermedio';
    }
    if(($usuario->frec_actividad)=='alta'){
        $nivel='Experto';
    }
    
     
    if((floatval($usuario->imc))<=18.5){
        $series=1;
    }
    if((floatval($usuario->imc))>18.5 && (floatval($usuario->imc))<=24.9){
        $series=2;
    }
    if((floatval($usuario->imc))>24.9){
        $series=3;
    }
   
    
    //TIPO DE EJERCICIOS ESCOGIDOS POR EL USUARIO
    if (isset($_GET['brazo']) && $_GET['brazo']){
                $rutinas=$daoRutina->buscarRutinas(1 , $nivel);
                $validacion='NO';
                $progreso='0';
                foreach($rutinas as $posicion=>$valor)
	{
	        $i = 1;
                while ($i <= $series) {
                     $daoRutina->insertarRutinas($usuario->id_usuario, $i, $valor[0], $validacion, $progreso);
                    
                    $i++;  
                }
	}
                
               
      
                
    }
    if (isset($_GET['pierna']) && $_GET['pierna']){
            $rutinas=$daoRutina->buscarRutinas(2 , $nivel);
                    $validacion='NO';
                $progreso='0';
                foreach($rutinas as $posicion=>$valor)
	{
	        $i = 1;
                while ($i <= $series) {
                     $daoRutina->insertarRutinas($usuario->id_usuario, $i, $valor[0], $validacion, $progreso);
                    
                    $i++;  
                }
	}
             
              
    }
    if (isset($_GET['abdomen']) && $_GET['abdomen']){
        
        $rutinas=$daoRutina->buscarRutinas(3 , $nivel);
        $validacion='NO';
                $progreso='0';
                foreach($rutinas as $posicion=>$valor)
	{
	        $i = 1;
                while ($i <= $series) {
                     $daoRutina->insertarRutinas($usuario->id_usuario, $i, $valor[0], $validacion, $progreso);
                    
                    $i++;  
                }
	}
       
    }
    if (isset($_GET['hombro']) && $_GET['hombro']){
      
        $rutinas=$daoRutina->buscarRutinas(4, $nivel);
        $validacion='NO';
                $progreso='0';
                foreach($rutinas as $posicion=>$valor)
	{
	        $i = 1;
                while ($i <= $series) {
                     $daoRutina->insertarRutinas($usuario->id_usuario, $i, $valor[0], $validacion, $progreso);
                    
                    $i++;  
                }
	}
        
    }
    if (isset($_GET['espalda']) && $_GET['espalda']){
       
        $rutinas=$daoRutina->buscarRutinas(5 , $nivel);
         $validacion='NO';
                $progreso='0';
                foreach($rutinas as $posicion=>$valor)
	{
	        $i = 1;
                while ($i <= $series) {
                     $daoRutina->insertarRutinas($usuario->id_usuario, $i, $valor[0], $validacion, $progreso);
                    
                    $i++;  
                }
	}     
   
    }
    if (isset($_GET['pecho']) && $_GET['pecho']){
        $rutinas=$daoRutina->buscarRutinas(6 , $nivel);
         $validacion='NO';
                $progreso='0';
                foreach($rutinas as $posicion=>$valor)
	{
	        $i = 1;
                while ($i <= $series) {
                     $daoRutina->insertarRutinas($usuario->id_usuario, $i, $valor[0], $validacion, $progreso);
                    
                    $i++;  
                }
	}      
    }
   
    
    
          
        
 
        
    
    header('Location: ../menu.php');
}
    
    $dao->cerrarConexion();
//    header('Location: ../menu.php');
//    $_SESSION['db_user'] = $_GET['email'];
//    $_SESSION['db_pass'] = $_GET['pass'];
  
    