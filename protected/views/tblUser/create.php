<?php
/* @var $this TblUserController */
/* @var $model TblUser */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Nuevo Usuario',
);
if(Yii::app()->user->isGuest){
	$this->menu=array(
	array('label'=>'Volver', 'url'=>array('site/login')),
	);
}
else{
	$this->menu=array(
	array('label'=>'Listar Usuarios', 'url'=>array('index')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
	);
}
?>

<h1>Registro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>