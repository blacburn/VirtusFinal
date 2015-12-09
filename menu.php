
    <?php ?>
<html>
    <head>
        <?php
        include ('./templates/importCss_1.php');
        include('templates/headerAdmin.php');
        include('controller/avion_controller.php');
     
        
    
        
        function buscarGif($nombre_ejercicio){
         $direccion='';   
         switch ($nombre_ejercicio) {
                case 'Oblicuos_Balon_Medicinal':
                      $direccion='img/gifs/Oblicuos_Balon_Medicinal.gif';
                      break;
                case 'Trapecio_Mancuernas':
                      $direccion='img/gifs/Trapecio_Mancuernas.gif';
                      break;
                case 'Flexiones_Mancuerna':
                      $direccion='img/gifs/Flexiones_Mancuerna.gif';
                      break;
                case 'Ascenso_Lateral':
                      $direccion='img/gifs/Ascenso_Lateral.gif';
                      break;
                   case 'Flexion_con_salto':
                      $direccion='img/gifs/Flexion_con_salto.gif';
                      break;
                   case 'Jalones_Mancuerna':
                      $direccion='img/gifs/Jalones_Mancuerna.gif';
                      break;
                   case 'Sentadillas_Mancuerna':
                      $direccion='img/gifs/Sentadillas_Mancuerna.gif';
                      break;
                   case 'Aductor_Balon_Medicinal':
                      $direccion='img/gifs/Aductor_Balon_Medicinal.gif';
                      break;
                   case 'Flexion_rodilla_acostado':
                      $direccion='img/gifs/Flexion_rodilla_acostado.gif';
                      break;
                   case 'Flexion_rodilla':
                      $direccion='img/gifs/Flexion_rodilla.gif';
                      break;
                   case 'Sentadilla_sin_peso':
                      $direccion='img/gifs/Sentadilla_sin_peso.gif';
                      break;
                   case 'Rotacion_Balon_Medicinal':
                      $direccion='img/gifs/Rotacion_Balon_Medicinal.gif';
                      break;
                   case 'Rodilla_al_pecho':
                      $direccion='img/gifs/Rodilla_al_pecho.gif';
                      break;
                   case 'Biceps_Mancuerna':
                      $direccion='img/gifs/Biceps_Mancuerna.gif';
                      break;
                   case 'Musculo_Extensor_elevacio':
                      $direccion='img/gifs/Musculo_Extensor_elevacion.gif';
                      break;
                   case 'Aductor_Mancuernas':
                      $direccion='img/gifs/Aductor_Mancuernas.gif';
                      break;
                   case 'Oblicuos_Polea':
                      $direccion='img/gifs/Oblicuos_Polea.gif';
                      break;
                   case 'Flexion-Extension-Tronco':
                       $direccion='img/gifs/Flexion-Extension-Tronco.gif';
                      break;
                   case 'Salto_En_cuclillas':
                      $direccion='img/gifs/Salto_En_cuclillas.gif';
                      break;
                   case 'Lumbares_Acostado':
                      $direccion='img/gifs/Lumbares_Acostado.gif';
                      break;
                   case 'Elevacion_Pierna':
                      $direccion='img/gifs/Elevacion_Pierna.gif';
                      break;
                   case 'Maquina_Trotadora':
                      $direccion='img/gifs/MaquinaTrotadora.gif';
                      break;
                   case 'Abdominales_Isometricos':
                      $direccion='img/gifs/Abdominales_Isometricos.gif';
                      break;
                   case 'Sentadillas_Mancuerna':
                      $direccion='img/gifs/Sentadillas_Mancuerna.gif';
                      break;
                   case 'Elevacion_Frontal':
                      $direccion='img/gifs/Elevacion_Frontal.gif';
                      break;
                   case 'Extension_Espalda_en_Pie':
                      $direccion='img/gifs/Extension_Espalda_en_Pie.gif';
                      break;
                   case 'Peso_Muerto_Mancuerna':
                      $direccion='img/gifs/Peso_Muerto_Mancuerna.gif';
                      break;
                   case 'Abdomen_Frontal_En_Pie':
                      $direccion='img/gifs/Abdomen_Frontal_En_Pie.gif';
                      break;
                   case 'Extension_Espalda':
                      $direccion='img/gifs/Extension_Espalda.gif';
                      break;
                   case 'Remo_Polea':
                      $direccion='img/gifs/Remo_Polea.gif';
                      break;
                   case 'Flexiones_de_Pecho':
                      $direccion='img/gifs/Flexiones de Pecho.gif';
                      break;
                   case 'Jalones_Mancuerna':
                      $direccion='img/gifs/Jalones_Mancuerna.gif';
                      break;
                   case 'Sentadillas_a_una_pierna':
                      $direccion='img/gifs/Sentadillas_a_una_pierna.gif';
                      break;
                   case 'Flexion_Pecho_Colgado':
                      $direccion='img/gifs/Flexion_Pecho_Colgado.gif';
                      break;
                   case 'Dominadas_Barra':
                      $direccion='img/gifs/Dominadas_Barra.gif';
                      break;
                   case 'Salto_en_V_invertida':
                      $direccion='img/gifs/Salto_en_V_invertida.gif';
                      break;
                   case 'Salto_Alterno':
                      $direccion='img/gifs/Salto_Alterno.gif';
                      break;
                   case 'Sentadillas_con_Apoyo':
                      $direccion='img/gifs/Sentadillas_con_apoyo.gif';
                      break;
                   case 'Tijeras_con_banco':
                      $direccion='img/gifs/Tijeras_con_banco.gif';
                      break;
                   case 'Patada_Frontal':
                      $direccion='img/gifs/Patada_Frontal.gif';
                      break;
                   case 'Tijeras':
                      $direccion='img/gifs/Tijeras.gif';
                      break;
                   case 'Prensa_de_hombros':
                      $direccion='img/gifs/Prensa_de_hombros.gif';
                      break;
                   case 'Prensa_en_banco':
                      $direccion='img/gifs/Prensa_en_Banco.gif';
                      break;
                   case 'Extension_brazos_Frontal':
                      $direccion='img/gifs/Extension_Brazos_Frontal.gif';
                      break;
                  
         }
         
        
        return $direccion;
    }
       
     

        
       
         
        
      
        
        ?>
    </head>
    <body style= 'margin-top: - 20px'>  
        <div id="myCarousel" class="carousel slide container" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                
                
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <?php
                    for ($i = 0; $i < count($rutina); $i++) {
                        
                         if ($rutina[$i][6]=='NO'){
                        
                        echo "<li data-target='#myCarousel'" . "data-slide-to=" . $i . "></li>";
                         }
                    }
                    ?>
                
                
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
         <?php
                    for ($i = 0; $i < count($rutina); $i++) {
                        
              if ($rutina[$i][6]=='NO'){
                  
                        $nombre = $rutina[$i][2];
                         $imagen=buscarGif($nombre);
                        $descripcion = $rutina[$i][3];
                        $repeticiones = $rutina[$i][4];
                        $tiempo = $rutina[$i][5];
                        $id_ejercicio=$rutina[$i][0];
                        $id_sesion=$rutina[$i][1];
                        if ($i == 0) {
                            echo "<div class='active item'>";
                            echo"<h1>";
                            echo $nombre;
                            echo"</h1>";
                            echo "<div class='row'>";
                        } else {
                            echo "<div class='item'>";
                            echo"<h1>";
                            echo $nombre;
                            echo"</h1>";
                            echo "<div class='row'>";
                        }
                        echo "<div class='col-sm-5'>";
                        echo "<div class='thumbnail'>";
                        echo"<div class='caption'>";
                        echo"<img src='" . $imagen . "' style='height: 300px; width: 100%; display: block;'>";
                        echo"</div>";
                        echo"</div>";
                        echo"</div>";

                        echo"<div class='col-sm-5'>";
                        echo"<div class='panel panel-default'>";
                        echo"<div class='panel-body'>";
                         echo "<div class='item'>";
                            echo"<h4>";
                            echo "descripcion";
                            echo"</h4>";
                        echo"</div>";    
                        echo"<h4>";
                        echo $descripcion;
                        echo"</h4>";
                        echo "</br>";
                        
                        echo "<div class='item'>";
                            echo"<h4>";
                            echo "repeticiones";
                            echo"</h4>";
                        echo"</div>";    
                        echo"<h4>";
                        echo $repeticiones;
                        echo"</h4>";
                        echo "</br>";
                        
                        echo "<div class='item'>";
                            echo"<h4>";
                            echo "series";
                            echo"</h4>";
                        echo"</div>";    
                        echo"<h4>";
                        echo $id_sesion;
                        echo"</h4>";
                        echo "</br>";
                        
                        echo "<div class='item'>";
                            echo"<h4>";
                            echo "tiempo";
                            echo"</h4>";
                        echo"</div>";    
                        
                        echo"<h4>";
                        echo $tiempo." segundos";
                        echo"</h4>";
                        
                        
                        echo "</br>";
                        echo "<div class='item'>";
                         echo"<h4>";
                            $link= "comenzar_ejercicio.php?idE=".$rutina[$i][0]."&idS=".$id_sesion."&nombre=".$nombre."&imagen=".$imagen."&descripcion="."$descripcion"."&duracion=".$tiempo;
                      $cadenas = str_replace(" ","%20",$link);
                            echo"<a href=".$cadenas.">Realizar</a>";   
                          echo"</h4>";
                        echo"</div>";    
                        
                      
                       
                        
                        
                        
                        echo"</div>";
                        
                        echo"</div>";
                        echo "</div>";

                        echo "</div>";
                        echo "</div>";
                       
                    }
                    else {
                        
                        
                    }
                    }
                    ?>   
                
                
                
                
                
                 </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> 


        <?php
        
        include './templates/importJS.php';
        
        
        ?>
    </body>
</html>   


