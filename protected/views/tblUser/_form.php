<?php
/* @var $this TblUserController */
/* @var $model TblUser */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'tbl-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));
	
	Yii::app()->clientScript->registerCoreScript('jquery');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.Rut.js');
	?>

    <p class="help-block">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'username',array('span'=>5,'maxlength'=>12)); ?>
			<?php Yii::app()->clientScript->registerScript("Rut",
			"$('#".CHtml::activeId($model, 'username')."').Rut({on_error: function(){ alert('Rut incorrecto'); }});",
			CClientScript::POS_READY);?>

            <?php echo $form->passwordFieldControlGroup($model,'password',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'ev_nombres',array('span'=>5,'maxlength'=>256)); ?>

            <?php echo $form->textFieldControlGroup($model,'ev_paterno',array('span'=>5,'maxlength'=>256)); ?>

            <?php echo $form->textFieldControlGroup($model,'ev_materno',array('span'=>5,'maxlength'=>256)); ?>

        <div>
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Registrarse' : 'Guardar'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->