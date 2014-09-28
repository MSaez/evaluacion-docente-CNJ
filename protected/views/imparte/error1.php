<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Asignaciones'=>array('index'),
	'Error',
);
?>

<div class="alert alert-error in fade">
		<strong>Error</strong><br>El profesor y curso seleccionados no posee las 5 evaluaciones requeridas.
</div>