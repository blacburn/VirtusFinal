<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class daoPerfil {
    var $database;
    var $nombre;
    /**
     * constructor de la clase
     */
    function daoPerfil($db) {
        $this->database = $db;
        
    }

    
        
        
        function mostrarPerfil($usuario){
		$sql = "SELECT nombre_usuario, apellido_usuario, edad, altura, peso, imc ,frec_actividad FROM usuario WHERE nombre_usuario AND apellido_usuario =".$usuario."";
                $result = $this->database->ejecutarConsulta($sql);
                $res = $this->database->transformarResultado($result);
              
                
            return   $res;
	}
        
        
        
    
    


}

