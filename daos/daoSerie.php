<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class daoSerie {
    var $database;
    /**
     * constructor de la clase
     */
    function daoSerie($db) {
        $this->database = $db;
        
    }

    
        
        
        function buscarSerie($tipo, $nivel){
		$sql = "SELECT * FROM ejercicio WHERE id_tipo_ejercicio=".$tipo." AND nivel='".$nivel."'";
                $result = $this->database->ejecutarConsulta($sql);
                $res = $this->database->transformarResultado($result);
              
                
            return   $res;
	}
        
        function InsertarSerie($id_serie, $id_ejercicio,$numero_repeticiones,$tiempo_limite, $validacion_serie){
		$sql = "INSERT INTO TipoXSeries VALUES (".$id_serie.",".$id_ejercicio.",".$numero_repeticiones.", '".$tiempo_limite."', '".$validacion_serie."')";
                $result = $this->database->ejecutarConsulta($sql);           
                
            return   $result;
	}
        
        
    
    


}

