<?php
/* @var $this NotaController */
/* @var $model RetroalimentacionForm */
/* @var $form CActiveForm */
?>



<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'retroalimentacion-form-nota-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<h4>ÁMBITO I DOMINIO Y COBERTURA CURRICULAR</h4>
	<br>
	<div class="row">
			<?php echo $form->labelEx($model,'a1_positivos'); ?>
			<?php echo $form->textArea($model,'a1_positivos',array('placeholder'=>'Aspectos positivos del profesor...','maxlength'=>1024, 'style'=>'width: 570px; height: 80px;')); ?>
			<?php echo $form->error($model,'a1_positivos'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'a1_mejorar'); ?>
		<?php echo $form->textArea($model,'a1_mejorar',array('maxlength'=>1024, 'style'=>'width: 570px; height: 80px;')); ?>		
		<?php echo $form->error($model,'a1_mejorar'); ?>
	</div>

	<h4>ÁMBITO II AMBIENTE DE LA SALA DE CLASES</h4>
	<br>
	<div class="row">
		<?php echo $form->labelEx($model,'a2_positivos'); ?>
		<?php echo $form->textArea($model,'a2_positivos',array('placeholder'=>'Aspectos positivos del profesor...','maxlength'=>1024, 'style'=>'width: 570px; height: 80px;')); ?>
		<?php echo $form->error($model,'a2_positivos'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'a2_mejorar'); ?>
		<?php echo $form->textArea($model,'a2_mejorar',array('maxlength'=>1024, 'style'=>'width: 570px; height: 80px;')); ?>
		<?php echo $form->error($model,'a2_mejorar'); ?>
	</div>
	
	<h4>ÁMBITO III ENSEÑANZA PARA EL APRENDIZAJE</h4>
	<br>
	<div class="row">
		<?php echo $form->labelEx($model,'a3_positivos'); ?>
		<?php echo $form->textArea($model,'a3_positivos',array('placeholder'=>'Aspectos positivos del profesor...','maxlength'=>1024, 'style'=>'width: 570px; height: 80px;')); ?>
		<?php echo $form->error($model,'a3_positivos'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'a3_mejorar'); ?>
		<?php echo $form->textArea($model,'a3_mejorar',array('maxlength'=>1024, 'style'=>'width: 570px; height: 80px;')); ?>
		<?php echo $form->error($model,'a3_mejorar'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Generar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->