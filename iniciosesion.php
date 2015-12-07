<html>
    <head>
        <?php include './templates/importCss.php'; ?>
    </head>
    <body>
        <?php
        include('templates/header.php');
       
        ?>
       
              
 <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="section-heading">BIENVENIDO</h1>
                        <h3 class="section-subheading text-muted">Cuenta con nosotros, Mejora tu salud con nosotros.</h3>
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
                           <h5>Registrate</h5><br>
                            <div class="col-sm-12">
                                 
                                <input type="text" class="form-control" name="cedula" required="" placeholder="Cedula *"/><br>
                                <input type="text" class="form-control" name="nombre" required="" placeholder="Nombre *"/><br>
                                <input type="text" class="form-control" name="apellido" required="" placeholder="Apellido*"/><br>
                                <input type="text" class="form-control" name="usuario" required="" placeholder="Usuario *"/><br>
                                <input type="password" class="form-control" name="password" required="" placeholder="Contrase&ntilde;a *"/><br>
                                <input type="password" class="form-control" name="passwordc" required="" placeholder="Confirma Contrase&ntilde;a *"/><br>
                                <input type="text" class="form-control" name="telefono" required="" placeholder="Telefono *"/><br>
                                <input type="email" class="form-control" name="email" required="" placeholder="Email *"/>
                                
                                

                            </div>

                        </div>
                    </div>


                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Registrar</button>
<div class="col-lg-12">
                                        <h2>  </h2><br>
                                        <h2>  </h2><br>
                                    
                                        </div>
                                </div>
                            </div>
                        
                    </div>
                            </form>
                </div>
            </div>
               

    </body>


    
    <?php
 
     
       
    include './templates/importJS.php';
       include './templates/footer.php';
    ?>
</html>
