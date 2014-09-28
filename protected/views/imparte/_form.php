<?php
/* @var $this ImparteController */
/* @var $model Imparte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'imparte-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'asi_id'); ?>
		<?php echo $form->dropDownList($model,'asi_id', CHtml::listData(Asignatura::model()->findAll(), 'asi_id','asi_nombre'),array('empty'=>array(NULL=>'-- Seleccione Asignatura--'))); ?>
		<?php echo $form->error($model,'asi_id'); ?>

	</div>

	<div class="row">
		<?php $datos = CHtml::listData(Profesor::model()->findAll(),"pro_rut","fullname");  ?>			
		<?php echo $form->dropDownListControlGroup($model,'pro_rut',$datos,array('prompt'=>'Seleccione...')); ?>
		<?php echo $form->error($model,'pro_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cur_id'); ?>
		<?php echo $form->dropDownList($model,'cur_id', CHtml::listData(Curso::model()->findAll(), 'cur_id','cur_nombre'),array('empty'=>array(NULL=>'-- Seleccione Curso--'))); ?>
		<?php echo $form->error($model,'cur_id'); ?>

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->