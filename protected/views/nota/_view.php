<?php
/* @var $this NotaController */
/* @var $data Nota */
?>

<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ev')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ev); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('im_id')); ?>:</b>
	<?php 	$profesor = new Profesor;
			$profesor = Profesor::model()->findByPk($data->im->pro_rut);
			echo CHtml::encode($profesor->getFullName()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_evaluador')); ?>:</b>
	<?php echo CHtml::encode($data->proEvaluador->ev_nombres." ".$data->proEvaluador->ev_paterno." ".$data->proEvaluador->ev_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_ambito1')); ?>:</b>
	<?php echo CHtml::encode($data->total_ambito1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_ambito2')); ?>:</b>
	<?php echo CHtml::encode($data->total_ambito2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_ambito3')); ?>:</b>
	<?php echo CHtml::encode($data->total_ambito3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_logros')); ?>:</b>
	<?php echo CHtml::encode($data->total_logros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('porcentaje_logro')); ?>:</b>
	<?php echo CHtml::encode($data->porcentaje_logro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clasificacion')); ?>:</b>
	<?php echo CHtml::encode($data->clasificacion); ?>
	<br />

	
	

</div>