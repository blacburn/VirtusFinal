<?php

/**
 * Description of daoUsuario
 *
 * @author FABIO
 */
class daoUsuario {
    var $database;

    /**
     * constructor de la clase
     */
    function daoUsuario($db) {
        $this->database = $db;
    }

    function crearUsuario($user, $pass){
            $sql = "CREATE USER $user WITH PASSWORD '$pass';"
                    . "GRANT r_avitour_user to $user;";
            echo $sql;
            $res = $this->database->ejecutarConsulta($sql);
            return $res;
    }
	
	function insertInfoUsuario($cedula, $nombre, $apellido, $usuario, $clave, $telefono, $correo ){
		$tabla = "usuario";
		$campos = array("id_usuario","nombre_usuario","apellido_usuario","nombre_login","contrasena","telefono", "email");
		$valores = array("$cedula","'".$nombre."'", "'".$apellido."'", "'".$usuario."'", "'".$clave."'", "'".$telefono."'", "'".$correo."'");
		return $this->database->insertarRegistro($tabla, $campos, $valores);
	}
	
	function getGroupRole(){
            $sql = "select avitour.f_rol_asociado()";
            $res = $this->database->ejecutarConsulta($sql);
            return $this->database->transformarResultado($res);
    }
}
