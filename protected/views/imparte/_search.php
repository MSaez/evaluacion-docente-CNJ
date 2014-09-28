<?php
/* @var $this ImparteController */
/* @var $model Imparte */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'imp_id'); ?>
		<?php echo $form->textField($model,'imp_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asi_id'); ?>
		<?php echo $form->textField($model,'asi_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_rut'); ?>
		<?php echo $form->textField($model,'pro_rut',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cur_id'); ?>
		<?php echo $form->textField($model,'cur_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->