<?php
/* @var $this TblUserController */
/* @var $data TblUser */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_nombres')); ?>:</b>
	<?php echo CHtml::encode($data->ev_nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->ev_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ev_materno')); ?>:</b>
	<?php echo CHtml::encode($data->ev_materno); ?>
	<br />


</div>