
<?php

require_once('../conf.php');
include('../daos/dao.php');
include('../daos/daoUsuario.php');
include('../daos/daoRutina.php');


session_start();
$dao = new dao(DB_HOST, $_SESSION['db_user'], $_SESSION['db_pass'], DB_NAME);
$dao->conectar();
$daoUsuario = new daoUsuario($dao);
$daoRutina = new daoRutina($dao);
$rutina = Array();
 $usuario=$daoUsuario->getIdUsuario($_SESSION['db_user']);
 echo $usuario[0][0];
$rutina = $daoRutina->buscarRutinasUsuario(222);
echo $rutina[0][0];
 