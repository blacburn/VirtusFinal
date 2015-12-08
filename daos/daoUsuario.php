<?php

/**
 * Description of daoUsuario
 *
 * @author FABIO
 */
class daoUsuario {
    var $database;
    var $nombre;
    /**
     * constructor de la clase
     */
    function daoUsuario($db) {
        $this->database = $db;
        
    }

    function crearUsuario($user, $pass){
            $sql = "CREATE USER $user WITH PASSWORD '$pass';"
                    . "GRANT dba to $user;";
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
        function getIdUsuario($nombre) {
        $sql = "SELECT id_usuario FROM usuario where nombre_login like '" . $nombre . "'";
         echo $sql;
        $result = $this->database->ejecutarConsulta($sql);
        return $this->database->transformarResultado($result);
    }
    
        function actualizarInfoUsuario2($nombre, $sexo, $edad, $altura, $peso, $frecuencia){
		$tabla = "usuario";
                $idUsuario=$this->getIdUsuario($nombre);
                echo $idUsuario[0][0];
                $imc= $peso / ($altura*$altura);
                $sql=" UPDATE usuario  SET edad=".$edad.", sexo='".$sexo."' ,altura='".$altura."', peso='".$peso."',imc='".$imc."', frec_actividad= '".$frecuencia."' WHERE id_usuario=".$idUsuario[0][0]."";
               
                return $this->database->ejecutarConsulta($sql);
              
	}
        
        
        function buscarInfoUsuario($usuario, $clave){
		$sql = "SELECT nombre_usuario as nombre, apellido_usuario as apellido FROM usuario WHERE nombre_login='".$usuario."' AND contrasena='".$clave."'";
             
                $res = $this->database->buscarDato($sql);
                
            return   $res;
	}
        
        function buscarFrecUsuario($usuario, $clave){
		$sql = "SELECT * FROM usuario WHERE nombre_login='".$usuario."' AND contrasena='".$clave."'";
             
                $res = $this->database->buscarDato($sql);
                
            return   $res;
	}
        
        
    function validar($usuario) {
        $sql = "SELECT contrasena FROM usuario where nombre_login like'" . $usuario . "'";
        $result = $this->database->ejecutarConsulta($sql);
        return $this->database->transformarResultado($result);
    }
	function getGroupRole(){
            $sql = "select avitour.f_rol_asociado()";
            $res = $this->database->ejecutarConsulta($sql);
            return $this->database->transformarResultado($res);
    }
    
    function getEstadoUsuario($nombre) {
        $sql = "SELECT imc FROM usuario where nombre_login like'" . $nombre . "'";
        
        $result = $this->database->ejecutarConsulta($sql);
        return $this->database->transformarResultado($result);
    }
    


}
