<html>
    <head>
        <?php include './templates/importCss.php'; ?>
    </head>
    <body>
        <?php
        include('templates/headerTemplate.php');
       
        ?>
       
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">              
 <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="section-heading">BIENVENIDO</h1>
                        <h3 class="section-subheading text-muted">Es un gusto hacer parte de tu salud.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form name="sentMessageddd" action="controller/user_controller.php">
                            <div class="row">
                              
                                
 <div class="col-sm-4 col-sm-offset-4">
                    <div class="panel-heading"><h2></h2></div>
                    <div class="panel panel-warning">
                        <div class="panel-body">  
                           <h5>Completa estos datos:</h5><br>
                            <div class="col-sm-12">
                                
                                <label for="subject">Sexo :</label>
                                <select name="sexo" id="sexo">
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                                </select><br><br>
                                
                                <input type="text" class="form-control" name="edad" required="" placeholder="Edad en a&ntilde;os. "/><br>
                               
                                <input type="text" class="form-control" name="altura" required="" placeholder="Altura en metros. Ejm:  1.75 "/><br>
                                
                                <input type="text" class="form-control" name="peso" required="" placeholder="Peso en kilogramos. Ejm:  70.2 "/><br>
                                
                                <label for="subject">Frecuencia de actividad fisica:</label>
                                <select name="frecuencia" id="frecuencia">
                                <option value="baja">Baja </option>
                                <option value="media">Media</option>
                                <option value="alta">Alta</option>
                                </select><br><br>
                                
                                

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
               

    </body>


    <script>
        $('.selectpicker').selectpicker();
    </script>
    <?php
 
     
       
    include './templates/importJS.php';
       include './templates/footer.php';
    ?>
</html>