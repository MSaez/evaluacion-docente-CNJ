<?php
/* @var $this NotaController */
/* @var $model Nota */
?>

<?php
$this->breadcrumbs=array(
	'Evaluaciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Nueva Evaluacion', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Evaluación <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>