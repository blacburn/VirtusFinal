<?php ?>
<html>
    <head>
        <?php
        include ('./templates/importCss_1.php');
        include('templates/headerAdmin.php');
        include ('./daos/daoRutina.php');
        ?>
        <title>Ver ejercicios</title>
        
<!--        <link rel="stylesheet" href="./css/jquery.dataTables.css" type="text/css"> -->
        <link rel="stylesheet" href="./css/jquery-ui.css" type="text/css"> 
        <link rel="stylesheet" href="./css/jquery.dataTables.css" type="text/css"> 
        
        <script src="./js/jquery.js"></script> 
        <script src="./js/jquery.dataTables.js"></script> 
        <script src="./js/jquery.dataTables.min.js"></script> 
        
         <script language="javascript" type="text/javascript" >
    

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#reporte tfoot th').each( function () {
        var title = $(this).text();
        
        $(this).html( '<input type="text" placeholder="'+title+'" size="2"/>' );
    } );
 
    // DataTable
    var table = $('#reporte').DataTable({
        
    "language": {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
	"sZeroRecords":    "No se encontraron resultados",
        "sSearch":         "Buscar:",
        "sLoadingRecords": "Cargando...",
        "sEmptyTable":     "NingÃºn dato disponible en esta tabla",
	"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Ãšltimo",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
	},
    }
    });
    
    $('#reporte tbody')
        .on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column;
 
            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        } );
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
    </script>
    </head>
    <body>  
        <div class="col-sm-10">
           <?php
        include './templates/importJS.php';
        require_once('./conf.php');
        require_once('./daos/dao.php');
        $dao = new dao(DB_HOST,DB_USER_CREATOR, DB_PASSWORD_CREATOR, DB_NAME);
        $dao->conectar();
        $rutina = new daoRutina($dao);  
        
        $arreglo=$rutina->buscarRutinasTodo();
        
        TablaReporte($arreglo,$rutina);
        
        function TablaReporte($cArreglo,$rutina){
            
            
            echo '<table id="reporte" class="display" cellspacing="0" width="100%"> '
                 . '<thead  style="display: table-row-group"><tr><th>'."TIPO EJERCICIO".'</th><th>'."NOMBRE EJERCICIO".'</th> <th>'."NIVEL".'</th> <th>'."DESCRIPCION".'</th> </tr></thead>
                    <tfoot>
            <tr>
                <th>tipo ejer</th>
                <th>nombre ejercicio</th>
                <th>nivel</th>
                <th>descripcion</th>
            </tr>
        </tfoot>    
                    <tbody>';
                        foreach($cArreglo as $posicion=>$valor){
                            
                            $i=1;
                            
                            $arreglo2=$rutina->buscarRutinasxTipo($valor[1]);
                            
                            echo '<tr><td>'.$arreglo2[0][1]. ' </td> <td>'.$valor[2].
                                    '  </td> <td>'.$valor[3].'  </td> <td>'.$valor[4].
                                    '  </td> </tr>';
                            $i+=1;
                            
                        }
                        
                        '</tbody></table>';
                        
            
        }
        
        
        
        
        ?>
            
            
            
            
            
            
        
        </div>
        
        ?>
            
        </div>


        
    </body>
</html>   