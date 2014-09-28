<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->breadcrumbs=array(
	'Asignaciones'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Asignaciones', 'url'=>array('index')),
	array('label'=>'Nueva Asignación', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#imparte-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Asignaciones</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'imparte-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'imp_id',
		array('name'=>'asi_id', 
              'header'=>'Asignatura',
              'value'=>'$data->asi->asi_nombre'
         ),
		array('name'=>'pro_rut', 
              'header'=>'Profesor',
              'value'=>'$data->proRut->getFullName()'
         ),
		array('name'=>'cur_id', 
              'header'=>'Curso',
              'value'=>'$data->cur->cur_nombre'
         ),
		array(
            'class'=>'TbButtonColumn',
                    'template' => '{view} {update} {delete} {promedio} {visualizar}',
                'buttons'=>array(
                        'promedio' => array(
                                'label'=>'Obtener promedio', 
                                'url'=>"CHtml::normalizeUrl(array('promedio', 'id'=>\$data->imp_id))",
                                'icon'=>TbHtml::ICON_DOWNLOAD_ALT,
                                'options' => array('class'=>'promedio'),
                        ), 
						'visualizar' => array(
                                'label'=>'Visualizar No Observados', 
                                'url'=>"CHtml::normalizeUrl(array('visualizar', 'id'=>\$data->imp_id))",
                                'icon'=>TbHtml::ICON_INFO_SIGN,
                                'options' => array('class'=>'visualizar'),
                        ),
                ),
        ),
	),
)); ?>
