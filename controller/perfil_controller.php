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
$usuario = Array();
$extra=$daoUsuario->getIdUsuario($_SESSION['db_user']);
 
$usuario = $daoUsuario->buscarInfoUsuario2($extra[0][0]);

 

