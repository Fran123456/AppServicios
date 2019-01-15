<!DOCTYPE html>
<html>
<head>
	<title>Servicios</title>
	<?php require 'application/views/layout/bootstrap.php' ?> <!--BOOSTRAP Y MATERIAL-->
</head>
<body>
	<?php require 'application/views/layout/nav.php' ?>
    <!--INICIO DE LA APLICACION-->




    <div class="container">
    	<br>
    	<div class="row">

    		<div class="col-md-12">
    			  <?php if($this->session->flashdata('success')): ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
					   <?php echo $this->session->flashdata('success') ?>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
	             <?php endif; ?>


	              <?php if($this->session->flashdata('edit')): ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
					   <?php echo $this->session->flashdata('edit') ?>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
	             <?php endif; ?>


	             <?php if($this->session->flashdata('delete')): ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
					   <?php echo $this->session->flashdata('delete') ?>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
	             <?php endif; ?>
    		</div>

              

    		<div class="col-md-6">
    			<h3>Clientes</h3>
    		</div>
    		<div class="col-md-6 text-right">
    			<a class="btn btn-info" href="<?php echo base_url()?>Agregar-cliente">Agregar</a>
    		</div>

    		<div class="col-md-12">
    			<table class="table" id="dtBasicExample">
    				<thead>
    					<tr>
    						<th>#</th>
    						<th>Nombre</th>
    						<th>Apellido</th>
    						<th>Dirección</th>
    						<th>Pago</th>
                            <th>Ver</th>
    						<th>Editar</th>
    						<th>Eliminar</th>
    					</tr>
    				</thead>
    				<tbody>
    					<?php foreach ($data as $key => $value):?>
    					<tr>
    						<td><?php echo $key+1 ?></td>
    						<td><?php echo $value->nombre_cli ?></td>
    						<td>$ <?php echo $value->apellido_cli ?></td>
    						<td><?php echo $value->direccion_cli ?></td>
    						<td>$ <?php echo $value->pago_cli ?></td>
                            <td> <a class="btn btn-warning" href="<?php echo base_url() . 'Editar-Servicio/'. $value->id_cli?>">Editar</a></td>
    						<td> <a class="btn btn-warning" href="<?php echo base_url() . 'Editar-Servicio/'. $value->id_cli?>">Editar</a></td>
                            <td> <a class="btn btn-danger" href="<?php echo base_url() . 'Eliminar-Servicio/'. $value->id_cli?>">Eliminar</a></td>
    						
    					</tr>
    				    <?php endforeach; ?>
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>

    <!--FIN DE LA APLICACION-->
	<?php require 'application/views/layout/footer.php' ?>

	<script type="text/javascript">
		$(document).ready(function () {
		$('#dtBasicExample').DataTable();
	    $('.dataTables_length').addClass('bs-select');
	    });
	</script>
</body>
</html>

