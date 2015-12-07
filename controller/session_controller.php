<?php

require_once('../conf.php');
include '../daos/dao.php';
require_once('../daos/daoUsuario.php');

session_start();
if ($_GET) {
    try {
     
        $_SESSION['db_user'] = 'admin';
        $_SESSION['db_pass'] = '1234';
        
        
        $dao = new dao(DB_HOST, $_SESSION['db_user'], $_SESSION['db_pass'], DB_NAME);
        $dao->conectar();
        $daoUsuario = new daoUsuario($dao,$_GET['db_user']);
//        $dao->cerrarConexion();
       
        $result=$daoUsuario->buscarInfoUsuario($_GET['db_user'],$_GET['db_pass']);
        
                
       if (!empty($result)) {
             header('Location: ../form_datos.php');
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