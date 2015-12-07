<?php

require_once('../conf.php');
include '../daos/dao.php';
require_once('../daos/daoUsuario.php');

session_start();
if ($_GET) {
    try {
     
        $_SESSION['db_user'] = $_GET['db_user'];
        $_SESSION['db_pass'] = $_GET['db_pass'];
        
        
          $dao = new dao(DB_HOST,DB_USER_CREATOR, DB_PASSWORD_CREATOR, DB_NAME);
        $dao->conectar();
        $daoUsuario = new daoUsuario($dao);
//        $dao->cerrarConexion();
       
        $result=$daoUsuario->buscarInfoUsuario($_GET['db_user'],$_GET['db_pass']);
        $result1=$daoUsuario-> getEstadoUsuario($_GET['db_user']);
                
       if (!empty($result)) {
           
           
           if (empty($result1[0][0])) {
          
             header('Location: ../form_datos.php');
             
           }
           
           else {
               
               header('Location: ../menu.php');
               
               
           }
               
               
        } else {
            echo '<script>window.alert("Usuario o clave invalida");</script>';
            header('Location: ../iniciosesion.php');		
        }
    } catch (Exception $e) {
//        header('Location: ../in');
    }
} else {

    $_SESSION['db_user'] = DB_USER_CONS;
    $_SESSION['db_pass'] = DB_PASSWORD_CONS;
//    header('Location: ../iniciosesion.php');
}
?>