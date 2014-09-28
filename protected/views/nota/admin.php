<?php
/* @var $this NotaController */
/* @var $model Nota */


$this->breadcrumbs=array(
	'Evaluaciones'=>array('index'),
	'Administrar Evaluaciones',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
);



        


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#nota-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Evaluaciones</h1>


<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView',array(
	'id'=>'nota-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		
		'fecha_ev',
		array(
			'name'=>'id', 
            'header'=>'Profesor',
            'value' => '$data->im->pro_rut'
			),
		array(
			'name'=>'id', 
            'header'=>'Profesor Evaluador',
            'value' => '$data->proEvaluador->ev_nombres." ".$data->proEvaluador->ev_paterno." ".$data->proEvaluador->ev_materno'
			),
		'observacion',
		'total_ambito1',
		'total_ambito2',
		'total_ambito3',
		'porcentaje_logro',
		'clasificacion',
		
		array(
            'class'=>'TbButtonColumn',
                    'template' => '{view} {update} {delete} {retro}',
                'buttons'=>array(
                        'retro' => array(
                                'label'=>'Generar Informe de retroalimentación', 
                                'url'=>"CHtml::normalizeUrl(array('retro', 'id'=>\$data->id))",
                                'icon'=>TbHtml::ICON_DOWNLOAD_ALT,
                                'options' => array('class'=>'retro'),
                        ),
                ),
        ),
			

))); ?>