<?php
/* @var $this ProfesorController */
/* @var $data Profesor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pro_rut), array('view', 'id'=>$data->pro_rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_nombres')); ?>:</b>
	<?php echo CHtml::encode($data->pro_nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->pro_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_materno')); ?>:</b>
	<?php echo CHtml::encode($data->pro_materno); ?>
	<br />




</div>