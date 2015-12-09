
<?php ?>
<html>
    <head>
        <?php
        include ('./templates/importCss_1.php');
        include('templates/headerAdmin.php');
        include('controller/avion_controller.php');
//        include ('controller/vuelo_controller.php');
//        include('templates/tabla.php');
        ?>
    </head>

    <script>
    var inicio=0;
    var timeout=0;
 
    function empezarDetener(elemento)
    {
            if(timeout==0)
            {
                    // empezar el cronometro
 
                    elemento.value="Detener";
 
                    // Obtenemos el valor actual
                    inicio=vuelta=new Date().getTime();
 
                    // iniciamos el proceso
                funcionando();
            } else {
                // detemer el cronometro

                elemento.value = "Empezar";
                clearTimeout(timeout);
                timeout = 0;
            }
        }

        function funcionando()
        {
            // obteneos la fecha actual
            var actual = new Date().getTime();

            // obtenemos la diferencia entre la fecha actual y la de inicio
            var diff = new Date(actual - inicio);

            // mostramos la diferencia entre la fecha actual y la inicial
            var result = LeadingZero(diff.getUTCHours()) + ":" + LeadingZero(diff.getUTCMinutes()) + ":" + LeadingZero(diff.getUTCSeconds());
            document.getElementById('crono').innerHTML = result;

            // Indicamos que se ejecute esta función nuevamente dentro de 1 segundo
            timeout = setTimeout("funcionando()", 1000);
        }

        /* Funcion que pone un 0 delante de un valor si es necesario */
        function LeadingZero(Time) {
            return (Time < 10) ? "0" + Time : +Time;
        }
    </script>

    <style>
    .crono_wrapper {text-align:center;width:200px;}
    </style>
   <body style= 'margin-top: - 20px'>  
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">              
 <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="section-heading"> VAMOS COMIENZA CON TU EJERCICIO!</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                       
                            <div class="row">
                              
                                
 <div class="col-sm-8 col-sm-offset-2">
                    <div class="panel-heading"><h2></h2></div>
                    <div class="panel panel-warning">
                        <div class="panel-body">  
                           <h5><?php echo  $_GET[nombre];?></h5><br>
                            <div class="col-sm-12">
                       <div class= 'item'>  
	
</div>     
                                </div>  

                           
                           
                        
<div class="panel panel-default">
  <div class="panel-body">
    <div class='caption'>
    <img src= '<?php echo  $_GET[imagen];?>'  style='height: 300px; width: 100%; display: block;'>
    </div>
  </div>
</div>
                                                                
<div class="panel panel-default">
  <div class="panel-body">
    <?php echo  "descripcion:  ". $_GET[descripcion];?>
  </div>
</div>
                                                                
<div class="panel panel-default">
  <div class="panel-body">
     <?php echo  "sesiones:  ". $_GET[idS];
     $_SESSION['idS']=$_GET[idS];
     ?>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
     <?php echo "repeticiones:  ".$_GET[idE];
     $_SESSION['idE']=$_GET[idE];
     ?>
  </div>
</div>
 
                           
<div class="panel panel-default">
  <div class="panel-body">
     <?php echo "tiempo:  ".$_GET[duracion];?>
  </div>
</div>
                                
<div class="panel panel-default">
  <div class="panel-body">
  <h2 id='crono'>00:00:00</h2>
	<input type="button" class="btn btn-warning" value="Empezar" onclick="empezarDetener(this);">
        <div class="col-lg-12 text-center">
                                    <div id="success"></div>
       <form name="sentMessageddd" action="controller/validacion_controller.php"> 
          
          <input type="hidden" name="validacion" value="SI" /> 
          
       <button type="submit" class="btn btn-xl">si</button>    
         <input type="hidden" name="validacion" value="NO" /> 
            
       <form name="sentMessageddd" action="controller/validacion_controller.php"> 
       <button type="submit" class="btn btn-xl">no</button>  
        </div>
</div>
  </div>
</div>
                            
                                    
                            </div>

                        </div>
                    </div>


                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                   
                        <div class="col-lg-12">
                                        <h2>  dsadsa</h2><br>
                                        <h2>  </h2><br>
                                    
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        <?php
        include './templates/importJS.php';
        ?>
    </body>
</html>   