
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../../bootstrap-4.5.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../estilos/css/estiloMenu.css " />
<link rel="stylesheet" type="text/css" href="../../estilos/css/estilo.css " />
<link rel="stylesheet" type="text/css" href="../../estilos/css/easy-responsive-tabs.css " />
    <script src="../../estilos/js/jquery-1.9.1.min.js"></script>
    <script src="../../estilos/js/estiloMenu.js"></script>
    <script src="../../estilos/js/easyResponsiveTabs.js"></script>
    <script src="../../estilos/js/bootstrap.js"></script>

<script type="text/javascript">
  function mayus(e) {
    e.value = e.value.toUpperCase();
}
</script>
</head>
<body>
<?php include('../../header/header.php');?>
<div class="jumbotron">
  <h4 class="text-center"><strong>GESTI&Oacute;N DE USUARIOS</strong></h4>
     <div id="container-fluid">
 <!--<h1 style="font-size:15px" class="text-center"><strong>USUARIOS</strong></h1>-->
       
        <!--Horizontal Tab-->

        <div id="parentHorizontalTab" style="margin-top: 50%;">
            <ul class="resp-tabs-list hor_1">
               <!-- <li>Horizontal 1</li>-->
                <li ><strong class="glyphicon glyphicon-plus">NUEVO</strong></li>
                <li><strong>BUSCAR</strong></li>
                <li><strong>ACTUALIZAR</strong></li>
                <li><strong>ELIMINAR</strong></li>
                <!--<a href="../../menus/menuA.php"><li><strong><p style="color: black;">REGRESAR A MEN&Uacute; PRINCIPAL</p></strong></li></a>
                <a href="#"><li><strong><p style="color: black;">CERRAR SESI&Oacute;N</p></strong></li></a>-->
            </ul>
            <!--<div class="resp-tabs-container hor_1" style="background-color:#e2f0fb; border-color: black;">-->
                
                  <div class="resp-tabs-container hor_1">  
                <div >

                <!-- <div class="panel panel-primary">
  <div class="panel-heading">
   <h4 class="panel-title text-center "><strong>Usuario</strong></h4>
  </div>
 
  <div class="panel-body">-->
  <div class="container-fluid">

<div class="form-group">
                   <form action="" method="post">
   <div class="row">
<div class="col-md-3">
    <label class="control-label "><strong>Nombres</strong></label>
    <input type="text" class="form-control formatoInput"  name="primerNombreCN" id="primerNombreCN" required="required" style="background-color: #001c2e; color: #FFF;" onkeyup="mayus(this);">
  </div>
<div class="col-md-3">
    <label class="control-label"><strong>Apellidos</strong></label>
    <!--<input type="text" class="form-control formatoInput" name="primerNombreCN" id="primerNombreCN" required="required" style="background-color: rgba(122, 114, 81, 0.7); color: #FFF;">-->
<input type="text" class="form-control formatoInput" name="primerNombreCN" id="primerNombreCN" required="required" style="background-color: #001c2e; color: #FFF;" onkeyup="mayus(this);">
  </div>
<div class="col-md-3">
    <label class="control-label"><strong>Cui</strong></label>
    <input type="text" class="form-control formatoInput"  name="primerNombreCN" id="primerNombreCN" required="required" style="background-color: #001c2e; color: #FFF;" onkeyup="mayus(this);">
  </div>
<div class="col-md-3">
    <label class="control-label"><strong>Fecha de nacimiento</strong></label>
    <input type="date" class="form-control formatoInput"  name="primerNombreCN" id="primerNombreCN" required="required" style="background-color: #001c2e; color: #FFF;" onkeyup="mayus(this);">
  </div>

</div>

<div class="row">

  <div class="col-md-3">
    <label class="control-label "><strong>Nombres</strong></label>
    <input type="text" class="form-control formatoInput"  name="primerNombreCN" id="primerNombreCN" required="required" style="background-color: #001c2e; color: #FFF;" onkeyup="mayus(this);">
  </div>

<div class="col-md-3">
    <label class="control-label"><strong>Apellidos</strong></label>
    <input type="text" class="form-control formatoInput"  name="primerNombreCN" id="primerNombreCN" required="required" style="background-color: #001c2e; color: #FFF;" onkeyup="mayus(this);">
  </div>
<div class="col-md-3">
    <label class="control-label"><strong>Cui</strong></label>
    <input type="text" class="form-control formatoInput"  name="primerNombreCN" id="primerNombreCN" required="required" style="background-color: #001c2e; color: #FFF;" onkeyup="mayus(this);">
  </div>

