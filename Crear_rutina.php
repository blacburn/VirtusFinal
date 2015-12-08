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
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">              
 <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="section-heading">CREAR RUTINA</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessageddd" action="controller/rutina_controller.php">
                            <div class="row">
                              
                                
 <div class="col-sm-4 col-sm-offset-4">
                    <div class="panel-heading"><h2></h2></div>
                    <div class="panel panel-warning">
                        <div class="panel-body">  
                           <h5>Escoga los tipos de ejercicios deseados:</h5><br>
                            <div class="col-sm-12">
                                
                                <input type="checkbox" name="brazo" value="brazo" />Brazos<br/>
                                <input type="checkbox" name="pierna" value="pierna" />Piernas<br/>
                                <input type="checkbox" name="abdomen" value="abdomen" />Abdomen<br/>
                                <input type="checkbox" name="hombro" value="hombro" />Hombros<br/>
                                <input type="checkbox" name="espalda" value="espalda" />Espalda<br/>
                                <input type="checkbox" name="pecho" value="pecho" />Pecho<br/><br><br>
                                  
                            </div>

                        </div>
                    </div>


                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Guardar</button>
<div class="col-lg-12">
                                        <h2>  </h2><br>
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