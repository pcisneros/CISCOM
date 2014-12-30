<?php

$cod_prod  = array(
			'id' => 'cod_prod',
			'name' => 'cod_prod',
			'class' => 'form-control',
			'placeholder' => 'Id. del Producto',
			);

$nom_prod  = array(
			'id' => 'nom_prod',
			'name' => 'nom_prod',
			'class' => 'form-control',
			'placeholder' => 'Descripción del Producto',
			);

$precio  = array(
			'id' => 'precio',
			'name' => 'precio',
			'class' => 'form-control',
			'placeholder' => 'Precio',
			);

$btnsave = array(
			'id' => 'btnsave',
			'name' => 'btnsave',
			'type' => 'submit',
			'value' => 'Save',
			'class' => 'b buttons',
			 );
$btnupdate = array(
			'id' => 'btnupdate',
			'name' => 'btnupdate',
			'type' => 'submit',
			'value' => 'Update',
			'class' => 'b buttons',
			 );
$btndelete = array(
			'id' => 'btndelete',
			'name' => 'btndelete',
			'type' => 'submit',
			'value' => 'Delete',
			'class' => 'b buttons',
			 );
?>

<!-- PARTE DE VENTAS -->

<?php

$cod_ven = array(
			'id' => 'cod_ven',
			'name' => 'cod_ven',
			'class' => 'form-control',
			'placeholder' => 'ID. de venta',			
			 );

$cliente = array(
			'id' => 'cliente',
			'name' => 'cliente',
			'class' => 'form-control',
			'placeholder' => 'Nombre del Cliente',
			 );

$fecha = array(
		'id' => 'fecha',
		'name' => 'fecha',
		'class' => 'form-control',
		'placeholder' => 'Fecha de ingreso',
		 );

$btnsave = array(
			'id' => 'btnsave',
			'name' => 'btnsave',
			'type' => 'submit',
			'value' => 'Save',
			'class' => 'b buttons',
			 );
$btnupdate = array(
			'id' => 'btnupdate',
			'name' => 'btnupdate',
			'type' => 'submit',
			'value' => 'Update',
			'class' => 'b buttons',
			 );
$btndelete = array(
			'id' => 'btndelete',
			'name' => 'btndelete',
			'type' => 'submit',
			'value' => 'Delete',
			'class' => 'b buttons',
			 );

$showdata = array(
			'id' => 'showdata',
			'name' => 'btnshowdata',
			'type' => 'submit',
			'value' => 'Show Data',
			'class' => 'b buttons',
			 );

$search = array(
			'id' => 'search',
			'name' => 'search',
			'type' => 'submit',
			'value' => 'Search',
			'class' => 'b buttons',
			 );
?>

<?php 
echo form_open('http://172.16.100.66/CISCOM/ciscom/ciscom/irud','id="frmprod"')
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('Bootstrap/css/main.css'); ?>" rel="stylesheet">
	<title>Formulario | Productos</title>
</head>
<body>

<table class="table">
	<tr>
		<td align="right"> <img class="imgmod" type ="button" src="resources/img/modal/shoprod.png" data-toggle ="modal" data-target ="#prod"></td>
		<td align="left"> <img class="imgmod" type ="button" src="resources/img/modal/buy.png" data-toggle ="modal" data-target ="#venta"></td>
	</tr>
</table>


