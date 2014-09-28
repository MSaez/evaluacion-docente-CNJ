<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.Rut.js');
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'profesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_rut'); ?>
		<?php echo $form->textField($model,'pro_rut',array('size'=>12,'maxlength'=>12)); ?>
		<?php Yii::app()->clientScript->registerScript("Rut",
			"$('#".CHtml::activeId($model, 'pro_rut')."').Rut({on_error: function(){ alert('Rut incorrecto'); }});",
			CClientScript::POS_READY);?>
		<?php echo $form->error($model,'pro_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_nombres'); ?>
		<?php echo $form->textField($model,'pro_nombres',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'pro_nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_paterno'); ?>
		<?php echo $form->textField($model,'pro_paterno',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'pro_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_materno'); ?>
		<?php echo $form->textField($model,'pro_materno',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'pro_materno'); ?>
	</div>

	
	
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->