<div class="col-md-3">
    <label class="control-label"><strong>Fecha de nacimiento</strong></label>
    <input type="date" class="form-control formatoInput"  name="primerNombreCN" id="primerNombreCN" required="required" style="background-color: #001c2e; color: #FFF;" onkeyup="mayus(this);">
  </div>

</div>
<br>
<div class="col text-center">
  <button class="btn btn-danger btn-sm desbloquea " type="reset"  onclick="btn_guardar_dato_nc()"><span class='glyphicon glyphicon-floppy-disk'></span>Guardar</button>
 <button class="btn btn-primary btn-sm desbloquea "  onclick="btn_guardar_dato_nc()"><span class='glyphicon glyphicon-floppy-disk' type="button"></span>Guardar</button></div>
                   </form>
</div></div>
<br>
<!-- tabla -->

 <!--<div class="container-fluid">-->
        <table class="table table-hover" width="100%">
            <caption class="text-center">DATOS CLIENTE</caption>
            <thead>
              


<!--cuerpo de la tabla que me muestra los datos segun el numero de registros -->

  <tr>
  <!-- <th class="texto-blanco text-center">C&oacute;digo</th>-->
  <th class="texto-blanco text-center">C&oacute;digo</th>
  <th class="texto-blanco text-center">Nombres</th>
  <th class="texto-blanco text-center">Apellidos</th>
  <th class="texto-blanco text-center">Nacionalidad</th>
  <th class="texto-blanco text-center">dpi</th>
  <th class="texto-blanco text-center">Nit</th>
  <th class="texto-blanco text-center">Pasaporte</th>
  <th></th>
  <th></th>
  
  </tr>
  </thead>
  
  <tbody>
  <tr>
  
  <td data-label="C&oacute;digo"><?php echo 1;?></td>
  <td data-label="Nombres"><?php echo 2;?></td>
  <td data-label="Apellidos"><?php echo 3;?></td>
  <td data-label="Nacionalidad" ><?php echo 2345;?></td>
  <td data-label="Dpi"><?php echo 4; ?></td>
  <td data-label="Nit"><?php echo 5; ?></td>
  <td data-label="Pasaporte"><?php echo 6;?></td>  <td data-label="Modificar"><button class="btn btn-warning btn-xs tBoton" data-toggle="modal" data-target="#modalModificar" 
  onclick="btn_editar('<?php //echo $cod;?>');"><span class="glyphicon glyphicon-edit"></span>Modificar</button></td>
  <!--<td data-label="Eliminar"> <a  class="btn btn-danger btn-xs tBoton" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');"
  href="cambiaEstadoProducto.php?id=<?php //echo $row->codigoProducto;?>"><span class="glyphicon glyphicon-remove"></span>Eliminar</a>
  </td>-->
  <td data-label="Eliminar"><button type="button" class="btn btn-danger btn-xs tBoton" data-toggle="modal" data-target="#modalEliminar" 
  onclick="btn_eliminar('<?php //echo $cod;?>');"><span class="glyphicon glyphicon-remove"></span>Eliminar</button>
  </td>
  </tr>
  </tbody>
  <?php
  //}
  ?>
  </table>
  <?php //else:?>
  <br>
  <div class="alert alert-danger text-center" role="alert">
  <strong>No existen datos!</strong>  </div>
  <?php //endif;?>
  <!--termina tabla-->
 <!-- </div>-->  <!-- termina div container-->
<!--termina tabla -->

                    <br>
                    <br>
                    <p>Tab 2 Container</p>



                </div>


                 <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis bb.
                    <br>
                    <br>
                    <p>Tab 3 Container</p>
                </div>
                 <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis bb.
                    <br>
                    <br>
                    <p>Tab 3 Container</p>
                </div>
                 <div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis bb.
                    <br>
                    <br>
                    <p>Tab 3 Container</p>
                </div>
           <!--<div>
                   <a href="../../menus/menuA.php"><li><strong><p style="color: black;">REGRESAR A MEN&Uacute; PRINCIPAL</p></strong></li></a>
                    <br>
                    <br>
                    <p>Tab 4 Container</p>
                </div>

                 <div>
                    SALIENDO DEL SISTEMA
                    <br>
                    <br>
                    <p>Tab 5 Container</p>
                </div>-->

        </div>

        <div id="nested-tabInfo">
            Selected tab: <span class="tabName"></span>
        </div>
        <br/>
        <br/>
        <br/>



</div><!-- Termina Jumbotron-->

</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });

</script>

