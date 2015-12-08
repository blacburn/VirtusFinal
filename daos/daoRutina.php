<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class daoRutina {
    var $database;
    var $nombre;
    /**
     * constructor de la clase
     */
    function daoRutina($db) {
        $this->database = $db;
        
    }

    
        
        
        function buscarRutinas($tipo, $nivel){
		$sql = "SELECT * FROM ejercicio WHERE id_tipo_ejercicio=".$tipo." AND nivel='".$nivel."'";
                $result = $this->database->ejecutarConsulta($sql);
                $res = $this->database->transformarResultado($result);
              
                
            return   $res;
	}
         function buscarRutinasUsuario($usuario){
		$sql = "SELECT  b.id_ejercicio, b.id_serie, nombre_ejercicio, descripcion, numero_repeticiones, tiempo_limite FROM usuarioxejercicio b, ejercicio a, tipoxseries c WHERE  b.id_ejercicio = a.id_ejercicio and b.id_ejercicio = c.id_ejercicio and b.id_serie = c.id_serie  and b.id_usuario=".$usuario;
             
               
                $result = $this->database->ejecutarConsulta($sql);
                $res = $this->database->transformarResultado($result);
              
                
            return   $res;
	}
        function insertarRutinas($id_usuario, $id_serie,$id_ejercicio, $validacion , $progreso){
		$sql = "INSERT INTO UsuarioxEjercicio VALUES (".$id_usuario.",".$id_serie.",".$id_ejercicio.", '".$validacion."', '".$progreso."')";
                $result = $this->database->ejecutarConsulta($sql);
              
                
            return   $result;
	}
        
        function buscarRutinasxTipo($tipo){
		$sql = "SELECT * FROM Tipo_ejercicio WHERE id_tipo_ejercicio=".$tipo."";
                $result = $this->database->ejecutarConsulta($sql);
                $res = $this->database->transformarResultado($result);
              
                
            return   $res;
	}
        
    
    


}

