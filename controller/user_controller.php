<?php

require_once('../conf.php');
require_once('../daos/dao.php');
require_once('../daos/daoUsuario.php');
session_start();
    $dao = new dao(DB_HOST,DB_USER_CREATOR, DB_PASSWORD_CREATOR, DB_NAME);
    $dao->conectar();
    $daoUsuario = new daoUsuario($dao);
//    $daoUsuario->crearUsuario('admin',$_GET['1234']);
    
    
    if($_GET['password']==$_GET['passwordc']){
        
    $daoUsuario->insertInfoUsuario($_GET['cedula'],$_GET['nombre'],$_GET['apellido'],$_GET['usuario'],$_GET['password'],$_GET['telefono'],$_GET['email']);    
        
    }
    else{
        echo '<script>window.alert("Las contrasenas no coinciden");</script>';
    }
    
    $dao->cerrarConexion();

//    $_SESSION['db_user'] = $_GET['email'];
//    $_SESSION['db_pass'] = $_GET['pass'];
  
    header('Location: ../iniciosesion.php');
