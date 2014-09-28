<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->pro_rut=>array('view','id'=>$model->pro_rut),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Profesores', 'url'=>array('index')),
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
	array('label'=>'Ver Profesor', 'url'=>array('view', 'id'=>$model->pro_rut)),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Profesor <?php echo $model->pro_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>