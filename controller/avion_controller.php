<?php



include 'daos/dao.php';
include 'conf.php';
include 'daos/daoUsuario.php';
include 'daos/daoRutina.php';
session_start();
$dao = new dao(DB_HOST,DB_USER_CREATOR, DB_PASSWORD_CREATOR, DB_NAME);
$dao->conectar();






$daoUsuario = new daoUsuario($dao);
$daoRutina = new daoRutina($dao);
$rutina = Array();
$usuario=$daoUsuario->getIdUsuario($_SESSION['db_user']);
 
$rutina = $daoRutina->buscarRutinasUsuario($usuario[0][0]);

 

