<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require 'layout/bootstrap.php' ?> <!--BOOSTRAP Y MATERIAL-->
</head>
<body>
    <!--INICIO DE LA APLICACION-->


    <div class="container">
    	<div class="row">
    		<div class="col-md-4">

    			<br><br>
    					<!-- Card -->
							<div class="card text-center">
							  <!-- Card image -->
							  <div class="view overlay">
							    <img class="text-center img-circle img-tumblr" height="100" width="100" src="<?php echo base_url()?>/asset/img/fbgroups.png" alt="Card image cap">
							    <a href="#!">
							      <div class="mask rgba-white-slight"></div>
							    </a>
							  </div>

							  <!-- Card content -->
							  <div class="card-body">

							    <!-- Title -->
							    <h4 class="card-title">Card title</h4>
							    <!-- Text -->
							    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							    <!-- Button -->
							    <a href="#" class="btn btn-primary">Button</a>

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