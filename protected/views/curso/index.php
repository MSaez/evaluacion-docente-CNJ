<?php
/* @var $this CursoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cursos',
);

$this->menu=array(
	array('label'=>'Nuevo Curso', 'url'=>array('create')),
	array('label'=>'Administrar Cursos', 'url'=>array('admin')),
);
?>

<h1>Cursos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
