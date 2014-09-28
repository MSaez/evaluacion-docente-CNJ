<?php
/* @var $this NotaController */
/* @var $model Nota */
?>

<?php
$this->breadcrumbs=array(
	'Evaluaciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación Nota', 'url'=>array('create')),
	array('label'=>'Actualizar Evaluación', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Evaluación', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
	array('label'=>'Crear Retroalimentación', 'url'=>array('retro','id'=>$model->id))
);
?>

<h1>Ver Evaluación #<?php echo $model->id; ?></h1>

<?php 
	$profesor = new Profesor;
	$profesor = Profesor::model()->findByPk($model->im->pro_rut);
	$curso = new Curso;
	$curso = Curso::model()->findByPk($model->im->cur_id);
	$asignatura = new Asignatura;
	$asignatura = Asignatura::model()->findByPk($model->im->asi_id);
		
	$this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		array('name'=>'pro_rut', 
              'header'=>'Profesor',
              'value'=>$profesor->getFullName()
         ),
		array('name'=>'pro_evaluador', 
              'header'=>'Profesor Evaluador',
              'value'=>$model->proEvaluador->ev_nombres." ".$model->proEvaluador->ev_paterno." ".$model->proEvaluador->ev_materno
         ),
		'observacion',
		'total_logros',
		'porcentaje_logro',
		'clasificacion',
		'fecha_ev',
		array('name'=>'Curso',
			  'header'=>'Curso',
              'value'=>$curso->cur_nombre
         ),
		array('name'=>'Asignatura',
			  'header'=>'Asignatura',
              'value'=>$asignatura->asi_nombre
         ),
		
	),
)); ?>