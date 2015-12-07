<?php

require_once('../conf.php');
include '../daos/dao.php';
include '../daos/daoUsuario.php';
session_start();
if ($_GET) {
    try {
//        $_SESSION['db_user'] = $_GET['db_user'];
//        $_SESSION['db_pass'] = $_GET['db_pass'];
//        
        $_SESSION['db_user'] = $_GET['db_user'];
        $_SESSION['db_pass'] = $_GET['db_pass'];
        
        
       $dao = new dao(DB_HOST,DB_USER_CREATOR, DB_PASSWORD_CREATOR, DB_NAME);
        $dao->conectar();
//        $dao->cerrarConexion();
        
        
        $daoUsuario = new daoUsuario($dao);
       $clave= $daoUsuario->validar($_GET['db_user']);
        if ($clave[0][0]==$_GET['db_pass']) {
            header('Location: ../form_datos.php');
        } else {
            echo '<script>window.alert("Usuario o clave invalida");</script>';
            //header('Location: ../index.php');		
        }
    } catch (Exception $e) {
        echo '<script>window.alert("usuario no registrado");</script>';
        header('Location: ../index.php');
    }
} else {

    $_SESSION['db_user'] = DB_USER_CONS;
    $_SESSION['db_pass'] = DB_PASSWORD_CONS;
    header('Location: ../form_datos.php');
}
?>