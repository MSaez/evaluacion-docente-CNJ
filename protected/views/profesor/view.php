<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->pro_rut,
);

$this->menu=array(
	array('label'=>'Listar Profesores', 'url'=>array('index')),
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
	array('label'=>'Actualizar Profesor', 'url'=>array('update', 'id'=>$model->pro_rut)),
	array('label'=>'Eliminar Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pro_rut),'confirm'=>'¿Está seguro de eliminar a este profesor?')),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
);
?>

<h1>Ver Profesor: <?php echo $model->pro_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pro_rut',
		'pro_nombres',
		'pro_paterno',
		'pro_materno',
		
	),
)); ?>
