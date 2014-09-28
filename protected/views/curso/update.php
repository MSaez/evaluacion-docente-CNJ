<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->cur_id=>array('view','id'=>$model->cur_id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Cursos', 'url'=>array('index')),
	array('label'=>'Nuevo Curso', 'url'=>array('create')),
	array('label'=>'Ver Curso', 'url'=>array('view', 'id'=>$model->cur_id)),
	array('label'=>'Administrar Cursos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Curso <?php echo $model->cur_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>