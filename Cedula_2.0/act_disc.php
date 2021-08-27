<?php
	$servername = "localhost";
	$database = "cedula0";
	$username = "root";
	$password = "";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
  $idn=1;

  $sql= 'select * 
  from datos_profesor E
  JOIN actualizacion_disciplinar D 
  ON E.fk_id_actualizacion = D.id_actualizacion where id_profesor= 401';
  $query = mysqli_query($conn,$sql);
  if(!$query)
  {
    die('error found'. mysqli_error($conn));
  }
 
  while($row = mysqli_fetch_array($query))  
  {   
    echo ' <tr>
    <td>'.$row['tipo_actualizacion'].'<td>
    <tr>';
    $tipo_actualizacion = $row['tipo_actualizacion']; 

    echo ' <tr>
    <td>'.$row['inst_pais_actualizacion'].'<td>
    <tr>';
    $inst_pais_actualizacion = $row['inst_pais_actualizacion'];    
    
    echo ' <tr>
    <td>'.$row['ano_obt_actualizacion'].'<td>
    <tr>';
    $ano_obt_actualizacion = $row['ano_obt_actualizacion'];
    
    echo ' <tr>
    <td>'.$row['horas_actualizacion'].'<td>
    <tr>';
    $horas_actualizacion = $row['horas_actualizacion'];

     
    }   
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización Disciplinar</title>
    <link rel="shortcut icon" href="C:\xampp\htdocs\Cedula_2.0\Cedula_2.0\img\iconofes.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  </head>
	<body>
		<div class="tapa">
			<div class="Barra">
				<h2>Formularios Cédula 0</h2>
        <hr>
          <ul>
            <li><a href="dat_pers.php"><i class="glyphicon glyphicon-user"></i>  Datos Personales</a></li>
            <li><a href="form_acad.php"><i class="glyphicon glyphicon-pencil"></i>  Formación Académica</a></li>
            <li><a href="cap_doc.php"><i class="glyphicon glyphicon-ok"></i>  Capacitación Docente</a></li>
            <li><a href="act_disc.php"><i class="glyphicon glyphicon-refresh"></i>  Actualización Disciplinar</a></li>
            <li><a href="gest_acad.php"><i class="glyphicon glyphicon-star"></i>  Gestión Académica</a></li>
            <li><a href="prod_acad.php"><i class="glyphicon glyphicon-shopping-cart"></i>  Productos Académicos</a></li>
            <li><a href="exp_prof.php"><i class="glyphicon glyphicon-book"></i>  Experiencia Profesional</a></li>
            <li><a href="exp_di.php"><i class="glyphicon glyphicon-eye-open"></i>  Experiencia en Diseño Ingenieril</a></li>
            <li><a href="logros.php"><i class="glyphicon glyphicon-export"></i>  Logros Profesionales</a></li>
            <li><a href="memb_part.php"><i class="glyphicon glyphicon-credit-card"></i>  Membresías o Participaciones</a></li>
            <li><a href="prem_dist.php"><i class="glyphicon glyphicon-gift"></i>  Premios, distinciones o reconocimientos</a></li>
            <li><a href="part_act.php"><i class="glyphicon glyphicon-wrench"></i>  Participación o actualizacion en PE</a></li>
          </ul>
        <hr>
			</div>
			<div class="contenido">
        <div class="navbar">
          <div class="fesa">
            <img src="img/logo.png">
          </div>
          <div class="unam">
            <img src="img/unam.png">
          </div>
          <nav>
            <ul>
              <li><a href="index.php"></i>Inicio</a></li>
              <li><a href="#"></i>Descargar </a></li>
            </ul>
            <div class="row-md-6">
              <button type="button" class="btn btn-outline-light btn-block btn-lg">Cerrar Sesión</button>
            </div>
          </nav>
        </div>
        <div class="formularios">
          <br>
          <h3>Actualización Disciplinar</h3>
          <hr>
          <div class="col-md-12" id="container2">
            <div id="type_container">
              <div class="row form-group" id="edit-0">
                <div class="col-md-4">
                  <label for="tipo_actualizacion" class="form-label">Tipo de Actualización</label>
                  <input type="text" class="form-control" id="tipo_actualizacion" value="<?php echo $tipo_actualizacion;?>">
                </div>
                <div class="col-md-4">
                  <label for="inst_pais_actualizacion" class="form-label">Institución y País</label>
                  <input type="text" class="form-control" id="inst_pais_actualizacion" value="<?php echo $inst_pais_actualizacion;?>">
                </div>
                <div class="col-md-2">
                  <label for="fecha_actualizacion" class="form-label">Año de Obtención</label>
                  <input type="int" class="form-control" id="fecha_actualizacion" value="<?php echo $ano_obt_actualizacion;?>">
                </div>
                <div class="col-md-2">
                  <label for="horas_actualizacion" class="form-label">Horas</label>
                  <input type="int" class="form-control" id="horas_actualizacion" value="<?php echo $horas_actualizacion;?>">
                </div>
                <div class="col-md-12">
                  <br>
                  <a class="add-type pull-right" href="javascript: void(0)" title="Click para agregar un nuevo campo">
                    <button type="button" class="btn btn-info">Agregar otro</button>
                  </a>
                </div>
              </div> 
            </div>
            <div id="type-container" class="hide">
              <div class="row form-group type-row" id="">
                <div class="col-md-4">
                  <label for="tipo_actualizacion" class="form-label">Tipo de Actualización</label>
                  <input type="text" class="form-control" id="tipo_actualizacion">
                </div>
                <div class="col-md-4">
                  <label for="inst_pais_actualizacion" class="form-label">Institución y País</label>
                  <input type="text" class="form-control" id="inst_pais_actualizacion">
                </div>
                <div class="col-md-2">
                  <label for="fecha_actualizacion" class="form-label">Año de Obtención</label>
                  <input type="int" class="form-control" id="fecha_actualizacion">
                </div>
                <div class="col-md-2">
                  <label for="horas_actualizacion" class="form-label">Horas</label>
                  <input type="int" class="form-control" id="horas_actualizacion">
                </div>
                <div class="col-md-12">
                  <br>
                  <a class="remove-type pull-right" targetDiv="" data-id="0" href="javascript: void(0)">
                    <button type="button" class="btn btn-danger">Borrar</button>
                  </a>
                </div>
              </div>
            </div>
            <hr>
          </div>
          <div class="col text-center">
            <button type="button" class="btn btn-success">Guardar</button>
          </div>
          <script>
              jQuery(document).ready(function () {
                  var doc = $(document);
                  jQuery('a.add-type').die('click').live('click', function (e) {
                      e.preventDefault();
                      var content = jQuery('#type-container .type-row'),
                          element = null;
                      for (var i = 0; i < 1; i++) {
                          element = content.clone();
                          var type_div = 'teams_' + jQuery.now();
                          element.attr('id', type_div);
                          element.find('.remove-type').attr('targetDiv', type_div);
                          element.appendTo('#type_container');
                      }
                  });

                  jQuery(".remove-type").die('click').live('click', function (e) {
                      var didConfirm = confirm("¿Estás seguro que quieres eliminar la fila?");
                      if (didConfirm == true) {
                          var id = jQuery(this).attr('data-id');
                          var targetDiv = jQuery(this).attr('targetDiv');
                          //if (id == 0) {
                          //var trID = jQuery(this).parents("tr").attr('id');
                          jQuery('#' + targetDiv).remove();
                          // }
                          return true;
                      } else {
                          return false;
                      }
                  });
              });
          </script>
        </div>
      </div>
    </div>
  </body>
</html>
