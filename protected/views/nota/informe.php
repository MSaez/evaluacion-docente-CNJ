<?php
/* @var $this NotaController */
/* @var $model Nota */

?>



<?php
$this->breadcrumbs=array(
	'Evaluaciones'=>array('index'),
	'Retroalimentación',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Generar informe de retroalimentación.</h1>

<ul class="nav nav-tabs" id="mytab">
        <li><a data-target="#tab1" data-toggle="tab" href="tab1url">Formulario</a></li>
        <li><a data-target="#tab2" data-toggle="tab" href="tab2url">Ámbito I</a></li>
        <li><a data-target="#tab3" data-toggle="tab" href="tab3url">Ámbito II</a></li>
        <li><a data-target="#tab4" data-toggle="tab" href="tab4url">Ámbito III</a></li>
</ul>
</ul>
</ul>
     
<div class="tab-content">
        <div class="tab-pane active" id="tab1"><?php  $this->renderPartial('_retroalimentacion', array('model'=>$model));?></div>
        
        <div class="tab-pane" id="tab2">
        	<?php 
        	$this->widget('zii.widgets.CDetailView',array(
    		'htmlOptions' => array(
        	'class' => 'table table-striped table-condensed table-hover',
    		),
    		'data'=>$model2,
    		'attributes'=>array(
    			
				'obs01:ntext',
				'obs02:ntext',
				'obs03:ntext',
				'obs04:ntext',
				'obs05:ntext',
				'obs06:ntext',
				'obs07:ntext',
		
			),
			)); ?>
		</div>

		<div class="tab-pane" id="tab3"><?php $this->widget('zii.widgets.CDetailView',array(
    		'htmlOptions' => array(
        	'class' => 'table table-striped table-condensed table-hover',
    		),
    		'data'=>$model2,
    		'attributes'=>array(
				'obs08:ntext',
				'obs09:ntext',
				'obs10:ntext',
				'obs11:ntext',
				'obs12:ntext',
				'obs13:ntext',
				'obs14:ntext',
				'obs15:ntext',
				'obs16:ntext',
				'obs17:ntext',
				'obs18:ntext',

		
			),
			)); ?>
		</div>

		<div class="tab-pane" id="tab4"><?php $this->widget('zii.widgets.CDetailView',array(
    		'htmlOptions' => array(
        	'class' => 'table table-striped table-condensed table-hover',
    		),
    		'data'=>$model2,
    		'attributes'=>array(
				'obs19:ntext',
				'obs20:ntext',
				'obs21:ntext',
				'obs22:ntext',
				'obs23:ntext',
				'obs24:ntext',
				'obs25:ntext',
				'obs26:ntext',
				'obs27:ntext',
				'obs28:ntext',
		
			),
			)); ?>
		</div>
</div>


 
<script>
    $(function() {
        $("#mytab").tab(); // initialize tabs
        $("#mytab").bind("show", function(e) {

                var contentID = $(e.target).attr("data-target");
                var contentURL = $(e.target).attr("href");
        
                $(contentID).load(contentURL, function(){
                        $("#mytab").tab(); 
                });
        });

        $('#mytab a:first').tab("show"); 
        });
</script>
