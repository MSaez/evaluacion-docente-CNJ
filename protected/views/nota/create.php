<?php
/* @var $this NotaController */
/* @var $model Nota */
?>

<?php
$this->breadcrumbs=array(
	'Evaluaciones'=>array('index'),
	'Nueva Evaluación',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>