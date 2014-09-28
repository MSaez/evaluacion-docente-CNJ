<?php
/* @var $this AsignaturaController */
/* @var $model Asignatura */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	$model->asi_id,
);

$this->menu=array(
	array('label'=>'Listar Asignaturas', 'url'=>array('index')),
	array('label'=>'Nueva Asignatura', 'url'=>array('create')),
	array('label'=>'Actualizar Asignatura', 'url'=>array('update', 'id'=>$model->asi_id)),
	array('label'=>'Eliminar Asignatura', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->asi_id),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Asignaturas', 'url'=>array('admin')),
);
?>

<h1>Ver Asignatura: <?php echo $model->asi_nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'asi_id',
		'asi_nombre',
	),
)); ?>
