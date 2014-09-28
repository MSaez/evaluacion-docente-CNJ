<?php
/* @var $this ProfesorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profesores',
);

$this->menu=array(
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
);
?>

<h1>Profesores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
