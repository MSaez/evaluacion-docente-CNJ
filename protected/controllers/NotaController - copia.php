<?php

class NotaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $rango_max =140; 
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','export','retro'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Nota;
		$contador1 = 0; // contador para la cantida de "no observados" en la evaluacion
		$contador2 = 0; // contador para la cantida de "no observados" en la evaluacion
		$contador3 = 0; // contador para la cantida de "no observados" en la evaluacion
		$total_a1 = 0;
		$total_a2 = 0;
		$total_a3 = 0;
		$porcentaje_a1 = 0;
		$porcentaje_a2 = 0;
		$porcentaje_a3 = 0;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Nota'])) {
			$model->attributes=$_POST['Nota'];

			
			
			$model->fecha_ev = DATE('Y-m-d');
			$model->ev_anio = DATE('Y');
			$model->pro_evaluador = Yii::app()->user->id;
			$total_a1 = $model->a1i1 + $model->a1i2 + $model->a1i3 + $model->a1i4 + $model->a1i5 + $model->a1i6 + $model->a1i7;
			$model->total_ambito1 = $total_a1;
			$total_a2 = $model->a2i1 + $model->a2i2 + $model->a2i3 + $model->a2i4 + $model->a2i5 + $model->a2i6 + $model->a2i7 + 
									$model->a2i8 + $model->a2i9 + $model->a2i10 + $model->a2i11;
			$model->total_ambito2 = $total_a2;
			$total_a3 = $model->a3i1 + $model->a3i2 + $model->a3i3 + $model->a3i4 + $model->a3i5 + $model->a3i6 + $model->a3i7 + 
									$model->a3i8 + $model->a3i9 + $model->a3i10;
			$model->total_ambito3 = $total_a3;
			$model->total_logros = $total_a1 + $total_a2 + $total_a3;

			// se procede a contar la cantidad de no observados de la evaluacion
			if ($model->a1i1 == 0)
				$contador1++;
			if ($model->a1i2 == 0)
				$contador1++;
			if ($model->a1i3 == 0)
				$contador1++;
			if ($model->a1i4 == 0)
				$contador1++;
			if ($model->a1i5 == 0)
				$contador1++;
			if ($model->a1i6 == 0)
				$contador1++;
			if ($model->a1i7 == 0)
				$contador1++;
			if ($model->a2i1 == 0)
				$contador2++;
			if ($model->a2i2 == 0)
				$contador2++;
			if ($model->a2i3 == 0)
				$contador2++;
			if ($model->a2i4 == 0)
				$contador2++;
			if ($model->a2i5 == 0)
				$contador2++;
			if ($model->a2i6 == 0)
				$contador2++;
			if ($model->a2i7 == 0)
				$contador2++;
			if ($model->a2i8 == 0)
				$contador2++;
			if ($model->a2i9 == 0)
				$contador2++;
			if ($model->a2i10 == 0)
				$contador2++;
			if ($model->a2i11 == 0)
				$contador2++;
			if ($model->a3i1 == 0)
				$contador3++;
			if ($model->a3i1 == 0)
				$contador3++;
			if ($model->a3i2 == 0)
				$contador3++;
			if ($model->a3i3 == 0)
				$contador3++;
			if ($model->a3i4 == 0)
				$contador3++;
			if ($model->a3i5 == 0)
				$contador3++;
			if ($model->a3i6 == 0)
				$contador3++;
			if ($model->a3i7 == 0)
				$contador3++;
			if ($model->a3i8 == 0)
				$contador3++;
			if ($model->a3i9 == 0)
				$contador3++;
			if ($model->a3i10 == 0)
				$contador3++;
				
			$porcentaje_a1 = $total_a1 / ((7 - $contador1)*4);
			$porcentaje_a2 = $total_a2 / ((11 - $contador2)*4);
			$porcentaje_a3 = $total_a3 / ((10 - $contador3)*4);


			$model->porcentaje_logro = round((($porcentaje_a1 + $porcentaje_a2 + $porcentaje_a3)/3)*100); 

			if ($model->porcentaje_logro >= 1 && $model->porcentaje_logro <= 66){
				$model->clasificacion = 'Insatisfactorio';	
			}
			if ($model->porcentaje_logro >= 67 && $model->porcentaje_logro <= 83){
				$model->clasificacion = 'Básico';	
			}
			if ($model->porcentaje_logro >= 84 && $model->porcentaje_logro <= 100){
				$model->clasificacion = 'Competente';	
			}
			if ($model->porcentaje_logro >= 101 && $model->porcentaje_logro <= 112){
				$model->clasificacion = 'Destacado';	
			}
			
			
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$contador1 = 0; // contador para la cantida de "no observados" en la evaluacion
		$contador2 = 0; // contador para la cantida de "no observados" en la evaluacion
		$contador3 = 0; // contador para la cantida de "no observados" en la evaluacion
		$total_a1 = 0;
		$total_a2 = 0;
		$total_a3 = 0;
		$porcentaje_a1 = 0;
		$porcentaje_a2 = 0;
		$porcentaje_a3 = 0;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Nota'])) {
			$model->attributes=$_POST['Nota'];
			
			
			$model->fecha_ev = DATE('Y-m-d');
			$model->ev_anio = DATE('Y');
			$model->pro_evaluador = Yii::app()->user->id;
			$total_a1 = $model->a1i1 + $model->a1i2 + $model->a1i3 + $model->a1i4 + $model->a1i5 + $model->a1i6 + $model->a1i7;
			$model->total_ambito1 = $total_a1;
			$total_a2 = $model->a2i1 + $model->a2i2 + $model->a2i3 + $model->a2i4 + $model->a2i5 + $model->a2i6 + $model->a2i7 + 
									$model->a2i8 + $model->a2i9 + $model->a2i10 + $model->a2i11;
			$model->total_ambito2 = $total_a2;
			$total_a3 = $model->a3i1 + $model->a3i2 + $model->a3i3 + $model->a3i4 + $model->a3i5 + $model->a3i6 + $model->a3i7 + 
									$model->a3i8 + $model->a3i9 + $model->a3i10;
			$model->total_ambito3 = $total_a3;
			$model->total_logros = $total_a1 + $total_a2 + $total_a3;

			// se procede a contar la cantidad de no observados de la evaluacion
			if ($model->a1i1 == 0)
				$contador1++;
			if ($model->a1i2 == 0)
				$contador1++;
			if ($model->a1i3 == 0)
				$contador1++;
			if ($model->a1i4 == 0)
				$contador1++;
			if ($model->a1i5 == 0)
				$contador1++;
			if ($model->a1i6 == 0)
				$contador1++;
			if ($model->a1i7 == 0)
				$contador1++;
			if ($model->a2i1 == 0)
				$contador2++;
			if ($model->a2i2 == 0)
				$contador2++;
			if ($model->a2i3 == 0)
				$contador2++;
			if ($model->a2i4 == 0)
				$contador2++;
			if ($model->a2i5 == 0)
				$contador2++;
			if ($model->a2i6 == 0)
				$contador2++;
			if ($model->a2i7 == 0)
				$contador2++;
			if ($model->a2i8 == 0)
				$contador2++;
			if ($model->a2i9 == 0)
				$contador2++;
			if ($model->a2i10 == 0)
				$contador2++;
			if ($model->a2i11 == 0)
				$contador2++;
			if ($model->a3i1 == 0)
				$contador3++;
			if ($model->a3i1 == 0)
				$contador3++;
			if ($model->a3i2 == 0)
				$contador3++;
			if ($model->a3i3 == 0)
				$contador3++;
			if ($model->a3i4 == 0)
				$contador3++;
			if ($model->a3i5 == 0)
				$contador3++;
			if ($model->a3i6 == 0)
				$contador3++;
			if ($model->a3i7 == 0)
				$contador3++;
			if ($model->a3i8 == 0)
				$contador3++;
			if ($model->a3i9 == 0)
				$contador3++;
			if ($model->a3i10 == 0)
				$contador3++;
				
			$porcentaje_a1 = $total_a1 / ((7 - $contador1)*4);
			$porcentaje_a2 = $total_a2 / ((11 - $contador2)*4);
			$porcentaje_a3 = $total_a3 / ((10 - $contador3)*4);


			$model->porcentaje_logro = round((($porcentaje_a1 + $porcentaje_a2 + $porcentaje_a3)/3)*100); 

			if ($model->porcentaje_logro >= 1 && $model->porcentaje_logro <= 66){
				$model->clasificacion = 'Insatisfactorio';	
			}
			if ($model->porcentaje_logro >= 67 && $model->porcentaje_logro <= 83){
				$model->clasificacion = 'Básico';	
			}
			if ($model->porcentaje_logro >= 84 && $model->porcentaje_logro <= 100){
				$model->clasificacion = 'Competente';	
			}
			if ($model->porcentaje_logro >= 101 && $model->porcentaje_logro <= 112){
				$model->clasificacion = 'Destacado';	
			}
			
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} else {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Nota');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Nota('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Nota'])) {
			$model->attributes=$_GET['Nota'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Nota the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Nota::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Nota $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='nota-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	

	public function actionRetro($id)
	{
					
 
		$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
		$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
 
		$fecha2 =  date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
		//Salida: Viernes 24 de Febrero del 2012
 

		$fecha = date('Y');
		
		

		$model1 = new RetroalimentacionForm;
		$evaluacion = new Nota;
		$evaluador = new TblUser;
		$profesor = new Profesor;
		$curso = new Curso;
		$asignatura = new Asignatura;
		$evaluacion = Nota::model() -> findByPK($id);
		$profesor = Profesor::model() -> findByPk($evaluacion->im->pro_rut);
		$evaluador = TblUser::model() -> findByPk($evaluacion->pro_evaluador);
		$asignatura = Asignatura::model() -> findByPk($evaluacion->im->asi_id);
		$curso = Curso::model() -> findByPk($evaluacion->im->cur_id);


		// convertimos la fecha en formato año-mes-dia a dia-mes-año
		ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $evaluacion->fecha_ev, $mifecha); 
      	$fecha3=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1]; 

		if(isset($_POST['RetroalimentacionForm'])){
			$model1 -> attributes=$_POST['RetroalimentacionForm'];
			if ($model1 -> a1_positivos == null || $model1 ->  a2_positivos == null || $model1 ->  a3_positivos == null 
			|| $model1 -> a1_mejorar == null || $model1 ->  a2_mejorar == null || $model1 ->  a3_mejorar == null){
					$model1->validate();
				}
			else{
					

					
					// codigo para generar el doc en pdf
					
					$pdf = Yii::createComponent('application.extensions.MPDF57.mpdf');

					$html="
						<body>
						</br>
						</br>
						<div class=WordSection1>

						<p class=MsoNormal style='text-indent:35.4pt;text-autospace:none'><img
						width=87 height=85
						src='images/cnj_logo.png'
						align=left hspace=12><b><span>RETROALIMENTACIÓN
						OBSERVACIÓN DE AULA</span></b></p>

						<p class=MsoNormal align=center style='text-autospace:none'><b><span>".$fecha."</span></b></p>



						<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=643
 						style='width:17.0cm;margin-left:5.4pt;border-collapse:collapse;border:none'>
 						<tr style='height:18.6pt'>
  							<td width=463 colspan=2 style='width:347.3pt;border-top:double windowtext 1.5pt;
  								border-left:double windowtext 1.5pt;border-bottom:solid black 1.0pt;
  								border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:18.6pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  										style='font-family:'Gill Sans MT','sans-serif''>IDENTIFICACIÓN</span></b></p>
  							</td>
  							<td width=95 style='width:70.9pt;border-top:double windowtext 1.5pt;
  								border-left:none;border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:18.6pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  										style='font-size:9.0pt;font-family:'Gill Sans MT','sans-serif''>% DESEMPEÑO</span></b><b><span
  										style='font-size:11.0pt;font-family:'Gill Sans MT','sans-serif''> </span></b></p>
  							</td>
  							<td width=85 style='width:63.75pt;border-top:double windowtext 1.5pt;
  								border-left:none;border-bottom:solid black 1.0pt;border-right:double windowtext 1.5pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:18.6pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  										style='font-size:10.0pt;font-family:'Gill Sans MT','sans-serif''>N°</span></b></p>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  										style='font-size:10.0pt;font-family:'Gill Sans MT','sans-serif''>Observ.</span></b></p>
  							</td>
 						</tr>
 						<tr style='height:23.0pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;background:
  								#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:23.0pt'>
  								<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  									10.0pt;font-family:'Gill Sans MT','sans-serif''>NOMBRE PROFESOR</span></b></p>
  							</td>
  							<td width=298 style='width:223.3pt;border-top:none;border-left:none;
  								border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:23.0pt'>
  									<p class=MsoNormal style='text-autospace:none'><span style='font-size:11.0pt;
  										font-family:'Gill Sans MT','sans-serif''>".$profesor->pro_nombres." ".$profesor->pro_paterno." ".$profesor->pro_materno."</span></p>
  							</td>
  							<td width=95 rowspan=2 style='width:70.9pt;border-top:none;border-left:none;
  								border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:23.0pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									style='font-size:11.0pt;font-family:'Gill Sans MT','sans-serif''>".$evaluacion->porcentaje_logro."%</span></b></p>
  							</td>
  							<td width=85 rowspan=2 style='width:63.75pt;border-top:none;border-left:none;
  								border-bottom:solid black 1.0pt;border-right:double windowtext 1.5pt;
  								background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:23.0pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									style='font-size:11.0pt;font-family:'Gill Sans MT','sans-serif''>".$evaluacion->observacion."</span></b></p>
  							</td>
 						</tr>
 						<tr style='height:9.65pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  								height:9.65pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  										9.0pt;font-family:'Gill Sans MT','sans-serif''>ASIGNATURA</span></b></p>
  							</td>
  							<td width=298 style='width:223.3pt;border-top:none;border-left:none;
  								border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:9.65pt'>
  									<p class=MsoNormal style='text-autospace:none'><span style='font-size:9.0pt;
  									font-family:'Gill Sans MT','sans-serif''>".$asignatura->asi_nombre."</span></p>
  							</td>
 						</tr>
		 				<tr style='height:12.0pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  								height:12.0pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  									9.0pt;font-family:'Gill Sans MT','sans-serif''>CURSO</span></b></p>
  							</td>
  							<td width=298 style='width:223.3pt;border-top:none;border-left:none;
  							border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  							padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  									<p class=MsoNormal style='text-autospace:none'><span style='font-size:9.0pt;
  										font-family:'Gill Sans MT','sans-serif''>".$curso->cur_nombre."</span></p> 
  							</td>
  							<td width=180 colspan=2 style='width:134.65pt;border-top:none;border-left:
  								none;border-bottom:solid black 1.0pt;border-right:double windowtext 1.5pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:12.0pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									   style='font-size:11.0pt;font-family:'Gill Sans MT','sans-serif''>NIVEL</span></b></p>
  							</td>
 						</tr>
 						<tr style='height:13.55pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  								height:13.55pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
 									 9.0pt;font-family:'Gill Sans MT','sans-serif''>NOMBRE OBSERVADOR</span></b></p>
  							</td>
  							<td width=298 style='width:223.3pt;border-top:none;border-left:none;
  								border-bottom:solid black 1.0pt;border-right:solid windowtext 1.0pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:13.55pt'>
  									<p class=MsoNormal style='text-autospace:none'><span style='font-size:9.0pt;
  									   font-family:'Gill Sans MT','sans-serif''>".$evaluador->ev_nombres." ".$evaluador->ev_paterno." ".$evaluador->ev_materno."</span></p>
  							</td>
  							<td width=180 colspan=2 rowspan=2 style='width:134.65pt;border-top:none;
  								border-left:none;border-bottom:double windowtext 1.5pt;border-right:double windowtext 1.5pt;
  								background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:13.55pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									   style='font-size:11.0pt;font-family:'Gill Sans MT','sans-serif''>".$evaluacion->clasificacion ."</span></b></p>
  							</td>
 						</tr>
 						<tr style='height:7.35pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:double windowtext 1.5pt;border-right:solid black 1.0pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:7.35pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  									   9.0pt;font-family:'Gill Sans MT','sans-serif''>FECHA</span></b></p>
  							</td>
  							<td width=298 style='width:223.3pt;border-top:none;border-left:none;
  								border-bottom:double windowtext 1.5pt;border-right:solid windowtext 1.0pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:7.35pt'>
  									<p class=MsoNormal style='text-autospace:none'><span style='font-size:9.0pt;
  									   font-family:'Gill Sans MT','sans-serif''>".$fecha3."</span></p>
  							</td>
 						</tr>
 						<tr style='height:17.75pt'>
  							<td width=643 colspan=4 valign=top style='width:17.0cm;border:none;
  								border-bottom:solid black 1.0pt;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;
  								height:17.75pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									   style='font-family:'Gill Sans MT','sans-serif''>ÁMBITO I</span></b></p>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									   style='font-size:9.0pt;font-family:'Gill Sans MT','sans-serif''>DOMINIO Y
  									   COBERTURA CURRICULAR</span></b></p>
  							</td>
 						</tr>
 						<tr style='height:50.6pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  							    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  								height:50.6pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  									   10.0pt;font-family:'Gill Sans MT','sans-serif''>ASPECTOS POSITIVOS</span></b></p>
  							</td>
  							<td width=477 colspan=3 style='width:357.95pt;border-top:none;border-left:
  								none;border-bottom:solid black 1.0pt;border-right:double windowtext 1.5pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:50.6pt'>
  									<p class=MsoNormal style='text-autospace:none'>
  									<span style='font-size:9.0pt;font-family:'Calibri','sans-serif''>".nl2br($model1->a1_positivos)."</span></p>
  							</td>
 						</tr>
 						<tr style='height:39.95pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  								height:39.95pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  									   10.0pt;font-family:'Gill Sans MT','sans-serif''>PRÁTICA A MEJORAR</span></b></p>
  							</td>
  							<td width=477 colspan=3 style='width:357.95pt;border-top:none;border-left:
  								none;border-bottom:solid black 1.0pt;border-right:double windowtext 1.5pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:39.95pt'>
  									<p class=MsoNormal style='text-autospace:none'>
  									<span style='font-size:9.0pt;font-family:'Calibri','sans-serif''>".nl2br($model1->a1_mejorar)."</span></p>
  							</td>
 						</tr>
 						<tr style='height:17.75pt'>
  							<td width=643 colspan=4 valign=top style='width:17.0cm;border:solid black 1.0pt;
  								border-top:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:17.75pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									   style='font-family:'Gill Sans MT','sans-serif''>ÁMBITO II</span></b></p>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									   style='font-size:9.0pt;font-family:'Gill Sans MT','sans-serif''>AMBIENTE DE
  									   LA SALA DE CLASES</span></b></p>
  							</td>
 						</tr>
 						<tr style='height:55.1pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  								height:55.1pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  									   10.0pt;font-family:'Gill Sans MT','sans-serif''>ASPECTOS POSITIVOS</span></b></p>
  							</td>
  							<td width=477 colspan=3 style='width:357.95pt;border-top:none;border-left:
  								none;border-bottom:solid black 1.0pt;border-right:double windowtext 1.5pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:55.1pt'>
  									<p class=MsoNormal style='text-autospace:none'>
  									<span style='font-size:9.0pt;font-family:'Calibri','sans-serif''>".nl2br($model1->a2_positivos)."</span></p>
  							</td>
 						</tr>
 						<tr style='height:63.0pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  								height:63.0pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  									   10.0pt;font-family:'Gill Sans MT','sans-serif''>PRÁTICA A MEJORAR</span></b></p>
  							</td>
  							<td width=477 colspan=3 style='width:357.95pt;border-top:none;border-left:
  								none;border-bottom:solid black 1.0pt;border-right:double windowtext 1.5pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:63.0pt'>
  									<p class=MsoNormal style='text-autospace:none'>
  									<span style='font-size:9.0pt;font-family:'Calibri','sans-serif''>".nl2br($model1->a2_mejorar)."</span></p>
  							</td>
 						</tr>
 						<tr style='height:17.75pt'>
  							<td width=643 colspan=4 valign=top style='width:17.0cm;border:solid black 1.0pt;
  								border-top:none;background:#D9D9D9;padding:0cm 5.4pt 0cm 5.4pt;height:17.75pt'>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									   style='font-family:'Gill Sans MT','sans-serif''>ÁMBITO III</span></b></p>
  									<p class=MsoNormal align=center style='text-align:center;text-autospace:none'><b><span
  									   style='font-size:9.0pt;font-family:'Gill Sans MT','sans-serif''>ENSEÑANZA PARA
  									   EL APRENDIZAJE</span></b></p>
  							</td>
 						</tr>
 						<tr style='height:59.95pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  								height:59.95pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  									   10.0pt;font-family:'Gill Sans MT','sans-serif''>ASPECTOS POSITIVOS</span></b></p>
  							</td>
  							<td width=477 colspan=3 style='width:357.95pt;border-top:none;border-left:
  								none;border-bottom:solid black 1.0pt;border-right:double windowtext 1.5pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:59.95pt'>
  									<p class=MsoNormal style='text-autospace:none'>
  									<span style='font-size:9.0pt;font-family:'Calibri','sans-serif''>".nl2br($model1->a3_positivos)."</span></p>
  							</td>
 						</tr>
 						<tr style='height:27.55pt'>
  							<td width=165 style='width:124.0pt;border-top:none;border-left:double windowtext 1.5pt;
  								border-bottom:double windowtext 1.5pt;border-right:solid black 1.0pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:27.55pt'>
  									<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:
  									   10.0pt;font-family:'Gill Sans MT','sans-serif''>PRÁTICA A MEJORAR</span></b></p>
  							</td>
  							<td width=477 colspan=3 style='width:357.95pt;border-top:none;border-left:
  								none;border-bottom:double windowtext 1.5pt;border-right:double windowtext 1.5pt;
  								padding:0cm 5.4pt 0cm 5.4pt;height:27.55pt'>
  									<p class=MsoNormal style='text-autospace:none'>
  									<span style='font-size:9.0pt;font-family:'Calibri','sans-serif''>".nl2br($model1->a2_mejorar)."</span></p>
  							</td>
 						</tr>
						</table>

						<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:14.0pt;
						font-family:'Arial','sans-serif''>&nbsp;</span></b></p>

						<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:14.0pt;
						font-family:'Arial','sans-serif''>&nbsp;</span></b></p>

						<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:14.0pt;
						font-family:'Arial','sans-serif''>&nbsp;</span></b></p>

						<p class=MsoNormal style='text-autospace:none'><span style='font-size:11.0pt;
						font-family:'Gill Sans MT','sans-serif''>&nbsp;</span></p>

						
						<table align='center'>
						<tr><td>_________________________</td><td></td><td>_________________________</td></tr>
							<tr><td align='center'>Firma Docente</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td align='center'>Firma Observador</td></td>
						</table>

<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:14.0pt;
font-family:'Gill Sans MT','sans-serif''>&nbsp;</span></b></p>

<p class=MsoNormal style='text-autospace:none'><b><span style='font-size:14.0pt;
font-family:'Gill Sans MT','sans-serif''>&nbsp;</span></b></p>

<p class=MsoNormal style='text-autospace:none'><span style='font-size:11.0pt;
font-family:'Gill Sans MT','sans-serif''>Fecha: ".$fecha2."</span></p>

</div>
</body>
";
						
						$mpdf=new mPDF('win-1252','LEGAL','','',15,15,15,15,5,7);
						$mpdf->WriteHTML($html);
						$mpdf->Output('Informe de retroalimentación ('.$evaluacion->observacion.') - '.$profesor->pro_nombres.' '.$profesor->pro_paterno.' '.$profesor->pro_materno.'.pdf','D');
						exit;
			
				}
				
			}
			
			$this->render('informe',array('model'=>$model1,'model2'=>$evaluacion));
	}





	
	public function actionExport()
	{
		$model=new Profesor;
		$model->unsetAttributes();  // clear any default values
		if(isset($_POST['Profesor']))
			$model->attributes=$_POST['Profesor'];
 
		$exportType = $_POST['fileType'] = 'PDF';
		
		$dataProvider = new CActiveDataProvider('nota',
			array(
					'criteria'=>array(
							'join'=>'join profesor P on (t.pro_rut = P.pro_rut)')));
 
		if($exportType=='PDF'){
	
			$this->widget('ext.pdffactory.EPdfFactoryHeart', array(
				'title'=>"Profesores",
				'dataProvider' => $dataProvider,
				//'filter'=>$dataProvider,
				'columns' => array(                     
                    array(
                        'header'=>'No',
                        'value'=>'autonumber',
                    ),
                    'pro_rut',
					'total_ambito1',
					'total_ambito2',
					'total_ambito3',
                    'porcentaje_logro',
                    'clasificacion',
                    array(
                    	'name'=>'Nombres',
                    	'value'=>'$data->proRut->pro_nombres'),
                    array(
                    	'name'=>'Apellido Paterno',
                    	'value'=>'$data->proRut->pro_paterno'),
                    array(
                    	'name'=>'Apellido Materno',
                    	'value'=>'$data->proRut->pro_materno')

                   
                    
                ),
        ));
    }
}
}