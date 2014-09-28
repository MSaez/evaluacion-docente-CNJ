<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
<head>
	<!-- Meta -->
	<meta http-equiv="Content-Type" content="text/html" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="demo site">
    <meta name="author" content="tskmatrix">
    <meta name="language" content="es" />

    <!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />


	<title><?php echo CHtml::encode($this -> pageTitle); ?></title>
</head>

<body>
<?php Yii::app() -> bootstrap -> register(); ?>

<!--=== Top ===-->
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 contact">
				<!-- Logo -->
				<table>
					<tr>
						<td>
							<img width=87 height=85 src='images/cnj_logo.png' align=left hspace=25>
						</td>
						<td>
							<h2>Evaluación Docente CNJ</h2>
						</td>
					</tr>
				</table>
				<!-- /logo -->
            </div>
            
        </div>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
 <div class="header">
    <div class="container" id="mainmenu">

    <!-- Menu -->
	<?php 
		$user = new TblUser;
		$user = TblUser::model()->findByPk(Yii::app()->user->id);
		$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
							array('label'=>'Sobre mi', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Administrador', 'url'=>array('/tbluser/index'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Asignatura', 'url'=>array('/asignatura/index'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Curso', 'url'=>array('/curso/index'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Evaluación', 'url'=>array('/nota/index'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Profesor', 'url'=>array('/profesor/index'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Asignar Profesor', 'url'=>array('/imparte/index'), 'visible'=>!Yii::app()->user->isGuest),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
 	</div> <!-- /container -->
 </div> <!--/header -->
<!-- === End Header === -->

<div class="container">
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this -> widget('zii.widgets.CBreadcrumbs', array('links' => $this -> breadcrumbs, )); ?><!-- breadcrumbs -->
	<?php endif ?>
</div>



<div class="container">
    <!-- Start Yii page content -->
	<?php echo $content; ?>
	<!-- End Yii Page Content -->
</div>

<div id="footer">
	
		Copyright &copy; <?php echo date('Y'); ?> por Marcelo Sáez Tapia..<br/>
		Todos los derechos reservados.<br/>
	
		
</div><!-- footer -->
	


</body>
</html>