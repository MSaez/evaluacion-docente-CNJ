<?php
/* @var $this TblUserController */
/* @var $model TblUser */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Actualizar '.$model->username=>array('view','id'=>$model->username),
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

    <h1>Actualizar Usuario <?php echo $model->ev_nombres." ".$model->ev_paterno." ".$model->ev_materno; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>