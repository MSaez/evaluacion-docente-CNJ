<?php
/* @var $this NotaController */
/* @var $model Nota */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'nota-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Los campos con <span class="required">*</span> son obligatorios.</p>
	<div class="alert alert-warning in fade">
		<p class="help-block">Los puntajes van de 0 a 4.</p>
	</div>

	<?php echo "<H3>Datos de la evaluación.</H3>"; ?>
	<table>
	<tr>
		<td>
			<?php $user = TblUser::model()->findByPk(Yii::app()->user->id);
			echo "<label class='control-label'>Evaluador: </label>".' '.$user->ev_nombres.' '.$user->ev_paterno.' '.$user->ev_materno; ?>
		</td>
		<td>
			<?php echo "<label class='control-label'>Fecha: </label>".' '.DATE ('d-m-Y'); ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php echo $form->dropDownListControlGroup($model, 'observacion', array('1' => 1, '2' => 2, '3' => 3, '4'=> 4, '5' => 5), array('empty' => 'Seleccione...')); ?>
		</td>
		<td>
            <?php $datos = CHtml::listData(Imparte::model()->findAll(),"imp_id","fullname");  ?>
			
			<?php echo $form->dropDownListControlGroup($model,'im_id',$datos,array('prompt'=>'Seleccione...')); ?>
			<?php //echo $form->textField($model,'im_id'); ?>
		</td>
	</tr>
	</table>

	<?php echo $form->errorSummary($model); ?>

    <?php echo "<H3>Ámbito I: Dominio y cobertura Curricular.</H3>"; ?>

	<table>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a1i1'); ?>
					<?php echo $form->textField($model,'a1i1'); ?>
					<?php echo $form->error($model,'a1i1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs01'); ?>
					<?php echo $form->textArea($model,'obs01',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs01'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a1i2'); ?>
					<?php echo $form->textField($model,'a1i2'); ?>
					<?php echo $form->error($model,'a1i2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs02'); ?>
					<?php echo $form->textArea($model,'obs02',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs02'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a1i3'); ?>
					<?php echo $form->textField($model,'a1i3'); ?>
					<?php echo $form->error($model,'a1i3'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs03'); ?>
					<?php echo $form->textArea($model,'obs03',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs03'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a1i4'); ?>
					<?php echo $form->textField($model,'a1i4'); ?>
					<?php echo $form->error($model,'a1i4'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs04'); ?>
					<?php echo $form->textArea($model,'obs04',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs04'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a1i5'); ?>
					<?php echo $form->textField($model,'a1i5'); ?>
					<?php echo $form->error($model,'a1i5'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs05'); ?>
					<?php echo $form->textArea($model,'obs05',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs05'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a1i6'); ?>
					<?php echo $form->textField($model,'a1i6'); ?>
					<?php echo $form->error($model,'a1i6'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs06'); ?>
					<?php echo $form->textArea($model,'obs06',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs06'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a1i7'); ?>
					<?php echo $form->textField($model,'a1i7'); ?>
					<?php echo $form->error($model,'a1i7'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs07'); ?>
					<?php echo $form->textArea($model,'obs07',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs07'); ?>
				</div>
			</td>
		</tr>
	</table>

	<?php echo "<H3>Ámbito II: Ambiente de la Sala de Clases.</H3>"; ?>

	<table>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i1'); ?>
					<?php echo $form->textField($model,'a2i1'); ?>
					<?php echo $form->error($model,'a2i1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs08'); ?>
					<?php echo $form->textArea($model,'obs08',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs08'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i2'); ?>
					<?php echo $form->textField($model,'a2i2'); ?>
					<?php echo $form->error($model,'a2i2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs09'); ?>
					<?php echo $form->textArea($model,'obs09',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs09'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i3'); ?>
					<?php echo $form->textField($model,'a2i3'); ?>
					<?php echo $form->error($model,'a2i3'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs10'); ?>
					<?php echo $form->textArea($model,'obs10',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs10'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i4'); ?>
					<?php echo $form->textField($model,'a2i4'); ?>
					<?php echo $form->error($model,'a2i4'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs11'); ?>
					<?php echo $form->textArea($model,'obs11',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs11'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i5'); ?>
					<?php echo $form->textField($model,'a2i5'); ?>
					<?php echo $form->error($model,'a2i5'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs12'); ?>
					<?php echo $form->textArea($model,'obs12',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs12'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i6'); ?>
					<?php echo $form->textField($model,'a2i6'); ?>
					<?php echo $form->error($model,'a2i6'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs13'); ?>
					<?php echo $form->textArea($model,'obs13',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs13'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i7'); ?>
					<?php echo $form->textField($model,'a2i7'); ?>
					<?php echo $form->error($model,'a2i7'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs14'); ?>
					<?php echo $form->textArea($model,'obs14',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs14'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i8'); ?>
					<?php echo $form->textField($model,'a2i8'); ?>
					<?php echo $form->error($model,'a2i8'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs15'); ?>
					<?php echo $form->textArea($model,'obs15',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs15'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i9'); ?>
					<?php echo $form->textField($model,'a2i9'); ?>
					<?php echo $form->error($model,'a2i9'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs16'); ?>
					<?php echo $form->textArea($model,'obs16',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs16'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i10'); ?>
					<?php echo $form->textField($model,'a2i10'); ?>
					<?php echo $form->error($model,'a2i10'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs17'); ?>
					<?php echo $form->textArea($model,'obs17',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs17'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a2i11'); ?>
					<?php echo $form->textField($model,'a2i11'); ?>
					<?php echo $form->error($model,'a2i11'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs18'); ?>
					<?php echo $form->textArea($model,'obs18',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs18'); ?>
				</div>
			</td>
		</tr>
	</table>

	<?php echo "<H3>Ámbito III: Enseñanza para el Aprendizaje.</H3>"; ?>
	<table>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i1'); ?>
					<?php echo $form->textField($model,'a3i1'); ?>
					<?php echo $form->error($model,'a3i1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs19'); ?>
					<?php echo $form->textArea($model,'obs19',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs19'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i2'); ?>
					<?php echo $form->textField($model,'a3i2'); ?>
					<?php echo $form->error($model,'a3i2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs20'); ?>
					<?php echo $form->textArea($model,'obs20',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs20'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i3'); ?>
					<?php echo $form->textField($model,'a3i3'); ?>
					<?php echo $form->error($model,'a3i3'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs21'); ?>
					<?php echo $form->textArea($model,'obs21',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs21'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i4'); ?>
					<?php echo $form->textField($model,'a3i4'); ?>
					<?php echo $form->error($model,'a3i4'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs22'); ?>
					<?php echo $form->textArea($model,'obs22',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs22'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i5'); ?>
					<?php echo $form->textField($model,'a3i5'); ?>
					<?php echo $form->error($model,'a3i5'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs23'); ?>
					<?php echo $form->textArea($model,'obs23',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs23'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i6'); ?>
					<?php echo $form->textField($model,'a3i6'); ?>
					<?php echo $form->error($model,'a3i6'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs24'); ?>
					<?php echo $form->textArea($model,'obs24',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs24'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i7'); ?>
					<?php echo $form->textField($model,'a3i7'); ?>
					<?php echo $form->error($model,'a3i7'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs25'); ?>
					<?php echo $form->textArea($model,'obs25',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs25'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i8'); ?>
					<?php echo $form->textField($model,'a3i8'); ?>
					<?php echo $form->error($model,'a3i8'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs26'); ?>
					<?php echo $form->textArea($model,'obs26',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs26'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i9'); ?>
					<?php echo $form->textField($model,'a3i9'); ?>
					<?php echo $form->error($model,'a3i9'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs27'); ?>
					<?php echo $form->textArea($model,'obs27',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs27'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'a3i10'); ?>
					<?php echo $form->textField($model,'a3i10'); ?>
					<?php echo $form->error($model,'a3i10'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->labelEx($model,'obs28'); ?>
					<?php echo $form->textArea($model,'obs28',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'obs28'); ?>
				</div>
			</td>
		</tr>
	</table>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->