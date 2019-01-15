<!DOCTYPE html>
<html>
<head>
	<title>Servicios</title>
	<?php require 'application/views/layout/bootstrap.php' ?> <!--BOOSTRAP Y MATERIAL-->
</head>
<body>
	<?php require 'application/views/layout/nav.php' ?>
    <!--INICIO DE LA APLICACION-->



<form method="post" action="<?php echo base_url()?>ClientesController/add__">
    <div class="container">
    	<br>
    	<div class="row">
    		<div class="col-md-12">
    			<h3>Agrega un cliente</h3>
    		</div>

            <div class="col-md-3">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" required="" maxlength="15" name="nombre">
                    </div>
                     <button type="submit" class="btn btn-info">Agregar</button>
            </div>
            <div class="col-md-3">
                    <div class="form-group">
                        <label>Apellido</label>
                        <input  type="text" class="form-control" required="" maxlength="15"name="apellido">
                    </div>
            </div>


            <div class="col-md-3">
                    <div class="form-group">
                        <label>Dirección</label>
                        <textarea class="form-control" required="" maxlength="55" name="direccion"></textarea>
                    </div>
                
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Servicio</label>
                    <select required="" multiple="" class="form-control" name="servicios[]">
                        <?php foreach ($servicios as $key => $value):?>
                            <option value="<?php echo $value->id_ser ?>"> <?php echo $value->nombre_ser ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>


    		</div>
    	</div>
    </div>
</form>
    <!--FIN DE LA APLICACION-->
	<?php require 'application/views/layout/footer.php' ?>


</body>
</html>

