<nav class = "navbar navbar-inverse">
    <div class = "container-fluid">
        <!--Brand and toggle get grouped for better mobile display -->
        <div class = "navbar-default">
            
            <a class="navbar-brand page-scroll" href="menu.php">
                 <img style="max-width:50px; margin-top: -15px; margin-left: -7%;" src="img/logo.png">
            </a>
            <a class="navbar-brand page-scroll" href="menu.php">
                Inicio
            </a>

            <!--Collect the nav links, forms, and other content for toggling -->
            <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
                <ul class = "nav navbar-nav navbar-right">
                    
                    <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                            PERFIL<span class = "caret"></span>
                        </a>
                        <ul class = 'dropdown-menu' role = menu>
                            <li><a href = 'gestion_perfil.php'>Mi Perfil</a></li>
                        </ul>
                    </li>
                    
                    <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                            RUTINAS<span class = "caret"></span>
                        </a>
                        <ul class = 'dropdown-menu' role = menu>
                            <li><a href = 'crear_rutina.php'>Crear rutina</a></li>
                            <li><a href = 'Ver_rutinas.php'>Ver rutinas</a></li>
                            <li><a href = 'ver_ejercicios.php'>Ver ejercicios</a></li>
                        </ul>
                    </li>
                    
                    <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                            HISTORICO<span class = "caret"></span>
                        </a>
                        <ul class = 'dropdown-menu' role = menu>
                            <li><a href = 'historico.php'>Estadisticas</a></li>
                        </ul>
                    </li>

                    <li class = "dropdown">
                        <?php
//                        session_start();
//                        if ($_SESSION['db_user'] == 'u_avitour_consulta') {
                            ?>
<!--                            <form class="navbar-form navbar-left" method="GET" action="controller/session_controller.php">
                                <div class="form-group">
                                    <input style="width: 120px" type="text" name="db_user" id="db_user" class="form-control" placeholder="Usuario">
                                    <input style="width: 120px" type="password" name="db_pass" id="db_pass" class="form-control" placeholder="Contrase&ntilde;a">
                                </div>
                                <button type="submit" class="btn btn-warning">Ingresar</button>
                            </form>-->
                        <?php // } else { ?>
<!--                            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
                                <span class='glyphicon glyphicon-user' aria-hidden='true'></span>
                                <span class = "caret"></span>-->
                                <?php // echo($_SESSION['db_user']); ?>
<!--                            </a>
                            <ul class = "dropdown-menu" role = "menu">
                                <li><a href = "homeAdmin.php"><strong>Inicio</strong></a></li>
                                <li><a href = "index.php"><strong>Cerrar Sesi&oacute;n</strong></a></li>
                            </ul>-->
                        <?php // } ?>
                    </li>
                </ul>
            </div><!--/.navbar-collapse -->
        </div><!--/.container-fluid -->
</nav>

