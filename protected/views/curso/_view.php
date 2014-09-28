<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cur_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cur_id), array('view', 'id'=>$data->cur_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cur_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->cur_nombre); ?>
	<br />


</div>