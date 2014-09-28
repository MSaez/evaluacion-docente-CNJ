<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->cur_id,
);

$this->menu=array(
	array('label'=>'Listar Cursos', 'url'=>array('index')),
	array('label'=>'Nuevo Curso', 'url'=>array('create')),
	array('label'=>'Actualizar Curso', 'url'=>array('update', 'id'=>$model->cur_id)),
	array('label'=>'Eliminar Curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->cur_id),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Cursos', 'url'=>array('admin')),
);
?>

<h1>Ver Curso #<?php echo $model->cur_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cur_id',
		'cur_nombre',
	),
)); ?>
