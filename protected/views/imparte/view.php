<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->breadcrumbs=array(
	'Asignaciones'=>array('index'),
	$model->imp_id,
);

$this->menu=array(
	array('label'=>'Listar Asignaciones', 'url'=>array('index')),
	array('label'=>'Nueva Asignación', 'url'=>array('create')),
	array('label'=>'Actualizar Asignación', 'url'=>array('update', 'id'=>$model->imp_id)),
	array('label'=>'Eliminar Asignación', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->imp_id),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Asignaciones', 'url'=>array('admin')),
	array('label'=>'Obtener Promedio', 'url'=>array('promedio', 'id'=>$model->imp_id)),
	array('label'=>'Visualizar No Observados', 'url'=>array('visualizar', 'id'=>$model->imp_id)),
);
?>

<h1>Ver Asignación #<?php echo $model->imp_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'imp_id',
		array('name'=>'pro_rut', 
              'header'=>'Profesor',
              'value'=>$model->proRut->getFullName()
         ),
		array('name'=>'cur_id', 
              'header'=>'Curso',
              'value'=>$model->cur->cur_nombre
         ),
		array('name'=>'asi_id', 
              'header'=>'Asignatura',
              'value'=>$model->asi->asi_nombre
         ),
	),
)); ?>
