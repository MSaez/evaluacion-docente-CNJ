<?php
/* @var $this TblUserController */
/* @var $model TblUser */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'username',array('span'=>5,'maxlength'=>12)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ev_nombres',array('span'=>5,'maxlength'=>256)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ev_paterno',array('span'=>5,'maxlength'=>256)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ev_materno',array('span'=>5,'maxlength'=>256)); ?>

        <div>
        <?php echo TbHtml::submitButton('Buscar',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->