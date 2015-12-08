<?php

require_once('../conf.php');
require_once('../daos/dao.php');
require_once('../daos/daoUsuario.php');
require_once('../daos/daoPerfil.php');
session_start();
$dao = new dao(DB_HOST,DB_USER_CREATOR, DB_PASSWORD_CREATOR, DB_NAME);
$dao->conectar();
$daoUsuario = new daoUsuario($dao); 
$daoPerfil = new daoPerfil($dao);
$usuario=$daoUsuario->buscarInfoUsuario($_SESSION['db_user'], $_SESSION['db_pass']);
$daoPerfil->mostrarPerfil($usuario);
    $dao->cerrarConexion();
    

