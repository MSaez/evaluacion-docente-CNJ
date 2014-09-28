<?php
/* @var $this NotaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Evaluaciones',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación','url'=>array('create')),
	array('label'=>'Administrar Evaluación','url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));?>