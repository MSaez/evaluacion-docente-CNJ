<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->breadcrumbs=array(
	'Asignaciones'=>array('index'),
	'Nueva',
);

$this->menu=array(
	array('label'=>'Listar Asignaciones', 'url'=>array('index')),
	array('label'=>'Administrar Asignaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Asignacion</h1>

<p>En esta sección usted puede asignar al profesor a la asignatura y curso que se requiera.</p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>