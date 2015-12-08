<?php ?>
<html>
    <head>
        <?php
        include ('./templates/importCss_1.php');
        include ('./templates/headerAdmin.php');
//        include ('./controller/perfil_controller.php');
        //include ('controller/perfil_controller.php');
        //include('templates/tabla.php'); 
        
        ?>
        
    </head>
    <body> 
        <?php  
        
        ?>
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">

                <div class="panel-heading"><h2>Mi Perfil</h2></div>
                <div class="panel panel-warning" >
                    <div class="panel-body">
                      <form name="sentMessageddd" >   
                            <div class="col-sm-6">
                                <div class="col-sm-6">
                                    <label>Nombre :</label><br>
                                </div>
                                <div class="col-sm-6">
                                   
                                    <!--<input disabled="disabled" class="form-control" id="nombre_usuario" name="nombre_usuario" required=""/>-->
                                    <?php echo '<label>adaqd</label>'     ?>
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <label>Apellido</label><br>
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <input type="date" class="form-control" id="apellido_usuario" name="apellido_usuario" required=""/>
                                    <br>
                                </div>
                                <div class="col-sm-6">
                                    <label>Edad</label><br>
                                </div>
                                <div class="col-sm-6">
                                    <input type="time" class="form-control"   id="edad" name="edad" required="">
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <label>Altura</label><br>
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <input type="time" class="form-control"   id="altura" name="altura" required="">
                                </div>
                                </div>

                            <div class="col-sm-6 ">
                                <div class="col-sm-6">
                                    <br>
                                    <label>Peso</label><br>
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <input type="time" class="form-control"   id="peso" name="peso" required="">
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <label>IMC</label><br>
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <input type="time" class="form-control"   id="imc" name="imc" required="">
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <label>Frecuencia de actividad</label><br>
                                </div>
                                <div class="col-sm-6">
                                    <br>
                                    <input type="time" class="form-control"   id="frec_actividad" name="frec_actividad" required="">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-12 col-sm-offset-3">
                <div class="col-sm-6">
                    <div class="panel-heading"><h2>Progreso</h2></div>
                    <div class="panel panel-warning" >
                        <div class="panel-body">

                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                    50%
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>