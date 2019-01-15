<!DOCTYPE html>
<html>
<head>
	<title>Servicios</title>
	<?php require 'application/views/layout/bootstrap.php' ?> <!--BOOSTRAP Y MATERIAL-->
</head>
<body>
	<?php require 'application/views/layout/nav.php' ?>
    <!--INICIO DE LA APLICACION-->



<form method="post" action="<?php echo base_url()?>ServiciosController/add__">
    <div class="container">
    	<br>
    	<div class="row">
    		<div class="col-md-12">
    			<h3>Agrega un servicio</h3>
    		</div>

            <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombre del servicio</label>
                        <input type="text" class="form-control" required="" maxlength="100" name="nombre">
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group">
                        <label>Precio del servicio</label>
                        <input type="number" step="0.01" class="form-control" min="0.00" required="" name="precio">
                    </div>
            </div>


            <div class="col-md-3">
                    <div class="form-group">
                        <label>Fecha</label>
                        <input type="date"  class="form-control"required="" name="fecha">
                    </div>
                
            </div>

           <div class="col-md-3">
                    <div class="form-group">
                        <label>Descuento</label>
                        <input type="number" step="0.01" class="form-control" min="0.00" required="" name="descuento">
                    </div>
            </div>

    		<div class="col-md-12"> 
                <button type="submit" class="btn btn-info">Agregar</button>
            </div>

    
    		</div>
    	</div>
    </div>
</form>
    <!--FIN DE LA APLICACION-->
	<?php require 'application/views/layout/footer.php' ?>


</body>
</html>

