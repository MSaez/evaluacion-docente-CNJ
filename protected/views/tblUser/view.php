<?php
/* @var $this TblUserController */
/* @var $model TblUser */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h2>Ver Usuario: <?php echo $model->ev_nombres." ".$model->ev_paterno." ".$model->ev_materno; ?></h2>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'username',
		'password',
		'ev_nombres',
		'ev_paterno',
		'ev_materno',
	),
)); ?>