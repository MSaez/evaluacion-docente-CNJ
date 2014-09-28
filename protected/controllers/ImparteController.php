<?php

class ImparteController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
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
				'actions'=>array('create','update','promedio','visualizar'),
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
		$model=new Imparte;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imparte']))
		{
			$model->attributes=$_POST['Imparte'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->imp_id));
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

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Imparte']))
		{
			$model->attributes=$_POST['Imparte'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->imp_id));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Imparte');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Imparte('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Imparte']))
			$model->attributes=$_GET['Imparte'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Imparte the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Imparte::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Imparte $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='imparte-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionPromedio($id)
	{
		$anio = date('Y');
		$div = 0;
		$ev1 = new Nota;
		$ev2 = new Nota;
		$ev3 = new Nota;
		$ev4 = new Nota;
		$ev5 = new Nota;
		$nota1 = 0;
		$nota2 = 0;
		$nota3 = 0;
		$nota4 = 0;
		$nota5 = 0;
		$profesor = new Profesor;
		$asignatura = new Asignatura;
		$curso = new Curso;
		$total = 0;
		$promedio = 0;
		$clasificacion = " ";
		// cargamos el modelo --imparte-- del profesor
		$model=$this->loadModel($id);
		// obtenemos el rut del profesor
		$rut = $model->pro_rut;
		// cargamos la fila con los datos del profesor 
		$profesor = Profesor::model()->findByPk($rut);
		// obtenemos el id del curso
		$idCurso = $model->cur_id;
		// cargamos la fila con los datos del curso 
		$curso = Curso::model()->findByPk($idCurso);
		// obtenemos el id de la asignatura
		$idAsi = $model->asi_id;
		// cargamos la fila con los datos de la asignatura 
		$asignatura = Asignatura::model()->findByPk($idAsi);		
		// criterias para obtener el modelo especifico de un profesor por  año y observación
		$c1 = new CDbCriteria();
		$c1->condition = "im_id = ".$id." AND observacion = 1 AND ev_anio = ".$anio;
		$c2 = new CDbCriteria();
		$c2->condition = "im_id = ".$id." AND observacion = 2 AND ev_anio = ".$anio;
		$c3 = new CDbCriteria();
		$c3->condition = "im_id = ".$id." AND observacion = 3 AND ev_anio = ".$anio;
		$c4 = new CDbCriteria();
		$c4->condition = "im_id = ".$id." AND observacion = 4 AND ev_anio = ".$anio;
		$c5 = new CDbCriteria();
		$c5->condition = "im_id = ".$id." AND observacion = 5 AND ev_anio = ".$anio;
		// buscamos los modelos
		$ev1 = Nota::model()->find($c1);
		$ev2 = Nota::model()->find($c2);
		$ev3 = Nota::model()->find($c3);
		$ev4 = Nota::model()->find($c4);
		$ev5 = Nota::model()->find($c5);
		// preguntamos si existe al menos 1 evaluación, si no envia a una vista de error
		if (($ev1 == null) && ($ev2 == null) && ($ev3 == null) && ($ev4 == null) && ($ev5 == null)){
				$this->render('error');}
		else{
				// determinamos el divisor segun la cantidad de evaluaciones que hay hasta el momento
				if ($ev1 != null && $ev2 == null && $ev3 == null && $ev4 == null && $ev5 == null)// si solo está ev1
				{	
					$div = 1;
					$nota1 = $ev1->porcentaje_logro;
				}
				if ($ev1 != null && $ev2 != null && $ev3 == null && $ev4 == null && $ev5 == null)// si solo está ev1 y ev2
				{
					$div = 2;
					$nota1 = $ev1->porcentaje_logro;
					$nota2 = $ev2->porcentaje_logro;
				}	
				if ($ev1 != null && $ev2 != null && $ev3 != null && $ev4 == null && $ev5 == null)// si solo está ev1,ev2 y ev3
				{
					$div = 3;
					$nota1 = $ev1->porcentaje_logro;
					$nota2 = $ev2->porcentaje_logro;
					$nota3 = $ev3->porcentaje_logro;
				}
				if ($ev1 != null && $ev2 != null && $ev3 != null && $ev4 != null && $ev5 == null)// si solo está ev1,ev2,ev3 y ev4
				{
					$div = 4;
					$nota1 = $ev1->porcentaje_logro;
					$nota2 = $ev2->porcentaje_logro;
					$nota3 = $ev3->porcentaje_logro;
					$nota4 = $ev4->porcentaje_logro;
				}
				if ($ev1 != null && $ev2 != null && $ev3 != null && $ev4 != null && $ev5 != null)// si estan todas
				{
					$div = 5;
					$nota1 = $ev1->porcentaje_logro;
					$nota2 = $ev2->porcentaje_logro;
					$nota3 = $ev3->porcentaje_logro;
					$nota4 = $ev4->porcentaje_logro;
					$nota5 = $ev5->porcentaje_logro;
				}	
				
				// calculamos el promedio de las cinco observaciones
				$total = $nota1 + $nota2 + $nota3 + $nota4 + $nota5;
				$promedio = $total/$div;
				// obtenemos la clasificación según la escala
				if ($promedio >= 1 && $promedio <= 66){
					$clasificacion = 'Insatisfactorio';	
				}
				if ($promedio >= 67 && $promedio <= 83){
					$clasificacion = 'Básico';	
				}
				if ($promedio >= 84 && $promedio <= 100){
					$clasificacion = 'Competente';	
				}
				if ($promedio >= 101 && $promedio <= 112){
					$clasificacion = 'Destacado';	
				}
				// enviamos los datos a una vista para su visualización
				$this->render('resultado',array(
					'promedio'=>$promedio,
					'clasificacion'=>$clasificacion,
					'profesor'=>$profesor,
					'asignatura'=>$asignatura,
					'curso'=>$curso,
					'div'=>$div
				));
			}
				
			
		
	}

	public function actionVisualizar($id)
	{
		$anio = date('Y');
		$ev1 = new Nota;
		$ev2 = new Nota;
		$ev3 = new Nota;
		$ev4 = new Nota;
		$ev5 = new Nota;
		$profesor = new Profesor;
		$asignatura = new Asignatura;
		$curso = new Curso;
		$total = 0;
		$promedio = 0;
		$clasificacion = " ";
		// cargamos el modelo --imparte-- del profesor
		$model=$this->loadModel($id);
		// obtenemos el rut del profesor
		$rut = $model->pro_rut;
		// cargamos la fila con los datos del profesor 
		$profesor = Profesor::model()->findByPk($rut);
		// obtenemos el id del curso
		$idCurso = $model->cur_id;
		// cargamos la fila con los datos del curso 
		$curso = Curso::model()->findByPk($idCurso);
		// obtenemos el id de la asignatura
		$idAsi = $model->asi_id;
		// cargamos la fila con los datos de la asignatura 
		$asignatura = Asignatura::model()->findByPk($idAsi);		
		// criterias para obtener el modelo especifico de un profesor por  año y observación
		$c1 = new CDbCriteria();
		$c1->condition = "im_id = ".$id." AND observacion = 1 AND ev_anio = ".$anio;
		$c2 = new CDbCriteria();
		$c2->condition = "im_id = ".$id." AND observacion = 2 AND ev_anio = ".$anio;
		$c3 = new CDbCriteria();
		$c3->condition = "im_id = ".$id." AND observacion = 3 AND ev_anio = ".$anio;
		$c4 = new CDbCriteria();
		$c4->condition = "im_id = ".$id." AND observacion = 4 AND ev_anio = ".$anio;
		$c5 = new CDbCriteria();
		$c5->condition = "im_id = ".$id." AND observacion = 5 AND ev_anio = ".$anio;
		// buscamos los modelos
		$ev1 = Nota::model()->find($c1);
		$ev2 = Nota::model()->find($c2);
		$ev3 = Nota::model()->find($c3);
		$ev4 = Nota::model()->find($c4);
		$ev5 = Nota::model()->find($c5);
		// preguntamos si estan todos los modelos, si no envia a una vista de error
		if ($ev1 == null && $ev2 == null && $ev3 == null && $ev4 == null && $ev5 == null){
				$this->render('error1');}
		else{
				
				// enviamos los datos a una vista para su visualización
				$this->render('resultado1',array(
					'promedio'=>$promedio,
					'clasificacion'=>$clasificacion,
					'profesor'=>$profesor,
					'asignatura'=>$asignatura,
					'curso'=>$curso,
					'ev1'=>$ev1,
					'ev2'=>$ev2,
					'ev3'=>$ev3,
					'ev4'=>$ev4,
					'ev5'=>$ev5
				));
			} 
				
			
		
	}


}
