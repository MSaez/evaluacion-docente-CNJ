<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->breadcrumbs=array(
	'Asignaciones'=>array('index'),
	$model->imp_id=>array('view','id'=>$model->imp_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Asignaciones', 'url'=>array('index')),
	array('label'=>'Nueva Asignación', 'url'=>array('create')),
	array('label'=>'Ver Asignación', 'url'=>array('view', 'id'=>$model->imp_id)),
	array('label'=>'Administrar Asignaciones', 'url'=>array('admin')),
);
?>

<h1>Actualizar Asignación <?php echo $model->imp_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>