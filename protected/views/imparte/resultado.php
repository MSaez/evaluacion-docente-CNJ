<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->pageTitle=Yii::app()->name . ' - Promedio';
$this->breadcrumbs=array(
	'Asignaciones'=>array('index'),
	'Promedio: '.$profesor->pro_rut,
);
?>

<h2>Promedio de Evaluaciones (con <?php echo $div.' '; ?>evaluaci&oacute;n(es))</h2>
</br>

<table class="table">
	<tr>
		<td>
			<span>Profesor</span>
		</td>
		<td>
			<?php echo $profesor->pro_nombres." ".$profesor->pro_paterno." ".$profesor->pro_materno;?>
		</td>
	</tr>
	<tr>
		<td>
			<span>Rut</span>
		</td>
		<td>
			<?php echo $profesor->pro_rut; ?>
		</td>
	</tr>
	<tr>
		<td>
			<span>Curso</span>
		</td>
		<td>
			<?php echo $curso->cur_nombre; ?>
		</td>
	</tr>
	<tr>
		<td>
			<span>Asignatura</span>
		</td>
		<td>
			<?php echo $asignatura->asi_nombre; ?>
		</td>
	</tr>
	<tr>
		<td>
			<span>Promedio</span>
		</td>
		<td>
			<?php echo $promedio; ?>
		</td>
	</tr>
	<tr>
		<td>
			Clasificaci&oacute;n
		</td>
		<td>
			<?php echo $clasificacion; ?>
		</td>
	</tr>
	
  
</table>