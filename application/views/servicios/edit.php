<!DOCTYPE html>
<html>
<head>
	<title>Servicios</title>
	<?php require 'application/views/layout/bootstrap.php' ?> <!--BOOSTRAP Y MATERIAL-->
</head>
<body>
	<?php require 'application/views/layout/nav.php' ?>
    <!--INICIO DE LA APLICACION-->



<form method="post" action="<?php echo base_url()?>ServiciosController/edit__">
    <div class="container">
    	<br>
    	<div class="row">
    		<div class="col-md-12">
    			<h3>Edite un servicio</h3>
    		</div>

            <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombre del servicio</label>
                        <input type="text" value="<?php echo $data[0]['nombre_ser'] ?>" class="form-control" required="" maxlength="100" name="nombre">
                    </div>
            </div>
            <div class="col-md-3">
                    <div class="form-group">
                        <label>Precio del servicio $</label>
                        <input type="number" value="<?php echo $data[0]['precio_ser'] ?>" step="0.01" class="form-control" min="0.00" required="" name="precio">
                    </div>
            </div>


            <div class="col-md-3">
                    <div class="form-group">
                        <label>Fecha</label>
                        <input type="date" value="<?php echo $data[0]['fecha_ser'] ?>"  class="form-control"required="" name="fecha">
                    </div>
                
            </div>

           <div class="col-md-3">
                    <div class="form-group">
                        <label>Descuento $</label> 
                        <input type="number" step="0.01" value="<?php echo $data[0]['descuento_ser'] ?>" class="form-control" min="0.00" required="" name="descuento">
                    </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $data[0]['id_ser'] ?>">

    		<div class="col-md-12"> 
                <button type="submit" class="btn btn-info">Editar</button>
            </div>

    
    		</div>
    	</div>
    </div>
</form>
    <!--FIN DE LA APLICACION-->
	<?php require 'application/views/layout/footer.php' ?>


</body>
</html>

