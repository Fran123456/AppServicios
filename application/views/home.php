<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require 'layout/bootstrap.php' ?> <!--BOOSTRAP Y MATERIAL-->
</head>
<body>
    <!--INICIO DE LA APLICACION-->
    <?php require 'application/views/layout/nav.php' ?>

    <div class="container">
    	<div class="row">
    		<div class="col-md-4">
    			<br><br>
    					<!-- Card -->
							<div class="card text-center">
							  <!-- Card image -->
							  <div class="view overlay">
							    <img  height="200" width="400" src="<?php echo base_url()?>/asset/img/usuarios.png" alt="Card image cap">
							  </div>

							  <!-- Card content -->
							  <div class="card-body">
							    <!-- Title -->
							    <h4 class="card-title">Gestión de clientes</h4>
							    <!-- Text -->
							    <!-- Button -->
							    <a href="<?php echo base_url()?>Clientes" class="btn btn-primary">Ir</a>

							  </div>
							</div>
							<!-- Card -->
    		</div>

    		<div class="col-md-4">
    			<br><br>
    					<!-- Card -->
							<div class="card text-center">
							  <!-- Card image -->
							  <div class="view overlay">
							    <img  height="200" width="450" src="<?php echo base_url()?>/asset/img/servicios.jpg" alt="Card image cap">
							  </div>

							  <!-- Card content -->
							  <div class="card-body">
							    <!-- Title -->
							    <h4 class="card-title">Gestión de servicios</h4>
							    <!-- Text -->
							    <!-- Button -->
							    <a href="<?php echo base_url()?>Servicios" class="btn btn-primary">Ir</a>

							  </div>
							</div>
							<!-- Card -->
    		</div>


    	

    		<div class="col-md-4">
    			<br><br>
    					<!-- Card -->
							<div class="card text-center">
							  <!-- Card image -->
							  <div class="view overlay">
							    <img  height="200" width="400" src="<?php echo base_url()?>/asset/img/detalle.png" alt="Card image cap">
							  </div>

							  <!-- Card content -->
							  <div class="card-body">
							    <!-- Title -->
							    <h4 class="card-title">Gestión de detalle</h4>
							    <!-- Text -->
							    <!-- Button -->
							    <a href="<?php  ?>" class="btn btn-primary">Ir</a>

							  </div>
							</div>
							<!-- Card -->
    		</div>
    	</div>
    </div>

    <!--FIN DE LA APLICACION-->
	<?php require 'layout/footer.php' ?>
</body>
</html>