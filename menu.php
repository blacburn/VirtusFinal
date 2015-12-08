<?php ?>
<html>
    <head>
        <?php
        include ('./templates/importCss_1.php');
        include('templates/headerAdmin.php');
        
//        include ('controller/vuelo_controller.php');
//        include('templates/tabla.php');
        ?>
    </head>
    <body style= 'margin-top: - 20px'>  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
<!--             Indicators 
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

             Wrapper for slides 
            <div class="carousel-inner" role="listbox">
                <div class="item active"><img class="carrusell" src="img/carousell/header-bg.jpg" alt="Chania" ></div>

                <div class="item"><img class="carrusell" src="img/carousell/5-Mejores-Destinos-Turisticos-Del-Mundo-1.jpg"></div>
                <div class="item"><img class="carrusell" src="img/carousell/Cataratas-Iguazu.JPG" alt="Flower"></div>
                <div class="item"><img class="carrusell" src="img/carousell/Cristo-Corcovado.jpg" alt="Flower" ></div>
            </div>

             Left and right controls 
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>-->

        </div> 


        <?php
        
        include './templates/importJS.php';
        
        $imagen=buscarGif('Patada_Frontal');
     
        echo '<img src='.$imagen.' width="100" height="100" border="0"> ';
        
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
    </body>
</html>   
