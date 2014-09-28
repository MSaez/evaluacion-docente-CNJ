<?php
/* @var $this AsignaturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asignaturas',
);

$this->menu=array(
	array('label'=>'Nueva Asignatura', 'url'=>array('create')),
	array('label'=>'Administrar Asignaturas', 'url'=>array('admin')),
);
?>

<h1>Asignaturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
