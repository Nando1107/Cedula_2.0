<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premios o Distinciones</title>
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
              <li><a href="#"></i>Visualizar datos</a></li>
            </ul>
            <div class="row-md-6">
              <button type="button" class="btn btn-outline-light btn-block btn-lg">Cerrar Sesión</button>
            </div>
          </nav>
        </div>
        <div class="formularios">
          <br>
          <h3>Premios o Distinciones</h3>
          <p>Incluir los datos relevantes, nombre del premio, organismo que lo otorga, motivos por los que se otorga, etc. 
          </p>
          <hr>
          <div class="row">                
            <form class="row g-3">                  
              <label for="prem_prof" class="control-label">Descripcion del premio</label>                   
              <textarea name="comentarios" rows="5" id="prem_prof" cols="10"></textarea>             
            </form>
          </div>
          <hr>
          <div class="col text-center">
            <button type="button" class="btn btn-success">Guardar</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>