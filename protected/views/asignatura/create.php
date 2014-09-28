<?php
/* @var $this AsignaturaController */
/* @var $model Asignatura */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Listar Asignaturas', 'url'=>array('index')),
	array('label'=>'Administrar Asignaturas', 'url'=>array('admin')),
);
?>

<h1>Nueva  Asignatura</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>