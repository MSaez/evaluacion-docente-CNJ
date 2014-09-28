<?php
/* @var $this AsignaturaController */
/* @var $model Asignatura */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	$model->asi_id=>array('view','id'=>$model->asi_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Asignaturas', 'url'=>array('index')),
	array('label'=>'Nueva Asignatura', 'url'=>array('create')),
	array('label'=>'Ver Asignatura', 'url'=>array('view', 'id'=>$model->asi_id)),
	array('label'=>'Administrar Asignaturas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Asignatura: <?php echo $model->asi_nombre; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>