<?php
/* @var $this AsignaturaController */
/* @var $data Asignatura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('asi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->asi_id), array('view', 'id'=>$data->asi_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asi_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->asi_nombre); ?>
	<br />


</div>