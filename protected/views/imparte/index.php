<?php
/* @var $this ImparteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asignaciones',
);

$this->menu=array(
	array('label'=>'Nueva Asignación', 'url'=>array('create')),
	array('label'=>'Administrar Asignaciones', 'url'=>array('admin')),
);
?>

<h1>Asignaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
