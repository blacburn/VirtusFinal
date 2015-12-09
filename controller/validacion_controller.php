<?php
require_once('../conf.php');
require_once('../daos/dao.php');
require_once('../daos/daoRutina.php');
session_start();
    $dao = new dao(DB_HOST,DB_USER_CREATOR, DB_PASSWORD_CREATOR, DB_NAME);
    $dao->conectar();
    $daoRutina = new daoRutina($dao);

    
    
     
    $daoRutina->actualizarValidacion( $_SESSION['db_user'],$_GET['validacion'],$_SESSION['idS'],$_SESSION['idE']);    
        
 
        
    
    
    $dao->cerrarConexion();
    header('Location: ../menu.php');
//    $_SESSION['db_user'] = $_GET['email'];
//    $_SESSION['db_pass'] = $_GET['pass'];
  
    


