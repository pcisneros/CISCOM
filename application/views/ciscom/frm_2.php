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

// $showdata = array(
// 			'id' => 'showdata',
// 			'name' => 'btnshowdata',
// 			'type' => 'submit',
// 			'value' => 'Show Data',
// 			'class' => 'b buttons',
// 			 );

$search = array(
			'id' => 'search',
			'name' => 'search',
			'type' => 'submit',
			'value' => 'Search',
			'class' => 'b buttons',
			 );
?>


<?php
echo form_open('http://localhost/CISCOM/ciscom/venta/irud','id="frmventa"')
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo base_url('Bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('Bootstrap/css/main.css'); ?>" rel="stylesheet">


<div class="col-md-4 col-md-offset-4">
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
			<td colspan="2" align="center"><?php echo form_input($btnsave); ?> <?php echo form_input($btnupdate); ?> <?php echo form_input($btndelete); ?><?php echo form_input($search); ?></td>
		</tr>
	</table>

</div>

<div class="col-md-4 col-md-offset-4" align="center">
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
		var_dump($ventas);
	 if ($ventas != FALSE) {
			foreach ($ventas as  $row) 
			{
				echo "<tr>";
					echo "<td>".$row->COD_VEN."</td>";
					echo "<td>".$row->CLIENTE."</td>";
					echo "<td>".$row->fecha."</td>";
				echo "</tr>";
			}
		}else {
				echo "<b> Lo Sentimos!!, </b> La aplicación no pudo conectarse a la Base de Datos";
			}
		?>
	</table>
</div>

<?php
echo form_close();
?>
