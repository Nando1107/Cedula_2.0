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

  $sql= 'select * from datos_profesor where id_profesor= 401';
  $query = mysqli_query($conn,$sql);
  if(!$query)
  {
    die('error found'. mysqli_error($conn));
  }
 
  while($row = mysqli_fetch_array($query))  
  {   
    echo ' <tr>
    <td>'.$row['apellido_pat'].'<td>
    <tr>';
    $apellido_pat = $row['apellido_pat']; 

    echo ' <tr>
    <td>'.$row['apellido_mat'].'<td>
    <tr>';
    $apellido_mat = $row['apellido_mat'];    
    
    echo ' <tr>
    <td>'.$row['nombre'].'<td>
    <tr>';
    $nombre = $row['nombre'];
    
    echo ' <tr>
    <td>'.$row['edad'].'<td>
    <tr>';
    $edad = $row['edad'];

    echo ' <tr>
    <td>'.$row['fecha_nac'].'<td>
    <tr>';
    $fecha_nac = $row['fecha_nac'];

    echo ' <tr>
    <td>'.$row['puesto_institucion'].'<td>
    <tr>';
    $puesto_institucion = $row['puesto_institucion'];  
    }   
	mysqli_close($conn);
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Personales</title>
    <link rel="shortcut icon" href="C:\xampp\htdocs\Cedula_2.0\Cedula_2.0\img\iconofes.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
              <button type="button" class="btn btn-outline-light btn-lg">Cerrar Sesión</button>
            </div>
          </nav>
        </div>
				<div class="formularios">
          <br>
          <h3>Datos personales</h3>
          <p>
            Ingrese la categoría de puesto en la institución, usando la siguiente nomenclatura:<br>
            Profesor de Tiempo Completo (PTC).<br>
            Profesor de Medio Tiempo (PMT).<br>
            Profesor por Horas (PPH).<br>
            Profesor de Asignatura (PDA).<br>
            Otro (OTR) (especificar).</p>
          <hr>
          <form class="row g-0">
            <div class="col-md-4">
              <label for="apellido_pat" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" value="<?php echo $apellido_pat;?>" id="apellido_pat">  
              
        
<!-- <label>Nombre:</label> <input id="nombre" type="text" name="nombre" value="<?php echo $nombre;?>"> -->





            </div>
            <div class="col-md-4">
              <label for="apellido_mat" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" value="<?php echo $apellido_mat;?>" id="apellido_mat"  >
            </div>
            <div class="col-md-4">
              <label for="nombre" class="form-label">Nombre(s)</label>
              <input type="text" class="form-control" id="nombre" value="<?php echo $nombre;?>">
            </div>
            <div class="col-md-12"><br></div>
            <div class="col-md-3">
              <label for="edad" class="form-label">Edad</label>
              <input type="" readonly class="form-control" id="edad" name="edad" value="<?php echo $edad;?>"> <!--Hacer comparacion con fecha de nac para que no sea una entrada y se ponga en automatico-->
            </div>
            <div class="col-md-5">
              <label for="fecha_nac" class="form-label">Fecha de Nacimiento</label>
              <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="<?php echo $fecha_nac;?>">
            </div>
            <div class="col-md-4">
              <label for="puesto_institucion" class="form-label">Puesto en la Institución</label>
              <select id="puesto_institucion" class="form-control">
                <option selected>Seleccione una opción...</option>
                <option>PTC</option>
                <option>PMT</option>
                <option>PPH</option>
                <option>PDA</option>
                <option>OTR</option>
                <option selected><?php echo $puesto_institucion;?></option>
              </select>
            </div>
          </form>
          <hr>
          <div class="col text-center">
            <button type="button" class="btn btn-success">Guardar</button>
            <?php isset($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?>
          </div>
				</div>
			</div>
		</div>
    <script>
      $(function(){
          $('#fecha_nac').on('change', calcularEdad);
      });
      
      function calcularEdad() {
          
          fecha = $(this).val();
          var hoy = new Date();
          var cumpleanos = new Date(fecha);
          var edad = hoy.getFullYear() - cumpleanos.getFullYear();
          var m = hoy.getMonth() - cumpleanos.getMonth();

          if (m < 0 || (m === 0 && hoy.getDate() <= cumpleanos.getDate())) {
              edad--;
          }
          $('#edad').val(edad);
      }
    </script>
  
</body>
</html>
