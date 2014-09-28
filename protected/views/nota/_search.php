<?php
/* @var $this NotaController */
/* @var $model Nota */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a1i1'); ?>
		<?php echo $form->textField($model,'a1i1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a1i2'); ?>
		<?php echo $form->textField($model,'a1i2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a1i3'); ?>
		<?php echo $form->textField($model,'a1i3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a1i4'); ?>
		<?php echo $form->textField($model,'a1i4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a1i5'); ?>
		<?php echo $form->textField($model,'a1i5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a1i6'); ?>
		<?php echo $form->textField($model,'a1i6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a1i7'); ?>
		<?php echo $form->textField($model,'a1i7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i1'); ?>
		<?php echo $form->textField($model,'a2i1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i2'); ?>
		<?php echo $form->textField($model,'a2i2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i3'); ?>
		<?php echo $form->textField($model,'a2i3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i4'); ?>
		<?php echo $form->textField($model,'a2i4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i5'); ?>
		<?php echo $form->textField($model,'a2i5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i6'); ?>
		<?php echo $form->textField($model,'a2i6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i7'); ?>
		<?php echo $form->textField($model,'a2i7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i8'); ?>
		<?php echo $form->textField($model,'a2i8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i9'); ?>
		<?php echo $form->textField($model,'a2i9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i10'); ?>
		<?php echo $form->textField($model,'a2i10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a2i11'); ?>
		<?php echo $form->textField($model,'a2i11'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i1'); ?>
		<?php echo $form->textField($model,'a3i1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i2'); ?>
		<?php echo $form->textField($model,'a3i2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i3'); ?>
		<?php echo $form->textField($model,'a3i3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i4'); ?>
		<?php echo $form->textField($model,'a3i4'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i5'); ?>
		<?php echo $form->textField($model,'a3i5'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i6'); ?>
		<?php echo $form->textField($model,'a3i6'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i7'); ?>
		<?php echo $form->textField($model,'a3i7'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i8'); ?>
		<?php echo $form->textField($model,'a3i8'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i9'); ?>
		<?php echo $form->textField($model,'a3i9'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a3i10'); ?>
		<?php echo $form->textField($model,'a3i10'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_ev'); ?>
		<?php echo $form->textField($model,'fecha_ev'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'im_id'); ?>
		<?php echo $form->textField($model,'im_id',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pro_evaluador'); ?>
		<?php echo $form->textField($model,'pro_evaluador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_ambito1'); ?>
		<?php echo $form->textField($model,'total_ambito1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_ambito2'); ?>
		<?php echo $form->textField($model,'total_ambito2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_ambito3'); ?>
		<?php echo $form->textField($model,'total_ambito3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_logros'); ?>
		<?php echo $form->textField($model,'total_logros'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'porcentaje_logro'); ?>
		<?php echo $form->textField($model,'porcentaje_logro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clasificacion'); ?>
		<?php echo $form->textField($model,'clasificacion',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs01'); ?>
		<?php echo $form->textArea($model,'obs01',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs02'); ?>
		<?php echo $form->textArea($model,'obs02',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs03'); ?>
		<?php echo $form->textArea($model,'obs03',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs04'); ?>
		<?php echo $form->textArea($model,'obs04',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs05'); ?>
		<?php echo $form->textArea($model,'obs05',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs06'); ?>
		<?php echo $form->textArea($model,'obs06',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs07'); ?>
		<?php echo $form->textArea($model,'obs07',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs08'); ?>
		<?php echo $form->textArea($model,'obs08',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs09'); ?>
		<?php echo $form->textArea($model,'obs09',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs10'); ?>
		<?php echo $form->textArea($model,'obs10',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs11'); ?>
		<?php echo $form->textArea($model,'obs11',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs12'); ?>
		<?php echo $form->textArea($model,'obs12',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs13'); ?>
		<?php echo $form->textArea($model,'obs13',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs14'); ?>
		<?php echo $form->textArea($model,'obs14',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs15'); ?>
		<?php echo $form->textArea($model,'obs15',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs16'); ?>
		<?php echo $form->textArea($model,'obs16',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs17'); ?>
		<?php echo $form->textArea($model,'obs17',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs18'); ?>
		<?php echo $form->textArea($model,'obs18',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs19'); ?>
		<?php echo $form->textArea($model,'obs19',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs20'); ?>
		<?php echo $form->textArea($model,'obs20',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs21'); ?>
		<?php echo $form->textArea($model,'obs21',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs22'); ?>
		<?php echo $form->textArea($model,'obs22',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs23'); ?>
		<?php echo $form->textArea($model,'obs23',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs24'); ?>
		<?php echo $form->textArea($model,'obs24',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs25'); ?>
		<?php echo $form->textArea($model,'obs25',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs26'); ?>
		<?php echo $form->textArea($model,'obs26',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs27'); ?>
		<?php echo $form->textArea($model,'obs27',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obs28'); ?>
		<?php echo $form->textArea($model,'obs28',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->