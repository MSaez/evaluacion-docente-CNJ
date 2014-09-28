<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Profesores', 'url'=>array('index')),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
);
?>

<h1>Nuevo Profesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>