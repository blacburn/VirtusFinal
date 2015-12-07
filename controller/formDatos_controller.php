<?php



require_once('../conf.php');
require_once('../daos/dao.php');
require_once('../daos/daoUsuario.php');
session_start();
    $dao = new dao(DB_HOST,DB_USER_CREATOR, DB_PASSWORD_CREATOR, DB_NAME);
    $dao->conectar();
    $daoUsuario = new daoUsuario($dao);
//    $daoUsuario->crearUsuario('admin',$_GET['1234']);
    
    
     
    $daoUsuario->actualizarInfoUsuario2( $_SESSION['db_user'],$_GET['sexo'],$_GET['edad'],$_GET['altura'],$_GET['peso'],$_GET['frecuencia']);    
        
 
        
    
    
    $dao->cerrarConexion();
    header('Location: ../form_datos.php');
//    $_SESSION['db_user'] = $_GET['email'];
//    $_SESSION['db_pass'] = $_GET['pass'];
  
    

