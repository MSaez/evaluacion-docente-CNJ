<?php
/* @var $this ImparteController */
/* @var $data Imparte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('imp_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->imp_id), array('view', 'id'=>$data->imp_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asi_id')); ?>:</b>
	<?php echo CHtml::encode($data->asi->asi_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_rut')); ?>:</b>
	<?php echo CHtml::encode($data->proRut->pro_nombres." ".$data->proRut->pro_paterno." ".$data->proRut->pro_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cur_id')); ?>:</b>
	<?php echo CHtml::encode($data->cur->cur_nombre); ?>
	<br />


</div>