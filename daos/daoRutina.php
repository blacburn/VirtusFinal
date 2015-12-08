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
        
        function insertarRutinas($id_usuario, $id_serie,$id_ejercicio, $validacion , $progreso){
		$sql = "INSERT INTO UsuarioxEjercicio VALUES (".$id_usuario.",".$id_serie.",".$id_ejercicio.", '".$validacion."', '".$progreso."')";
                $result = $this->database->ejecutarConsulta($sql);
              
                
            return   $result;
	}
        
    
    


}

