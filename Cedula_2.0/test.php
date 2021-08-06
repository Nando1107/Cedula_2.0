<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
a = 0;
function addRow(){
        a++;

        var div = document.createElement('div');
        div.setAttribute('class', 'form-inline');
            div.innerHTML = '<div style="clear:both" class="organismo_'+a+' col-md-3"><input class="form-control" name="organismo_'+a+'" type="text"/></div><div class="organismo_'+a+' col-md-3""><input class="form-control" name="anios_'+a+'" type="text"/></div><div class="organismo_'+a+' col-md-3""><select id="niv_part" class="form-select"><option selected>Seleccionar...</option><option>Amplio</option><option>Suficiente</option><option>Regular</option><option>Poco</option></select></div>';
            document.getElementById('memb_part').appendChild(div);document.getElementById('cmemb_part').appendChild(div);
}
</script>


</head>

    <body>
        <div class="container">
            <h3>Test dinámico</h3>
            <form action="formulario2.php" id="formulario" method="get">    
            <div class="row">
                <div class="col-md-3"><label>Organismo/Membres&iacute;a</label></div>
                <div class="col-md-3"><label>A&ntilde;os Mebres&iacute;a</label></div>
                <div class="col-md-3"><label>Nivel Participaci&oacute;n</label></div>
                <div class="col-md-1"><input type="button" class="btn btn-success" id="add_Row()" onClick="addRow()" value="+" /></div>
            </div>
            <!-- El id="memb_part" indica que la función de JavaScript dejará aquí el resultado -->
            <div class="row" id="memb_part">
            </div>
            <div class="row-md-4">            
                <button type="button" id="save" class="btn btn-outline-dark btn-block">Guardar</button>             
                </div>
            </form>
        </div>

        
        <div class="row">
        <div class="col-md-4">
            <input type="date" name="birthday" id="birthday" value="">
            </div>
        <div class="col-md-4">
        <input type="text" name="age" id="age" value="">
        </div>
        </div>

        
        <script>
        $(function(){
            $('#birthday').on('change', calcularEdad);
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
            $('#age').val(edad);
        }
        </script>

    </body>
</html>		