<!-- MODAL PRODUCTO -->

	<div class="container" style="margin-top :60px;">
		<!-- <button type="button" class="btn btn-info" data-toggle ="modal" data-target ="#miventana">
			Abrir Modal
		</button> -->
		<!-- <img class="imgmod" type ="button" src="resources/img/modal/shoprod.png" data-toggle ="modal" data-target ="#prod"> -->
		<div class="modal fade" id="prod" tabindex ="-1" role ="dialog" aria-labellebdy ="myModalLabel" aria-hidden ="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss ="modal" aria-hidden ="true">&times;</button>
						<h2 class="titlemodal">Registro de Productos</h2>
					</div>
					<div class="modal-body">
						<div >
							<div class="alert alert-info"> <?php echo "<h4> <center>".$this->session->flashdata('msj'). " </center> </h4>" ?></div>
								<table class="table">
									<tr>
										<th colspan="3" class="header">FORMULARIO DE PRODUCTOS</th>
									</tr>
									<tr align="center">
										<td colspan="2" class="labels">ID. Producto:</td>
										<td><?php echo form_input($cod_prod); ?></td>
									</tr>
									<tr align="center">
										<td colspan="2" class="labels">Descripcion del Producto</td>
										<td><?php echo form_input($nom_prod); ?></td>
									</tr>
									<tr align="center">
										<td colspan="2" class="labels">Precio</td>
										<td><?php echo form_input($precio); ?></td>
									</tr>
									<tr align="center">
										<td align="center" colspan="3"><?php echo form_input($btnsave); ?><?php echo form_input($btnupdate); ?><?php echo form_input($btndelete); ?> </td>
										<!-- <td align="center"><?php //echo form_input($btnupdate); ?></td>
										<td align="center"><?php //echo form_input($btndelete); ?></td> -->
									</tr>
								</table>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss ="modal">
							Cerrar
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- MODAL VENTAS -->

	<div class="container" style="margin-top :60px;">
		<!-- <button type="button" class="btn btn-info" data-toggle ="modal" data-target ="#miventana">
			Abrir Modal
		</button> -->
		<!-- <img class="imgmod" type ="button" src="resources/img/modal/buy.png" data-toggle ="modal" data-target ="#venta"> -->
		<div class="modal fade" id="venta" tabindex ="-1" role ="dialog" aria-labellebdy ="myModalLabel" aria-hidden ="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss ="modal" aria-hidden ="true">&times;</button>
						<h1 class="titlemodal">Registro de Ventas</h1>
					</div>
					<div class="modal-body">
						<div>
							<table class="table">

								<div class="alert alert-info">
									<?php echo "<h4><center>".$this->session->flashdata('msj'). "</center></h4>"?>
								</div>
								<tr>
									<th colspan="2" class="header">FORMULARIO DE VENTAS</th>
								</tr>
								<tr>
									<td class="labels">Cod. de la Venta:</td>
									<td><?php echo form_input($cod_ven); ?></td>
								</tr>
								<tr>
									<td class="labels">Datos de Cliente</td>
									<td><?php echo form_input($cliente); ?></td>
								</tr>
								<!-- <tr>
									<td class="labels">Fecha</td>
									<td><?php // echo form_input($fecha); ?></td>
								</tr> -->
								<tr>
									<td colspan="2" align="center"><?php echo form_input($btnsave); ?> <?php echo form_input($btnupdate); ?> <?php echo form_input($btndelete); ?> <?php echo form_input($showdata); ?> <?php echo form_input($search); ?></td>
								</tr>
							</table>

						</div>

						<div align="center">
							<table class="table" id="tbventa">
								<tr>
									<th colspan="3" class="header">Ventas</th>
								</tr>
								<tr>
									<th class="tablehead">Id. de Venta</th>
									<th class="tablehead">Descripcion del Cliente</th>
									<th class="tablehead">Fecha</th>
								</tr>
								<?php
								if ($ventas != FALSE) {
									foreach ($ventas as  $row) {
											echo "<tr>";
												echo "<td>".$row->COD_VEN."</td>";
												echo "<td>".$row->CLIENTE."</td>";
												echo "<td>".$row->fecha."</td>";
											echo "</tr>";
									} 
								}else {
										echo "No hay Datos para esta Tabla";
									}
								?>

							</table>
						</div>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss ="modal">
						Cerrar
					</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url('Bootstrap/js/bootstrap.min.js'); ?>"></script>
<?php
echo form_close();
?>





